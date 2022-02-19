<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('categoria_id')->index('categoria_id');
            $table->string('nombre', 120);
            $table->string('codigo', 120);
            $table->integer('medida_id')->nullable()->index('medida_id');
            $table->text('imagen')->nullable();
            $table->float('stock', 10, 0)->nullable()->default('0');
            $table->float('stock_min', 10, 0)->nullable()->default('0');
            $table->float('precio_compra', 10, 0);
            $table->float('precio_venta', 10, 0);
            $table->float('utilidad', 10, 0);
            $table->float('cant_ventas', 10, 0)->nullable()->default('0');
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
        Schema::dropIfExists('productos');
    }
}
