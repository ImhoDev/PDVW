<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_detalles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->integer('categoria_id')->index('categoria_id');
            $table->integer('producto_id')->index('producto_id');
            $table->integer('medida_id')->index('medida_id');
            $table->dateTime('fecha', $precision = 0);
            $table->float('precio', 10, 0)->nullable()->default('0');
            $table->float('impuesto', 10, 0)->nullable()->default('0');
            $table->float('cantidad', 10, 0)->default('0');
            $table->float('descuento', 10, 0)->nullable()->default('0');
            $table->float('total', 10, 0)->nullable();
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
        Schema::dropIfExists('venta_detalles');
    }
}
