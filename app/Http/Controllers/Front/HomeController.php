<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Planes;

class HomeController extends Controller
{
    public function index()
    {
        $slide_all = Slide::get();
        $planes = Planes::where('status','1')->get();
        return view('front.home', compact('slide_all','planes'));
    }

    // public function send_email(Request $request)
    public function enviar_datero(Request $request)
    {
            $obj = new Clientes();
            $obj->dni = $request->dni;
            $obj->name = strtoupper($request->name);
            $obj->cel = $request->cel;
            $obj->email = $request->email;
            $obj->id_plan = $request->id_plan;
            $obj->dname = strtoupper($request->dname);
            $obj->dcel = $request->dcel;
            $obj->depart = 26;
            $obj->provin = 197;
            $obj->distri = 1;
            $obj->id_estado = 1;
            $obj->id_provi = 2;
            $obj->id_admin = 1;
            $obj->save();

            return redirect()->back()->with('crear', 'Slide se creo satisfactoriamente.');
    }

}
