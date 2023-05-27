<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Datero;

class JsonController extends Controller
{
    public function enviardateros()
    {
        $dateros = Datero::All(['id','name']);

        return response()->json($dateros,200);
    }

    public function recibirdateros(Request $request)
    {
        if(!empty($request)):
            /*Procesar y guardar en la base de datos de datero y detalles */
            $data = ['success' => true];
            return response()->json($data,200);
        else:
            $data = ['success' => false];
            return response()->json($data,200);

        endif;
    }
}
