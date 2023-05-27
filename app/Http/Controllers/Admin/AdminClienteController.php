<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Clientes;
use App\Models\Estados;
use App\Models\Planes;
use App\Models\BitacoraCliente;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Imports\ClientesImport;
use App\Models\Departamentos;
use App\Models\Provincias;
use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use Maatwebsite\Excel\Facades\Excel;

use App\Notifications\ClienteRegistroNotification;

use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;

class AdminClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function agendas($id){
        
        // dd($id);
        if (auth()->user()->rol == "Supervisor-Backoffice" && $id != auth()->user()->id){
            return view('admin.no_autorizado');
        }
        return view('admin.backoffices.admin_agendasbackoffices_view');

    }

/*Inicio Administrador */
    public function index()
    {
        $clientes = Clientes::orderBy('id', 'desc')->get();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_cliente = Departamentos::all();
        $provin_cliente = Provincias::all();
        return view('admin.cliente.cliente_view', compact('clientes', 'planes', 'estados', 'admins','depart_cliente','provin_cliente'));
    }
    public function add()
    {
        $planes = Planes::where('status', '1')->orderBy('id', 'desc')->get();
        $estados = Estados::where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::whereIn('rol', ['AsesorCall','AsesorCampo'])->where('status', '1')->get();
        $depart_cliente = Departamentos::all();
        $provin_cliente = Provincias::all();
        ///$departments = Department::where('active', '1')->get();
        //$provinces = provincias::get();
        //$districts = District::w->get();
        return view('admin.cliente.cliente_add', compact('planes', 'estados', 'admins','depart_cliente','provin_cliente'));
        //return view('admin.cliente.cliente_add', compact('planes', 'estados', 'admins','depart_cliente','provin_cliente','departments','provinces'));
    }

    public function store(Request $request)
    {
        $obj = new Clientes();
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->fnac = $request->fnac;
        $obj->lnac = strtoupper($request->lnac);
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->id_plan = $request->id_plan;
        $obj->codinst = $request->codinst;
        $obj->finst = $request->finst;
        $obj->id_estado = 8;
        //$obj->id_estado = $request->id_estado;
        $obj->obs = strtoupper($request->obs);
        $obj->id_admin = $request->id_admin;
        $obj->save();
        return redirect('admin/cliente/view')->with('crear', 'actualizo correctamente.');
    }
    public function edit($id)
    {
        $cliente_data = Clientes::where('id', $id)->first();
        $planes = Planes::where('status', '1')->orderBy('id', 'desc')->get();
        $estados = Estados::where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::whereIn('rol', ['AsesorCall','AsesorCampo'])->where('status', '1')->get();
        $depart_cliente = Departamentos::all();
        $provin_cliente = Provincias::all();
        return view('admin.cliente.cliente_edit', compact('cliente_data', 'planes', 'estados', 'admins','depart_cliente','provin_cliente'));
    }

    public function update(Request $request, $id)
    {
        $obj = Clientes::where('id', $id)->first();
        if ($request->hasFile('fdni')) {
            $request->validate(['fdni' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni')->extension();
            $foto_dni =  'DNI_F_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni')->move(public_path('uploads/datero/'), $foto_dni);
            $obj->fdni = $foto_dni;
        }
        if ($request->hasFile('fdni1')) {
            $request->validate(['fdni1' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni1')->extension();
            $foto_dni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni1')->move(public_path('uploads/datero/'), $foto_dni1);
            $obj->fdni1 = $foto_dni1;
        }
        if ($request->hasFile('frecib')) {
            $request->validate(['frecib' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('frecib')->extension();
            $foto_recib = 'RECIBO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('frecib')->move(public_path('uploads/datero/'), $foto_recib);
            $obj->frecib = $foto_recib;
        }
        if ($request->hasFile('grab')) {
            $request->validate(['grab' => 'max:5000|mimes:wav,mp3']);
            $ext = $request->file('grab')->extension();
            $grabacion = 'AUDIO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('grab')->move(public_path('uploads/datero/'), $grabacion);
            $obj->grab = $grabacion;
        }
        if ($request->hasFile('ceval')) {
            $request->validate(['ceval' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('ceval')->extension();
            $ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('ceval')->move(public_path('uploads/datero/'), $ceval);
            $obj->ceval = $ceval;
        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->fnac = $request->fnac;
        $obj->lnac = strtoupper($request->lnac);
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->id_plan = $request->id_plan;
        $obj->codinst = $request->codinst;
        $obj->finst = $request->finst;
        $obj->id_estado = $request->id_estado;
        $obj->obs = strtoupper($request->obs);
        $obj->id_admin = $request->id_admin;
        $obj->update();
        return redirect('admin/cliente/view')->with('actualizo', 'Se actualizó correctamente.');
    }

    public function delete($id)
    {
        $single_data = Clientes::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }

    public function departamentos(Request $request){
        if(isset($request->texto)){
            $departamentos = Departamentos::wheredepart_id($request->texto)->get();
            return response()->json(
                [
                    'lista' => $departamentos,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );
        }
    }

    public function provincias(Request $request){
        if(isset($request->texto)){
            $provincias = Provincias::whereProvin_id($request->texto)->get();
            return response()->json(
                [
                    'lista' => $provincias,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );
        }
    }
    /*Fin Administrador */


    ///* Inicio Asesor-Campo *///
    public function viewasesorcampo($id)
    {
        $clientesfiltro = Clientes::where('id_admin', $id)->whereIn('id_estado', ['1', '4', '7', '8', '10', '11', '12', '14', '15', '16', '18', '19'])->orderBy('id', 'desc')->get();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        return view('admin.asesorcampo.asesorcampo_view', compact('clientesfiltro', 'planes', 'estados', 'admins'));
    }

    public function addasesorcampo()
    {
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        return view('admin.asesorcampo.asesorcampo_add', compact('planes', 'estados', 'admins'));
    }

    public function storeasesorcampo(Request $request)
    {
        $obj = new Clientes();
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->id_plan = $request->id_plan;
        $obj->obs = strtoupper($request->obs);
        $obj->fdni = 'DNI_F_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->fdni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->frecib = 'RECIBO_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->grab = 'AUDIO_' . $request->dni.'_' . time() . '.' . 'wav';;
        $obj->ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->depart = 26;
        $obj->provin = 197;
        $obj->distri = 1;
        $obj->id_estado = 8;
        $obj->id_provi = 3;
        $obj->id_admin = $request->id_admin;
        $obj->save();

        self::make_registro_notification($obj);

        // $user = Admin::whereIn('rol',['Administrador','Supervisor-Backoffice','Supervisor-Ventas','Backoffice'])->get();
        // Notification::send($user,new ClienteRegistroNotification($request->name));

        $id = auth()->user()->id;
        return redirect('admin/asesorcampo/viewasesorcampo/' . $id)->with('crear', 'Se creo correctamente.');
    }
    static function make_registro_notification($obj){
       
        $user = Admin::whereIn('rol',['Administrador','Supervisor-Backoffice','Supervisor-Ventas','Backoffice'])->get();
        Notification::send($user,new ClienteRegistroNotification($obj));

    }

    public function mark_all_notifications(){
        auth()->user()->unreadNotifications->markAsRead();
        return back();
    }

    public function mark_a_notification($notification_id){
        auth()->user()->unreadNotifications->when($notification_id, function($query) use ($notification_id){
            return $query->where('id',$notification_id);
        })->markAsRead();
        return back();
        
    }

    public function editasesorcampo($id)
    {
        $cliente_data = Clientes::where('id', $id)->first();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::whereIn('id', ['1', '4', '5', '8', '15'])->where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_ecam = Departamentos::all();
        $provin_ecam = Provincias::all();
        return view('admin.asesorcampo.asesorcampo_edit', compact('cliente_data', 'planes', 'estados', 'admins','depart_ecam','provin_ecam'));
    }

    public function detailasesorcampo($id){
        $cliente_detail = Clientes::where('id', $id)->first();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::whereIn('id', ['1','2','3', '4','5','6','8'])->where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_ecam = Departamentos::all();
        return view('admin.asesorcampo.asesorcampo_ver', compact('cliente_detail', 'planes', 'estados', 'admins','depart_ecam'));
    }

    public function updateasesorcampo(Request $request, $id)
    {
        $obj = Clientes::where('id', $id)->first();
        if ($request->hasFile('fdni')) {
            $request->validate(['fdni' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni')->extension();
            $foto_dni =  'DNI_F_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni')->move(public_path('uploads/datero/'), $foto_dni);
            $obj->fdni = $foto_dni;
        }
        if ($request->hasFile('fdni1')) {
            $request->validate(['fdni1' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni1')->extension();
            $foto_dni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni1')->move(public_path('uploads/datero/'), $foto_dni1);
            $obj->fdni1 = $foto_dni1;
        }
        if ($request->hasFile('frecib')) {
            $request->validate(['frecib' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('frecib')->extension();
            $foto_recib = 'RECIBO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('frecib')->move(public_path('uploads/datero/'), $foto_recib);
            $obj->frecib = $foto_recib;
        }
        if ($request->hasFile('grab')) {
            $request->validate(['grab' => 'max:5000|mimes:wav,mp3']);
            $ext = $request->file('grab')->extension();
            $grabacion = 'AUDIO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('grab')->move(public_path('uploads/datero/'), $grabacion);
            $obj->grab = $grabacion;
        }
        if ($request->hasFile('ceval')) {
            $request->validate(['ceval' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('ceval')->extension();
            $ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('ceval')->move(public_path('uploads/datero/'), $ceval);
            $obj->ceval = $ceval;
        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->fnac = $request->fnac;
        $obj->id_plan = $request->id_plan;
        $obj->codinst = $request->codinst;
        $obj->finst = $request->finst;
        $obj->id_estado = $request->id_estado;
        $obj->obs = strtoupper($request->obs);
        $obj->update();
        // $obj = new BitacoraAdmin();
        // $obj->ip = request()->ip();
        // $obj->id_admin = auth()->user()->id ;
        // $obj->id_estado = $request->id_estado ;
        // $obj->obs = $request->id ;
        // //$obj->obs = $request->obs;
        // $obj->save();
        
        $id = auth()->user()->id;
        return redirect('admin/asesorcampo/viewasesorcampo/' . $id)->with('actualizo', 'ok');
    }
    ///* Fin Asesor-Campo *///


    ///* Inicio Asesor-call *///
    public function viewasesorcall($id)
    {
        $clientescall = Clientes::where('id_admin', $id)->whereIn('id_estado', ['1','3','4', '7','8', '10', '11', '12', '14', '16', '18', '19','20','21','23'])->orderBy('id', 'desc')->get();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        return view('admin.asesorcall.asesorcall_view', compact('clientescall', 'planes', 'estados', 'admins'));
    }

    public function addasesorcall()
    {
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_ecall = Departamentos::all();
        $provin_ecall = Provincias::all();
        return view('admin.asesorcall.asesorcall_add', compact('planes', 'estados', 'admins','depart_ecall','provin_ecall'));
    }

    public function storeasesorcall(Request $request)
    {
        $obj = new Clientes();
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->email = strtolower($request->email);
        $obj->fnac = $request->fnac;
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->id_plan = $request->id_plan;
        $obj->obs = strtoupper($request->obs);
        $obj->fdni = 'DNI_F_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->fdni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->frecib = 'RECIBO_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->grab = 'AUDIO_' . $request->dni.'_' . time() . '.' . 'wav';;
        $obj->ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->id_estado = 8;
        $obj->id_provi = 3;
        $obj->id_admin = $request->id_admin;
        $obj->save();


        // $obj = new BitacoraCliente();
        // $obj->ip = request()->ip();
        // $obj->dni = $request->dni;
        // $obj->name = $request->name;
        // $obj->direc = $request->direc;
        // $obj->dref = $request->dref;
        // $obj->cel = $request->cel;
        // $obj->cel2 = $request->cel2;
        // $obj->email = strtolower($request->email);
        // $obj->depart = $request->depart;
        // $obj->provin = $request->provin;
        // $obj->distri = $request->distri;
        // $obj->fnac = $request->fnac;
        // $obj->id_plan = $request->id_plan;
        // $obj->codinst = $request->codinst;
        // $obj->finst = $request->finst;
        // $obj->id_estado = $request->id_estado;
        // $obj->obs = $request->obs;
        // $obj->id_provi = 3;
        // $obj->id_admin = auth()->user()->id ;        
        // $obj->save();
        self::make_registro_notification($obj);

        // $user = Admin::whereIn('rol',['Administrador','Supervisor-Backoffice','Supervisor-Ventas','Backoffice'])->get();
        // Notification::send($user,new ClienteRegistroNotification($request->name));
        
        $id = auth()->user()->id;
        return redirect('admin/asesorcall/viewasesorcall/' . $id)->with('crear', 'Se creo correctamente.');

    }
    public function editasesorcall($id){
        $cliente_ecall = Clientes::where('id', $id)->first();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::whereIn('id', ['1','2','3', '4','5','6','8'])->where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_ecall = Departamentos::all();
        $provin_ecall = Provincias::all();
        return view('admin.asesorcall.asesorcall_edit', compact('cliente_ecall', 'planes', 'estados', 'admins','depart_ecall','provin_ecall'));
    }

    public function detailasesorcall($id){
        $cliente_detail = Clientes::where('id', $id)->first();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::whereIn('id', ['1','2','3', '4','5','6','8'])->where('status', '1')->orderBy('id', 'desc')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_ecall = Departamentos::all();
        $provin_ecall = Provincias::all();
        return view('admin.asesorcall.asesorcall_ver', compact('cliente_detail', 'planes', 'estados', 'admins','depart_ecall','provin_ecall'));

    }

    public function updateasesorcall(Request $request, $id){
        $obj = Clientes::where('id', $id)->first();
        if ($request->hasFile('fdni')) {
            $request->validate(['fdni' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni')->extension();
            $foto_dni =  'DNI_F_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni')->move(public_path('uploads/datero/'), $foto_dni);
            $obj->fdni = $foto_dni;
        }
        if ($request->hasFile('fdni1')) {
            $request->validate(['fdni1' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni1')->extension();
            $foto_dni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni1')->move(public_path('uploads/datero/'), $foto_dni1);
            $obj->fdni1 = $foto_dni1;
        }
        if ($request->hasFile('frecib')) {
            $request->validate(['frecib' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('frecib')->extension();
            $foto_recib = 'RECIBO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('frecib')->move(public_path('uploads/datero/'), $foto_recib);
            $obj->frecib = $foto_recib;
        }
        if ($request->hasFile('grab')) {
            $request->validate(['grab' => 'max:5000|mimes:wav,mp3']);
            $ext = $request->file('grab')->extension();
            $grabacion = 'AUDIO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('grab')->move(public_path('uploads/datero/'), $grabacion);
            $obj->grab = $grabacion;
        }
        if ($request->hasFile('ceval')) {
            $request->validate(['ceval' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('ceval')->extension();
            $ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('ceval')->move(public_path('uploads/datero/'), $ceval);
            $obj->ceval = $ceval;
        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->fnac = $request->fnac;
        $obj->id_plan = $request->id_plan;
        $obj->codinst = $request->codinst;
        $obj->finst = $request->finst;
        $obj->id_estado = $request->id_estado;
        $obj->obs = strtoupper($request->obs);
        $obj->update();

        // $obj = new BitacoraCliente();
        // $obj->ip = request()->ip();
        // $obj->dni = $request->dni;
        // $obj->name = $request->name;
        // $obj->direc = $request->direc;
        // $obj->dref = $request->dref;
        // $obj->cel = $request->cel;
        // $obj->cel2 = $request->cel2;
        // $obj->email = strtolower($request->email);
        // $obj->depart = $request->depart;
        // $obj->provin = $request->provin;
        // $obj->distri = $request->distri;
        // $obj->fnac = $request->fnac;
        // $obj->id_plan = $request->id_plan;
        // $obj->codinst = $request->codinst;
        // $obj->finst = $request->finst;
        // $obj->id_estado = $request->id_estado;
        // $obj->obs = $request->obs;
        // $obj->id_provi = 3;
        // $obj->id_admin = auth()->user()->id ;        
        // $obj->save();

        $id = auth()->user()->id;
        return redirect('admin/asesorcall/viewasesorcall/' . $id)->with('actualizo', 'ok');
    }
    
    /*Fin Asesor-Call*/


    ///*Inicio Backoffice *///
    public function backoffice(){
        $dateros_backoffice = Clientes::whereIn('id_estado', ['1', '20'])->orderBy('id', 'desc')->get();
        $planes_backoffice = Planes::where('status', '1')->get();
        $estados_backoffice = Estados::where('status', '1')->get();

        return view('admin.backoffice.daterobackoffice_view', compact('dateros_backoffice', 'planes_backoffice', 'estados_backoffice'));
    }
    public function backofficedateros(){
        $dateros_backoffice = Clientes::whereIn('id_admin', ['1'])->orderBy('id', 'desc')->get();
        $planes_backoffice = Planes::where('status', '1')->get();
        $estados_backoffice = Estados::where('status', '1')->get();

        return view('admin.backoffice.backofficedateros_view', compact('dateros_backoffice', 'planes_backoffice', 'estados_backoffice'));
    }
    public function addbackoffice(){
        return view('admin.backoffice.daterobackoffice_add');
    }
    public function storebackoffice(Request $request){
        $obj = new Clientes();
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->id_plan = $request->id_plan;
        $obj->id_estado = $request->id_estado;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->lnac = strtoupper($request->lnac);
        $obj->fnac = $request->fnac;
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->finst = $request->finst;
        $obj->obs = strtoupper($request->obs);
        $obj->codinst = $request->codinst;
        $obj->save();
        return redirect('admin/backoffice/view')->with('crear', 'Se creo satisfactoriamente.');
    }
    public function editbackoffice($id){
        $datero_data = Clientes::where('id', $id)->first();
        $planes_backoffice = Planes::where('status', '1')->get();
        $estados_backoffice = Estados::whereIn('id', ['1', '12', '16', '20'])->where('status', '1')->orderBy('id', 'desc')->get();
        $depart_backoffice = Departamentos::all();
        $provin_backoffice = Provincias::all();
        return view('admin.backoffice.daterobackoffice_edit', compact('datero_data', 'planes_backoffice', 'estados_backoffice','depart_backoffice','provin_backoffice'));
    }
    public function updatebackoffice(Request $request, $id){
        $obj = Clientes::where('id', $id)->first();
        if ($request->hasFile('fdni')) {
            $request->validate(['fdni' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni')->extension();
            $foto_dni =  'DNI_F_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni')->move(public_path('uploads/datero/'), $foto_dni);
            $obj->fdni = $foto_dni;
        }
        if ($request->hasFile('fdni1')) {
            $request->validate(['fdni1' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni1')->extension();
            $foto_dni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni1')->move(public_path('uploads/datero/'), $foto_dni1);
            $obj->fdni1 = $foto_dni1;
        }
        if ($request->hasFile('frecib')) {
            $request->validate(['frecib' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('frecib')->extension();
            $foto_recib = 'RECIBO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('frecib')->move(public_path('uploads/datero/'), $foto_recib);
            $obj->frecib = $foto_recib;
        }
        if ($request->hasFile('grab')) {
            $request->validate(['grab' => 'max:5000|mimes:wav,mp3']);
            $ext = $request->file('grab')->extension();
            $grabacion = 'AUDIO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('grab')->move(public_path('uploads/datero/'), $grabacion);
            $obj->grab = $grabacion;
        }
        if ($request->hasFile('ceval')) {
            $request->validate(['ceval' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('ceval')->extension();
            $ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('ceval')->move(public_path('uploads/datero/'), $ceval);
            $obj->ceval = $ceval;
        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->id_plan = $request->id_plan;
        $obj->id_estado = $request->id_estado;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->lnac = strtoupper($request->lnac);
        $obj->fnac = $request->fnac;
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->finst = $request->finst;
        $obj->obs = strtoupper($request->obs);
        $obj->codinst = $request->codinst;
        $obj->update();
        return redirect('admin/backoffice/view')->with('actualizo', 'actualizo correctamente.');
    }
    public function deletebackoffice($id){
        $single_data = Clientes::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }
    ///*Fin Backoffice *///



    ///*Inicio Supervisor-backoffice *///
    public function backoffices(){
        $list_general_backoffices = Clientes::whereIn('id_estado', ['1','10','16'])->orderBy('id', 'desc')->get();
        $Pendiente_backoffices = Clientes::whereIn('id_estado', ['1'])->orderBy('id', 'desc')->get();
        $Registradosgc_backoffices = Clientes::whereIn('id_estado', ['16'])->orderBy('id', 'desc')->get();
        $completado_backoffices = Clientes::whereIn('id_estado', ['10'])->orderBy('id', 'desc')->get();
        $planes_backoffices = Planes::where('status', '1')->get();
        $estados_backoffices = Estados::where('status', '1')->get();

        $Tlist_general_backoffices = Clientes::whereIn('id_estado', ['1','10','16'])->orderBy('id', 'desc')->count();
        $TPendiente_backoffices = Clientes::whereIn('id_estado', ['1'])->orderBy('id', 'desc')->count();
        $TRegistradosgc_backoffices = Clientes::whereIn('id_estado', ['16'])->orderBy('id', 'desc')->count();
        $Tcompletado_backoffices = Clientes::whereIn('id_estado', ['10'])->orderBy('id', 'desc')->count();
        return view('admin.backoffices.daterobackoffices_view', compact('list_general_backoffices', 'planes_backoffices', 'estados_backoffices','Pendiente_backoffices','Registradosgc_backoffices','completado_backoffices','Tlist_general_backoffices','TPendiente_backoffices','TRegistradosgc_backoffices','Tcompletado_backoffices'));
    }
    public function addbackoffices(){
        return view('admin.backoffices.daterobackoffices_add');
    }

    public function storebackoffices(Request $request){
        $obj = new Clientes();
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->id_plan = $request->id_plan;
        $obj->id_estado = $request->id_estado;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->lnac = strtoupper($request->lnac);
        $obj->fnac = $request->fnac;
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->finst = $request->finst;
        $obj->obs = strtoupper($request->obs);
        $obj->codinst = $request->codinst;
        $obj->save();
        return redirect('admin/backoffices/view')->with('crear', 'Datero se creo satisfactoriamente.');
    }

    public function editbackoffices($id){
        $dateros_backoffices = Clientes::where('id', $id)->first();
        $planes_backoffices = Planes::where('status', '1')->get();
        $estados_backoffices = Estados::whereIn('id', ['10', '11', '12', '14', '16'])->where('status', '1')->orderBy('id', 'desc')->get();
        $depart_backoffices = Departamentos::all();
        $provin_backoffices = Provincias::all();
        //$estados_backoffices = Estados::where('status', '1')->orderBy('id', 'desc')->get();
        return view('admin.backoffices.daterobackoffices_edit', compact('dateros_backoffices', 'planes_backoffices', 'estados_backoffices','depart_backoffices','provin_backoffices'));
    }
    public function updatebackoffices(Request $request, $id){
        $obj = Clientes::where('id', $id)->first();
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->cel2 = $request->cel2;
        $obj->email = strtolower($request->email);
        $obj->id_plan = $request->id_plan;
        $obj->id_estado = $request->id_estado;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->lnac = strtoupper($request->lnac);
        $obj->fnac = $request->fnac;
        $obj->np = strtoupper($request->np);
        $obj->nm = strtoupper($request->nm);
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->finst = $request->finst;
        $obj->obs = strtoupper($request->obs);
        $obj->codinst = $request->codinst;
        $obj->update();
        return redirect('admin/backoffices/view')->with('actualizo', 'actualizo correctamente.');
    }

    public function deletebackoffices($id){
        $single_data = Clientes::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }
    ///*Fin Supervisor-backoffice*///


    ///*Inicio Tecnico-Cliente*///
    public function viewtec($id){
        // if (auth()->user()->rol != "Administrador" && auth()->user()->rol != "Tecnico" && $id != auth()->user()->id) {
        //     return redirect('admin/home');
        // }
        $tecnicofiltro = Clientes::where('id_admin', $id)->orderBy('id', 'desc')->get();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', 'Activado')->get();
        return view('admin.tecnico.datero_viewtec', compact('tecnicofiltro', 'planes', 'estados', 'admins'));
    }

    public function addtec(){
        $planes = Planes::where('status', '1')->get();
        $depart_tecnico = Departamentos::all();
        $provin_tecnico = Provincias::all();
        return view('admin.tecnico.datero_addtec', compact('planes','depart_tecnico','provin_tecnico'));
    }

    public function storetec(Request $request){
        $obj = new Clientes();
        if ($request->hasFile('fdni')) {
            $request->validate(['fdni' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni')->extension();
            $foto_dni =  'DNI_F_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni')->move(public_path('uploads/datero/'), $foto_dni);

        }
        if ($request->hasFile('fdni1')) {
            $request->validate(['fdni1' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('fdni1')->extension();
            $foto_dni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('fdni1')->move(public_path('uploads/datero/'), $foto_dni1);

        }
        if ($request->hasFile('frecib')) {
            $request->validate(['frecib' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('frecib')->extension();
            $foto_recib = 'RECIBO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('frecib')->move(public_path('uploads/datero/'), $foto_recib);

        }
        if ($request->hasFile('grab')) {
            $request->validate(['grab' => 'max:5000|mimes:wav,mp3']);
            $ext = $request->file('grab')->extension();
            $grabacion = 'AUDIO_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('grab')->move(public_path('uploads/datero/'), $grabacion);

        }
        if ($request->hasFile('ceval')) {
            $request->validate(['ceval' => 'image|mimes:jpg,jpeg,png,gif']);
            $ext = $request->file('ceval')->extension();
            $ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . $ext;
            $request->file('ceval')->move(public_path('uploads/datero/'), $ceval);

        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->cel = $request->cel;
        $obj->email = strtolower($request->email);
        $obj->id_plan = $request->id_plan;
        $obj->dname = strtoupper($request->dname);
        $obj->dcel = $request->dcel;
        $obj->direc = strtoupper($request->direc);
        $obj->dref = strtoupper($request->dref);
        $obj->fdni = 'DNI_F_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->fdni1 = 'DNI_P_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->frecib = 'RECIBO_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->grab = 'AUDIO_' . $request->dni.'_' . time() . '.' . 'wav';;
        $obj->ceval = 'CEVAL_' . $request->dni.'_' . time() . '.' . 'png';
        $obj->depart = $request->depart;
        $obj->provin = $request->provin;
        $obj->distri = $request->distri;
        $obj->id_estado = 1;
        $obj->id_provi = 3;
        $obj->id_admin = $request->id_admin;
        $obj->save();
        $id = auth()->user()->id;
        return redirect('admin/tecnico/viewtec/' . $id)->with('crear', 'Se creo correctamente.');
    }
    ///*Fin Tecnico-Cliente*///

    public function downloadFile($id){
        $pathtoFile = public_path() . 'uploads/datero/' . $id;
        return response()->download($pathtoFile);
    }

    ///*Inicio Carga Excel*///
    public function vistacarga(){
        $clientes = Clientes::orderBy('id', 'desc')->get();
        return view('admin.carga.carga_view', compact('clientes'));
    }
    public function cargacliente(){
        Excel::import(new ClientesImport, request()->file('file'));
        return back()->with('crear', 'Se creo satisfactoriamente.');
    }
    ///*Fin Carga Excel*///

    ///*Inicio Bitacora*///
    public function bitacora(){
        $badmin = BitacoraAdmin::all();
        return view('admin.backoffices.bitacora_backoffices', compact('badmin'));
    }
    ///*Bitacora Bitacora*///
}
