<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'precio',
    ];

    // Relación con citas (muchos a muchos)
    public function citas()
    {
        return $this->belongsToMany(Cita::class, 'cita_servicio', 'servicio_id', 'cita_id');
    }
}
