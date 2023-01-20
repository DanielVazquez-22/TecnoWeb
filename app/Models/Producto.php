<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $Nombre
 * @property $descripcion
 * @property $imagen
 * @property $precio
 * @property $fecha_creacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'descripcion' => 'required',
		'imagen' => 'required',
		'precio' => 'required',
		'fecha_creacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','descripcion','imagen','precio','fecha_creacion'];



}
