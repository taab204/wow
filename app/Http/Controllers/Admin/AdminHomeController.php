<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Clientes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index()
    {
        
        $total_pendiente = Clientes::where('id_estado', '1')->count();

        $total_venta = Clientes::where('id_estado', '16')->count();

        $total_no_desea = Clientes::where('id_estado', '5')->count();
        $total_volver_llamar = Clientes::where('id_estado', '10')->count();

        $clientes_pendientes = Clientes::select(DB::raw('COUNT(*) as count'), DB::raw('MONTHNAME(created_at) as month_name'))
            ->whereIn('id_estado', ['1'])
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->pluck('count', 'month_name');
        $labels = $clientes_pendientes->keys();
        $data = $clientes_pendientes->values();



        $asesores = Clientes::select(DB::raw('COUNT(*) as count'), DB::raw('MONTHNAME(created_at) as month_name'))
            ->whereIn('id_estado', ['4'])
            ->whereYear('created_at', date('Y'))
            ->groupBy('month_name')
            ->pluck('count', 'month_name');

        $asesores_labels = $asesores->keys();
        $asesores_data = $asesores->values();

        // Usuarios total de Completados
        $groups = DB::table('clientes')
            ->join('admins','clientes.id_admin','=','admins.id')
            ->select('admins.name as nombre', DB::raw('count(clientes.id_admin) as total'))
            ->whereIn('id_estado', ['14'])
            ->groupBy('nombre')
            ->pluck('total', 'nombre')->all();
        //Generamos colores
        for ($i = 0; $i <= count($groups); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }
        // Enviamos datos a dashbo
        $chart = new Clientes;
        $chart->labels = (array_keys($groups));
        $chart->dataset = (array_values($groups));
        $chart->colours = $colours;

        // $areas = Areas::orderBy('id','desc')->get();
        $fecha = date('Y-m-d'); 
        
        $relacion_Ventas_Asesores = DB::table('clientes')
        ->join('admins','clientes.id_admin','=','admins.id')
        ->select('admins.name as asesor', DB::raw('count(clientes.id_admin) as total'))
        ->whereIn('id_estado', ['8'])
       ->whereBetween('clientes.created_at', [$fecha,DATE(now())])

        ->groupBy('asesor')
        
        ->orderBy('total','desc')
        
        ->get();


        return view('admin.home', compact('relacion_Ventas_Asesores','total_venta', 'total_pendiente', 'total_no_desea', 'total_volver_llamar', 'labels', 'data', 'asesores_labels', 'asesores_data', 'chart'));
    }
}
