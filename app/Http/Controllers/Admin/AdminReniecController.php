<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reniecs;
use Illuminate\Http\Request;

class AdminReniecController extends Controller
{
    public function index()
    {
        return view('admin.reniec.reniec_view');
    }

    public function store(Request $request)
    {
        $dniingresado = $request->get('dni');
        $reniecs = Reniecs::where('dni','like',"%$dniingresado%")->latest('dni')->paginate(1);
        //dd($dniingresado);
        return view('admin.reniec.reniec_result', compact('reniecs'));
        //return view('admin.reniec.reniec_result');
    }
}
