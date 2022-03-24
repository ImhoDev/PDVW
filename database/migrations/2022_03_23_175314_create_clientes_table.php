<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre', 120);
            $table->string('docuemento', 8);
            $table->string('email')->unique()->nullable();
            $table->string('telefono', 10)->nullable();
            $table->text('direccion')->nullable();
            $table->date('fecha_nac');
            $table->integer('cant_compras')->default(0);
            $table->dateTime('ultima_compra', $precision = 0);
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
        Schema::dropIfExists('clientes');
    }
}
