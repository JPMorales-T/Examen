<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'servicios';

    public $fillable = [
        'fecha',
        'diagnostico',
        'solucion',
        'estado_id',
        'tecnico_id',
        'cliente_id',
        'equipo_id'
    ];

    protected $casts = [
        'fecha' => 'date',
        'diagnostico' => 'string',
        'solucion' => 'string'
    ];

    public static $rules = [
        'fecha' => 'required',
        'diagnostico' => 'required|string|max:16777215',
        'solucion' => 'required|string|max:16777215',
        'estado_id' => 'required',
        'tecnico_id' => 'required',
        'cliente_id' => 'required',
        'equipo_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function cliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }

    public function equipo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Equipo::class, 'equipo_id');
    }

    public function estado(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id');
    }

    public function tecnico(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Tecnico::class, 'tecnico_id');
    }
}
