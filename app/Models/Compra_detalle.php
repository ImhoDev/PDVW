<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra_detalle extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
