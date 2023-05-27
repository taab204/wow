<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BitacoraCliente extends Model
{
    use HasFactory;
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
}
