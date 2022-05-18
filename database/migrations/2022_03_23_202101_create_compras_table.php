<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('codigo', 120);
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            //$table->integer('user_id')->index('usuario_id');
            $table->foreignId('proveedore_id')->nullable()->constrained()->cascadeOnDelete();
            //$table->integer('proveedor_id')->index('proveedor_id');
            $table->dateTime('fecha', $precision = 0);
            $table->float('impuesto', 10, 0)->nullable()->default('0');
            $table->float('impuesto_neto', 10, 0)->nullable()->default('0');
            $table->float('descuento', 10, 0)->nullable()->default('0');
            $table->float('total', 10, 0)->nullable()->default('0');
            $table->boolean('estado')->deafult(false);
            $table->float('monto_pagado', 10, 0)->nullable()->default('0');
            $table->text('metodo_pago')->nullable();
            $table->text('notas')->nullable();
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
        Schema::dropIfExists('compras');
    }
}
