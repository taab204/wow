<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agendas;
use Illuminate\Http\Request;

class AgendasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        dd($id);
        // if()
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function show(Agendas $agendas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendas $agendas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendas $agendas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendas  $agendas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendas $agendas)
    {
        //
    }
}
