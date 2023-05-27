<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Clientes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminHomeBackofficeController extends Controller
{
    public function index()
    {


        $total_porpagar = Clientes::where('id_estado', '19')->count();

        $total_pagado = Clientes::where('id_estado', '18')->count();

        $total_validado = Clientes::where('id_estado', '14')->count();



        return view('admin.backoffices.home_backofice', compact('total_porpagar', 'total_pagado', 'total_validado'));
    }
    
}
