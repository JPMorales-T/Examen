<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('numero_serie', 45);
            $table->integer('cliente_id')->index('fk_equipos_clientes1_idx');
            $table->integer('modelo_id')->index('fk_equipos_modelos1_idx');
            $table->integer('marca_id')->index('fk_equipos_marcas1_idx');
            $table->timestamps();
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
        Schema::dropIfExists('equipos');
    }
};
