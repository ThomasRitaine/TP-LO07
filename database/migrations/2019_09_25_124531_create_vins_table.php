<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vin', function (Blueprint $table) {    // Par défaut, les field sont en NOT NULL
            $table->id();
            $table->string('cru', 45);  // premier arg : nom, deuxième : nombre max de caractères
            $table->integer('annee')->unsigned();
            $table->float('degre');
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
        Schema::dropIfExists('vin');
    }
}
