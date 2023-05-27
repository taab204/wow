<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estados;

class AdminEstadoController extends Controller
{
    public function index ()
    {
        // if(auth()->user()->rol != "Administrador" && auth()->user()->rol !="Asistente"){
        //     return redirect('inicio');
        // }

        $TEstados = Estados::where('status', '1')->orderBy('id', 'desc')->count();
        $TEstadosD = Estados::where('status', '0')->orderBy('id', 'desc')->count();

        $estados = Estados::where('status', '1')->orderBy('id', 'desc')->get();
        $estadosd = Estados::where('status', '0')->orderBy('id', 'desc')->get();
        return view('admin.estado.estado_view',compact('estados','estadosd','TEstados','TEstadosD'));
    }

    public function add()
    {
        return view('admin.estado.estado_add');
    }

    public function store(Request $request)
    {
        $obj = new Estados();
        $obj->name = strtoupper($request->name);
        $obj->detail = strtoupper($request->detail);
        $obj->status = 1;
        $obj->save();
        return redirect('admin/estado/view')->with('crear', 'Se creo satisfactoriamente.');
    }

    public function edit($id)
    {
        $estado_data = Estados::where('id',$id)->first();
        return view('admin.estado.estado_edit', compact('estado_data'));
    }

    public function update(Request $request,$id)
    {
        $obj = Estados::where('id',$id)->first();
        $obj->name = strtoupper($request->name);
        $obj->detail = strtoupper($request->detail);
        $obj->update();
        return redirect('admin/estado/view')->with('actualizo', 'Se actualizó correctamente.');
    }
    public function delete($id)
    {
        $single_data = Estados::where('id',$id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }

    public function cambio_estado($id)
    {
        $estados_data = Estados::where('id',$id)->first();
        if($estados_data->status == 1) {
            $estados_data->status = 0;
        } else {
            $estados_data->status = 1;
        }
        $estados_data->update();
        return redirect()->back()->with('estado', 'Se Actualizo.');
    }
}
