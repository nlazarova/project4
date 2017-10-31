<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCitytoToCitiesRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities_routes', function (Blueprint $table) {
            $table->renameColumn('city_id', 'city_id_from')->change();
            $table->integer('city_id_to')->unsigned();
            $table->foreign('city_id_to')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cities_routes', function (Blueprint $table) {
            $table->dropColumn('city_id_to');
            $table->renameColumn('city_id_from', 'city_id')->change();
        });
    }
}
