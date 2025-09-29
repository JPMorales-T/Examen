<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tecnico extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'tecnicos';

    public $fillable = [
        'nombre',
        'telefono',
        'email',
        'estado'
    ];

    protected $casts = [
        'nombre' => 'string',
        'telefono' => 'string',
        'email' => 'string',
        'estado' => 'boolean'
    ];

    public static $rules = [
        'nombre' => 'required|string|max:45',
        'telefono' => 'required|string|max:20',
        'email' => 'required|string|max:45',
        'estado' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'tecnico_id');
    }
}
