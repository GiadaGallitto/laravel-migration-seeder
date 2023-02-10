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
        Schema::create('trains', function (Blueprint $table){
            $table->id();
            $table->string('Azienda', 255);
            $table->string('Stazione di partenza', 255);
            $table->string('Stazione di arrivo', 255);
            $table->dateTime('Orario di partenza');
            $table->dateTime('Orario di arrivo');
            $table->string('Codice treno', 255);
            $table->tinyInteger('Numero carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
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
        Schema::drop('trains');
    }
};
