<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Planes;
use Illuminate\Http\Request;
use Lcobucci\JWT\Token\Plain;

class AdminPlanesController extends Controller
{
    public function index()
    {
        if(auth()->user()->rol != "Administrador" && auth()->user()->rol !="Asistente"){
            return redirect()->route('admin_no_autorizado');
            // return redirect('inicio');
        }
        $TPlanes = Planes::where('status', '1')->orderBy('id', 'desc')->count();
        $TPlanesD = Planes::where('status', '0')->orderBy('id', 'desc')->count();
        $planes = Planes::where('status', '1')->orderBy('id', 'desc')->get();
        $planesd = Planes::where('status', '0')->orderBy('id', 'desc')->get();
        return view('admin.planes.planes_view', compact('planes', 'planesd','TPlanes','TPlanesD'));
    }
    public function no_autorizado()
    {
        
        return view('admin.no_autorizado');
    }

    

    public function add()
    {
        return view('admin.planes.planes_add');
    }

    public function store(Request $request)
    {
        $obj = new Planes();
        $obj->plan = strtoupper($request->plan);
        $obj->detail = strtoupper($request->detail);
        $obj->price_vent = $request->price_vent;
        $obj->price_pag = $request->price_pag;
        $obj->fini = $request->fini;
        $obj->ffin = $request->ffin;
        $obj->status = 1;
        $obj->save();

        return redirect('admin/planes/view')->with('crear', 'Datero se creo satisfactoriamente.');
        // return redirect()->back()->with('success', 'Datero se creo satisfactoriamente.');
    }

    public function edit($id)
    {
        $planes = Planes::where('id', $id)->first();
        return view('admin.planes.planes_edit', compact('planes'));
    }

    public function update(Request $request, $id)
    {
        $obj = Planes::where('id', $id)->first();
        $obj->plan = strtoupper($request->plan);
        $obj->detail = strtoupper($request->detail);
        $obj->price_vent = $request->price_vent;
        $obj->price_pag = $request->price_pag;
        $obj->fini = $request->fini;
        $obj->ffin = $request->ffin;
        $obj->update();

        return redirect('admin/planes/view')->with('actualizo', 'Datero se actualizó correctamente.');

        // return redirect()->back()->with('success', 'Datero se actualizó correctamente.');
    }
    public function delete($id)
    {
        $single_data = Planes::where('id', $id)->first();
        $single_data->delete();

        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }

    public function planes_estado($id)
    {
        $estados_data = Planes::where('id',$id)->first();
        if($estados_data->status == 1) {
            $estados_data->status = 0;
        } else {
            $estados_data->status = 1;
        }
        $estados_data->update();
        return redirect()->back()->with('estado', 'Se Actualizo.');
    }
}
