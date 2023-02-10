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
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('`Stazione di partenza`','stazione_di_partenza');
            $table->renameColumn('`Stazione di arrivo`','stazione_di_arrivo');
            $table->renameColumn('`Orario di partenza`','orario_di_partenza');
            $table->renameColumn('`Orario di arrivo`','orario_di_arrivo');
            $table->renameColumn('`Codice treno`','codice_treno');
            $table->renameColumn('`Numero carrozze`','numero_carrozze');
            $table->renameColumn('`In orario`','in_orario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('stazione_di_partenza', '`Stazione di partenza`');
            $table->renameColumn('stazione_di_arrivo', '`Stazione di arrivo`');
            $table->renameColumn('orario_di_partenza', '`Orario di partenza`');
            $table->renameColumn('orario_di_arrivo', '`Orario di arrivo`');
            $table->renameColumn('codice_treno', '`Codice treno`');
            $table->renameColumn('numero_carrozze', '`Numero carrozze`');
            $table->renameColumn('in_orario', '`In orario`');
        });
    }
};
