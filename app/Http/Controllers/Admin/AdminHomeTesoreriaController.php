<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Clientes;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AdminHomeTesoreriaController extends Controller
{
    public function index()
    {


        $total_porpagar = Clientes::where('id_estado', '19')->count();

        $total_pagado = Clientes::where('id_estado', '18')->count();

        $total_validado = Clientes::where('id_estado', '14')->count();



        return view('admin.tesoreria.home_tesoreria', compact('total_porpagar', 'total_pagado', 'total_validado'));
    }
    
}
