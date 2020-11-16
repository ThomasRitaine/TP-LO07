<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producteur', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 45);  // premier arg : nom, deuxième : nombre max de caractères
            $table->string('prenom', 45);
            $table->string('region', 45);
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
        Schema::dropIfExists('producteur');
    }
}
