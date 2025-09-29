<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'telefono'
    ];

    protected $casts = [
        'nombre' => 'string',
        'telefono' => 'string'
    ];

    public static $rules = [
        'nombre' => 'required|string|max:45',
        'telefono' => 'required|string|max:20',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function equipos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Equipo::class, 'cliente_id');
    }

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'cliente_id');
    }
}
