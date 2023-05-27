<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Capacitaciones;
use Illuminate\Http\Request;

class AdminCapacitacionController extends Controller
{
    public function campacitacionempleado(){
        $lista_capacitaciones = Capacitaciones::orderBy('id','desc')->where('status', '1')->get();
        return view('admin.capacitaciones.capacitaciones_empleados',compact('lista_capacitaciones'));
    }

    public function viewcapacitacion(){
        $listado_capacitaciones = Capacitaciones::orderBy('id','desc')->get();
        return view('admin.capacitaciones.capacitaciones_view',compact('listado_capacitaciones'));
    }

    public function addcapacitacion(){
        return view('admin.capacitaciones.capacitaciones_add');

    }
    public function storecapacitacion(Request $request){
        $request->validate(['url' => 'max:5000|mimes:pdf']);
        $ext = $request->file('url')->extension();
        $achivo_capacitacion = 'Manual'.time() . '.' . $ext;
        $request->file('url')->move(public_path('uploads/capacitaciones/'), $achivo_capacitacion);

        $obj = new Capacitaciones();
        $obj->url = $achivo_capacitacion;
        $obj->title = strtoupper($request->title);
        $obj->detail = strtoupper($request->detail);
        $obj->status = 1;
        $obj->save();
        return redirect('admin/capacitacion/viewcapacitacion')->with('crear', 'Se creo satisfactoriamente.');
    }
    public function editcapacitacion($id)
    {
        $editar_capacitacion = Capacitaciones::where('id',$id)->first();
        return view('admin.capacitaciones.capacitaciones_edit',compact('editar_capacitacion'));
    }
    public function updatecapacitacion(Request $request, $id)
    {
        $obj = Capacitaciones::where('id', $id)->first();
        if ($request->hasFile('url')) {
            $request->validate(['url' => 'max:5000|mimes:pdf']);
            unlink(public_path('uploads/capacitaciones/' . $obj->url));
            $ext = $request->file('url')->extension();
            $edit_capacitacion = time() . '.' . $ext;
            $request->file('url')->move(public_path('uploads/capacitaciones/'), $edit_capacitacion);
            $obj->url = $edit_capacitacion;
        }

        $obj->title = strtoupper($request->title);
        $obj->detail = strtoupper($request->detail);
        $obj->update();
        return redirect('admin/capacitacion/viewcapacitacion')->with('actualizo', 'Se actualizo correctamente.');
    }
    public function capacitacionestado($id)
    {
        $customer_data = Capacitaciones::where('id', $id)->first();
        if ($customer_data->status == 1) {
            $customer_data->status = 0;
        } else {
            $customer_data->status = 1;
        }
        $customer_data->update();
        return redirect()->back()->with('estado', 'Se actualizo correctamente.');
    }
}
