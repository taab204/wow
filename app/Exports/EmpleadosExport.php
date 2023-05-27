<?php

namespace App\Exports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EmpleadosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Admin::all();
        return Admin::select('dni','name','address','email','fnaci','nbanco','ncuenta','fin','fend','ecivil','nhijos','sexo','tel1','tel2','status','rol','created_at','updated_at')->get();

    }
    public function headings (): array{

         return["DNI","Nombre","Dirección","email","Fecha Nacimiento","Nombre Banco","Numero de Cuenta","Fecha Inicio Laboral","Fecha Termino Laboral","Estado Civil","Numero de Hijos","Sexo","Celular1","Celular2","Estado","Rol","Fecha/Hora Creación","Fecha/Hora Actualización"];

    }
}
