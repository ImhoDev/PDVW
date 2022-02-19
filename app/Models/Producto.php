<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['cateogoria_id','nombre', 'codigo', 'medida_id', 'imagen', 'stock', 'stock_min', 'precio_compra', 'precio_venta', 'utilidad']
}
