<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $producto_id
 * @property $stock
 * @property $ubicacion
 * @property $fecha_actualizacion
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    protected $perPage = 20;

    /**
     * Evita que Laravel gestione created_at y updated_at automáticamente
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['producto_id', 'stock', 'ubicacion', 'fecha_actualizacion'];

    /**
     * Relación con Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id', 'id');
    }
}
