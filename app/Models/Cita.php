<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fecha',
        'hora',
        'usuario_id',
    ];

    // Relación con usuario (muchas citas pertenecen a un usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Relación con servicios (muchos a muchos)
    public function servicios()
    {
        return $this->belongsToMany(Servicio::class, 'cita_servicio', 'cita_id', 'servicio_id');
    }
}
