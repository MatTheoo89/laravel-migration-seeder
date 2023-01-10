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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            /*Azienda
            Stazione di partenza
            Stazione di arrivo
            Orario di partenza
            Orario di arrivo
            Codice Treno
            Numero Carrozze
            In orario
            Cancellato*/
            $table->string('company', 50);
            $table->string('Departure_station', 50);
            $table->string('Arrival_station', 50);
            $table->time('Departure_time');
            $table->time('Arrival_time');
            $table->string('Code_train', 18);
            $table->unsignedTinyInteger('Number_carriages');
            $table->boolean('is_inTime');
            $table->boolean('is_Delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
};
