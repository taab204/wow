<?php

namespace App\Imports;

use App\Models\Clientes;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class ClientesImport implements ToModel
class ClientesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new Clientes([
    //         'name'     => $row[0],
    //         'email'    => $row[1],
    //     ]);
    // }

    public function model(array $row)
    {
        return new Clientes([
            'name'      => $row['name'],
            'dni'       => $row['dni'],
            'direc'     => $row['direc'],
            'tserv'     => $row['tserv'],
            'dserv'     => $row['dserv'],
            'depart'    => $row['depart'],
            'provin'    => $row['provin'],
            'distri'    => $row['distri'],
            'cel'       => $row['cel'],
            'cel2'      => $row['cel2'],
            'id_provi'  => $row['operador'],
            'id_plan'   => 1,
            'id_estado' => 8,
            'id_admin'  => $row['id_admin'],
        ]);
    }






}
