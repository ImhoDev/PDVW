<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->string('nombre', 120);
            $table->string('codigo_sunat', 10);
            //$table->integer('medida_base')->nullable()->index('medida_id');
            //$table->integer('medida_id')->unsigned()->nullable()->index();
            $table->boolean('active');
            $table->string('operador', 10)->nullable();
            $table->double('operador_valor')->nullable();
            $table->timestamps(6);
            $table->softDeletes();

            //$table->foreign('medida_id')->references('id')->on('medidas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medidas');
    }
}
