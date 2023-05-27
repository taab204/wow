<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table ='clientes';
    protected $fillable = [
        'dni',
        'name',
        'cel',
        'email',
        'dname',
        'dcel',
        'fdni',
        'fdni1',
        'frecib',
        'grab',
        'ceval',
        'direc',
        'dref',
        'tserv',
        'dserv',
        'depart',
        'provin',
        'distri',
        'cel2',
        'lnac',
        'fnac',
        'np',
        'nm',
        'codinst',
        'finst',
        'obs',
        'id_estado',
        'id_provi',
        'id_plan',
        'id_admin',
        'id_area',
    ];
    public function CON()
    {
        return $this->belongsTo(Planes::class, 'id_plan');
    }
    public function RELEMPLEADO()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function RELADMIN()
    {
        return $this->belongsTo(Areas::class, 'id_admin');
    }
    public function RELPLAN()
    {
        return $this->belongsTo(Planes::class, 'id_plan');
    }
    public function RELESTADO()
    {
        return $this->belongsTo(Estados::class, 'id_estado');
    }

    public function RELDEPARTAMENTO()
    {
        return $this->belongsTo(Departamentos::class, 'depart');
    }
    public function RELPROVINCIA()
    {
        return $this->belongsTo(Provincias::class, 'provin');
    }
}
