<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categoria;
use App\Models\Medida;

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
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            $table->foreignIdFor(Categoria::class)->constrained()->cascadeOnUpdate();
            //$table->foreignId('categoria_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('nombre', 120);
            $table->string('codigo', 120)->unique();
            $table->foreignIdFor(Medida::class)->constrained()->cascadeOnUpdate();
            //$table->foreignId('medida_id')->nullable()->constrained()->cascadeOnDelete();
            //$table->integer('medida_id')->nullable()->index('medida_id');
            //(Categoria::class)->constrained()->cascadeOnUpdate();
            $table->text('imagen')->nullable();
            $table->float('stock', 10, 0)->nullable()->default('0');
            $table->float('stock_min', 10, 0)->nullable()->default('0');
            $table->float('precio_compra', 10, 0);
            //$table->decimal('price', 15, 2)
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
