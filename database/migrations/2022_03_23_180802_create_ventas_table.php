<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->integer('categoria_id')->index('categoria_id');
            $table->string('nombre', 120);
            $table->string('codigo', 120);
            $table->integer('user_id')->nullable()->index('user_id');
            $table->integer('cliente_id')->nullable()->index('cliente_id');
            $table->dateTime('fecha', $precision = 0);
            $table->text('referencia')->nullable();
            $table->float('descuento', 10, 0)->nullable()->default('0');
            $table->float('impuesto', 10, 0)->nullable()->default('0');
            $table->float('monto_pagado', 10, 0)->default('0');
            $table->float('total', 10, 0)->default('0');
            $table->tinyint('estado', 1)->default(0);
            $table->string('metodo_pago', 120);
            $table->string('notas', 120);
            $table->timestamps(6);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
