<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Areas;

class AdminAreaController extends Controller
{
    public function index ()
    {
        // if(auth()->user()->rol != "Administrador" && auth()->user()->rol !="Asistente"){
        //     return redirect('inicio');
        // }
        $areas = Areas::orderBy('id','desc')->get();
        return view('admin.area.area_view',compact('areas'));
    }

    public function add()
    {
        return view('admin.area.area_add');
    }

    public function store(Request $request)
    {
        $obj = new Areas();
        $obj->area = strtoupper($request->area);
        $obj->detail = strtoupper($request->detail);
        $obj->status = $request->status;
        $obj->save();
        return redirect('admin/area/view')->with('crear', 'Se creo correctamente.');
    }

    public function edit($id)
    {
        $areas_data = Areas::where('id',$id)->first();
        return view('admin.area.area_edit', compact('areas_data'));
    }

    public function update(Request $request,$id)
    {
        $obj = Areas::where('id',$id)->first();
        $obj->area = strtoupper($request->area);
        $obj->detail = strtoupper($request->detail);
        $obj->status = $request->status;
        $obj->update();
        return redirect('admin/area/view')->with('actualizo', 'Registro se actualizó correctamente.');
    }

    public function delete($id)
    {
        $single_data = Areas::where('id',$id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }
}

