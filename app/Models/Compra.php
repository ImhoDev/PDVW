<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at', 'updated_at'];

    public function Compra_detalles(){
        return $this->hasMany(Compra_detalle::class);
    }
}
