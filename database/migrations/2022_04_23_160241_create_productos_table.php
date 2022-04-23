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
            $table->id();
            $table->string('sku');
            $table->string('nombre');
            $table->foreignId('id_categoria')->nullable()->constrained('categorias_productos'); //->cascadeOnDelete()->nullOnDelete();
            $table->string('descripcion', 256);
            $table->double('precio');
            $table->integer('cantidad');
            $table->integer('estado');
            $table->integer('eliminado');
            // $table->timestamps();
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
