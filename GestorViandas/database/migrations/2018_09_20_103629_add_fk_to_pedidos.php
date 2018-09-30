<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');

            $table->unsignedInteger('vianda_id');
            $table->foreign('vianda_id')->references('id')->on('viandas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropColumn('persona_id');
            $table->dropColumn('vianda_id');
        });
    }
}
