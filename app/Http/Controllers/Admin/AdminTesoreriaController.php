<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Clientes;
use App\Models\Estados;
use App\Models\Planes;
use App\Models\BitacoraAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Imports\ClientesImport;
use App\Models\Departamentos;
use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use App\Models\Provincias;
use Maatwebsite\Excel\Facades\Excel;

use Carbon\Carbon;

class AdminTesoreriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /*Inicio Tesoreria */

    public function viewtesoreria(){

        $validado_tesoreria = Clientes::whereIn('id_estado', ['14'])->orderBy('id', 'desc')->get();
        $por_pagar_tesoreria = Clientes::whereIn('id_estado', ['19'])->orderBy('id', 'desc')->get();
        $completado_tesoreria = Clientes::whereIn('id_estado', ['7','10'])->orderBy('id', 'desc')->get();
        $todo_tesoreria = Clientes::whereIn('id_estado', ['14','19','10'])->orderBy('id', 'desc')->get();
        

        $TotalValidado = Clientes::whereIn('id_estado', ['14'])->orderBy('id', 'desc')->count();
        $TotalPorPagar = Clientes::whereIn('id_estado', ['19'])->orderBy('id', 'desc')->count();
        $TotalCompletado = Clientes::whereIn('id_estado', ['7','10'])->orderBy('id', 'desc')->count();
        $TotalTodo = Clientes::whereIn('id_estado', ['10','14','19'])->orderBy('id', 'desc')->count();

        //return datatables()->collection($validado_tesoreria )->toJson();
        // $data = ['success'=>true,
        //         'validado_tesoreria'=>$validado_tesoreria,
        //         'por_pagar_tesoreria'=>$por_pagar_tesoreria,
        //         ];
        // return response()->json($data, 200, []);
        return view('admin.tesoreria.tesoreria_view', compact('validado_tesoreria','por_pagar_tesoreria','completado_tesoreria','todo_tesoreria', 'TotalValidado', 'TotalPorPagar', 'TotalCompletado', 'TotalTodo'));
    }
    public function viewtesoreriavali(Request $request){
        // $validado_tesoreria = Clientes::select('id','name')->whereIn('id_estado', ['14'])->orderBy('id', 'desc')->get();
        $validado_tesoreria = Clientes::select('id','name','cel','fnac','dni','email')->orderBy('id', 'desc')->get();
        return datatables()->collection($validado_tesoreria )->toJson();

    }
    public function addbackoffices(){
        return view('admin.backoffices.daterobackoffices_add');
    }

    public function storetesoreria(Request $request){
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
        return redirect('admin/tesoreria/view')->with('crear', 'Datero se creo satisfactoriamente.');
    }

    public function edittesoreria($id){
        $dateros_backoffices = Clientes::where('id', $id)->first();
        $planes_backoffices = Planes::where('status', '1')->get();
        $estados_backoffices = Estados::whereIn('id', ['18', '19'])->where('status', '1')->orderBy('id', 'desc')->get();
        $depart_backoffices = Departamentos::all();
        $provin_backoffices = Provincias::all();
        //$estados_backoffices = Estados::where('status', '1')->orderBy('id', 'desc')->get();
        return view('admin.tesoreria.tesoreria_edit', compact('dateros_backoffices', 'planes_backoffices', 'estados_backoffices','depart_backoffices','provin_backoffices'));
    }
    public function updatetesoreria(Request $request, $id){
        $obj = Clientes::where('id', $id)->first();
        $obj->dname = strtoupper($request->dname);
        $obj->dcel = strtoupper($request->dcel);

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
        return redirect('admin/tesoreria/view')->with('actualizo', 'actualizo correctamente.');
    }

    public function deletebackoffices($id){
        $single_data = Clientes::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }

    public function liquidartesoreria(){
        $asesores = Admin::whereIn('rol', ['AsesorCall','AsesorCampo'])->where('status', '1')->get();
        $por_pagar_tesoreria = Clientes::whereIn('id_estado', ['19'])->orderBy('id', 'desc')->get();

        return view('admin.tesoreria.tesoreria_liquidar',compact('asesores','por_pagar_tesoreria'));

    }

    
    
    /*Inicio Tesoreria Ventas Reportes de dia */
    Public function treporte_dia(){
        $treporte_dia = Clientes::whereIn('id_estado', ['18','19'])->WhereDate('updated_at',Carbon::today())->orderBy('updated_at', 'desc')->get();
        // dd($treporte_dia);
        return view('admin.tesoreria.tesoreria_reporte_dia',compact('treporte_dia'));

    }
    /*Fin Tesoreria Ventas */

    /*Inicio Tesoreria Ventas Reportes por fecha */
    public function treporte_fecha () {
        $treporte_dia = Clientes::whereIn('id_estado', ['18','19'])->WhereDate('updated_at',Carbon::today())->get();

        return view('admin.tesoreria.tesoreria_reporte_fecha',compact('treporte_dia'));


    }
    /*Fin Tesoreria Ventas */

    public function treportes_resultados(Request $request){
        $iniciof = $request->iniciof.' 00:00:00';
        $finf    = $request->finf.' 23:59:59';
        $treporte_dia = Clientes::whereIn('id_estado', ['18','19'])->WhereBetween('updated_at',[$iniciof,$finf])->orderBy('updated_at', 'desc')->get();
        // dd($reporte_dia);
        // return redirect()->route('admin_reporte_fecha',compact('reporte_dia'));
        return view('admin.tesoreria.tesoreria_reporte_fecha',compact('treporte_dia'));


    }




    public function reportestesoreria()
    {
        $reporte = Clientes::all();
       
        return view('admin.tesoreria.tesoreria_reportes',compact('reporte'));
    }

    public function search(Request $request)
    {
        $iniciof = $request->input('iniciof');
        $finf    = $request->input('finf');

        $reporte = Clientes::
        select()
        ->where('created_at','>=',$iniciof)
        ->where('created_at','<=',$finf)
        ->get();
        // dd($reporte);

        return view('admin.tesoreria.tesoreria_reportes',compact('reporte'));
    }
    ///*Fin Tesoreria*///



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
