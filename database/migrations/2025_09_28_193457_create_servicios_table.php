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
        Schema::create('servicios', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha');
            $table->mediumText('diagnostico');
            $table->mediumText('solucion');
            $table->integer('estado_id')->index('fk_servicios_Estados_servicios_idx');
            $table->integer('tecnico_id')->index('fk_servicios_tecnicos1_idx');
            $table->integer('cliente_id')->index('fk_servicios_clientes1_idx');
            $table->integer('equipo_id')->index('fk_servicios_equipos1_idx');
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
        Schema::dropIfExists('servicios');
    }
};
