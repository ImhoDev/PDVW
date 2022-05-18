<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = ['cateogoria_id','nombre', 'codigo', 'medida_id', 'imagen', 'stock', 'stock_min', 'precio_compra', 'precio_venta', 'utilidad']

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
