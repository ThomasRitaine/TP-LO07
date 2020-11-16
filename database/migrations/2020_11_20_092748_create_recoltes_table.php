<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecoltesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolte', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producteur_id')->constrained('producteur');
            $table->foreignId('vin_id')->constrained('vin');
            $table->integer('quantite')->unsigned();
            $table->timestamps();
            //$table->primary(['producteur_id', 'vin_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recolte');
    }
}
