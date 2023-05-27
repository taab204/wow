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
use Carbon\Carbon;

class AdminSupervisorVentasController  extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

/*Inicio Supervisor Ventas */
    public function supervisorventas()
    {
        $clientes = Clientes::whereIn('id_estado', ['1','2','3','4','5','6','7','8','10','11','12','13','14','15','16','17','20'])->orderBy('updated_at', 'desc')->get();
        $planes = Planes::where('status', '1')->get();
        $estados = Estados::where('status', '1')->get();
        $admins = Admin::where('status', '1')->get();
        $depart_cliente = Departamentos::all();
        $provin_cliente = Provincias::all();
        return view('admin.supervisorventas.cliente_view', compact('clientes', 'planes', 'estados', 'admins','depart_cliente','provin_cliente'));
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
    /*Fin Supervisor Ventas */


    /*Inicio Supervisor Ventas Reportes de dia */
    Public function reporte_dia(){
        $reporte_dia = Clientes::whereIn('id_estado', ['1','2','3','4','5','6','7','8','10','11','12','13','14','15','16','17','20'])->WhereDate('updated_at',Carbon::today())->orderBy('updated_at', 'desc')->get();
        // dd($reporte_dia);
        return view('admin.supervisorventas.supervisor_reporte_dia',compact('reporte_dia'));

    }
    /*Fin Supervisor Ventas */

    /*Inicio Supervisor Ventas Reportes por fecha */
    public function reporte_fecha () {
        $reporte_dia = Clientes::WhereDate('created_at',Carbon::today())->orderBy('updated_at', 'desc')->get();

        return view('admin.supervisorventas.supervisor_reporte_fecha',compact('reporte_dia'));


    }
    /*Fin Supervisor Ventas */

    public function reportes_resultados(Request $request){
        $iniciof = $request->iniciof.' 00:00:00';
        $finf    = $request->finf.' 23:59:59';
        $reporte_dia = Clientes::whereIn('id_estado', ['1','2','3','4','5','6','7','8','10','11','12','13','14','15','16','17','20'])->WhereBetween('updated_at',[$iniciof,$finf])->orderBy('updated_at', 'desc')->get();
        // dd($reporte_dia);
        // return redirect()->route('admin_reporte_fecha',compact('reporte_dia'));
        return view('admin.supervisorventas.supervisor_reporte_fecha',compact('reporte_dia'));


    }

    /*Inicio Supervisor Ventas */
    /*Fin Supervisor Ventas */



    ///*Inicio Bitacora*///
    public function bitacora(){
        $badmin = BitacoraAdmin::all();
        return view('admin.backoffices.bitacora_backoffices', compact('badmin'));
    }
    ///*Bitacora Bitacora*///
}
