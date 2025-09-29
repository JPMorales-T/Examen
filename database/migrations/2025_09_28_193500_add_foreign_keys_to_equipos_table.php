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
        Schema::table('equipos', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'fk_equipos_clientes1')->references(['id'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['marca_id'], 'fk_equipos_marcas1')->references(['id'])->on('marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['modelo_id'], 'fk_equipos_modelos1')->references(['id'])->on('modelos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropForeign('fk_equipos_clientes1');
            $table->dropForeign('fk_equipos_marcas1');
            $table->dropForeign('fk_equipos_modelos1');
        });
    }
};
