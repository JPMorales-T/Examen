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
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'fk_servicios_clientes1')->references(['id'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['equipo_id'], 'fk_servicios_equipos1')->references(['id'])->on('equipos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['estado_id'], 'fk_servicios_Estados_servicios')->references(['id'])->on('estados')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tecnico_id'], 'fk_servicios_tecnicos1')->references(['id'])->on('tecnicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign('fk_servicios_clientes1');
            $table->dropForeign('fk_servicios_equipos1');
            $table->dropForeign('fk_servicios_Estados_servicios');
            $table->dropForeign('fk_servicios_tecnicos1');
        });
    }
};
