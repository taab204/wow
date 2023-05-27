<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Areas;
use App\Exports\EmpleadosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

class AdminEmpleadoController extends Controller
{
    public function index()
    {
        $TEmpleados = Admin::where('status', '1')->orderBy('id', 'desc')->count();
        $TEmpleadosD = Admin::where('status', '0')->orderBy('id', 'desc')->count();

        $empleados = Admin::where('status', '1')->orderBy('id', 'desc')->get();
        $empleadosD = Admin::where('status', '0')->orderBy('id', 'desc')->get();

        //$empleados = Admin::orderBy('id', 'desc')->get();
        return view('admin.empleado.empleado_view', compact('empleados','empleadosD','TEmpleados','TEmpleadosD'));
    }

    public function add()
    {
        $areas_data = Areas::where('status', 'Activado')->get();
        return view('admin.empleado.empleado_add', compact('areas_data'));
    }

    public function store(Request $request)
    {
        $ext = $request->file('foto')->extension();
        $final_name = time() . '.' . $ext;
        $request->file('foto')->move(public_path('uploads/'), $final_name);
        $obj = new Admin();
        $obj->foto = $final_name;
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->address = strtoupper($request->address);
        $obj->tel1 = $request->tel1;
        $obj->tel2 = $request->tel2;
        $obj->sexo = $request->sexo;
        $obj->id_area = $request->id_area;
        $obj->rol = $request->rol;
        $obj->email = strtolower($request->email);
        $obj->password = Hash::make($request->password);
        $obj->fnaci = $request->fnaci;
        $obj->fin = $request->fin;
        $obj->status = 1;
        $obj->nbanco = strtoupper($request->nbanco);
        $obj->ncuenta = $request->ncuenta;
        $obj->ncontract = $request->ncontract;
        $obj->fend = $request->fend;
        $obj->ecivil = $request->ecivil;
        $obj->nhijos = $request->nhijos;
        $obj->save();
        return redirect('admin/empleado/view')->with('crear', 'Se creo satisfactoriamente.');
    }

    public function edit($id)
    {
        $empleados = Admin::where('id', $id)->first();
        $areas = Areas::get();
        return view('admin.empleado.empleado_edit', compact('empleados', 'areas'));
    }

    public function update(Request $request, $id)
    {
        $obj = Admin::where('id', $id)->first();
        if ($request->hasFile('foto')) {
            $request->validate(['foto' => 'image|mimes:jpg,jpeg,png,gif']);
            unlink(public_path('uploads/' . $obj->foto));
            $ext = $request->file('foto')->extension();
            $final_name = time() . '.' . $ext;
            $request->file('foto')->move(public_path('uploads/'), $final_name);
            $obj->foto = $final_name;
        }
        $obj->dni = $request->dni;
        $obj->name = strtoupper($request->name);
        $obj->address = strtoupper($request->address);
        $obj->tel1 = $request->tel1;
        $obj->tel2 = $request->tel2;
        $obj->sexo = $request->sexo;
        $obj->id_area = $request->id_area;
        $obj->rol = $request->rol;
        $obj->email = strtolower($request->email);
        $obj->fnaci = $request->fnaci;
        $obj->fin = $request->fin;
        $obj->nbanco = strtoupper($request->nbanco);
        $obj->ncuenta = $request->ncuenta;
        $obj->ncontract = $request->ncontract;
        $obj->fend = $request->fend;
        $obj->ecivil = $request->ecivil;
        $obj->nhijos = $request->nhijos;
        $obj->update();
        return redirect('admin/empleado/view')->with('actualizo', 'Se actualizo correctamente.');
    }
    public function delete($id)
    {
        $single_data = Admin::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('success', 'Registro se elimino con exito.');
    }

    public function change_status($id)
    {
        $customer_data = Admin::where('id', $id)->first();
        if ($customer_data->status == 1) {
            $customer_data->status = 0;
        } else {
            $customer_data->status = 1;
        }
        $customer_data->update();
        return redirect()->back()->with('estado', 'Se actualizo correctamente.');
    }

    public function empleados_export() 
    {
        $date = now();
        return Excel::download(new EmpleadosExport,'Marra_Empleados_'.$date.'.xlsx');
    }
}
