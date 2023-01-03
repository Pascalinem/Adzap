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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->Text('description');
            $table->string('adresse_rue')->default('résidence Adzap');
            $table->string('adresse_etage');
            $table->string('adresse_ville')->default('Odza');
            $table->string('adresse_code_postal')->default('borne 12');
            $table->smallInteger('nombre_chambres');
            $table->integer('capacite');
            $table->integer('superficie')->nullable();
            $table->double('tarif')->default(45);
            $table->string('living')->nullable();
            $table->string('cuisine')->nullable();
            $table->string('sdb')->nullable();
            $table->string('autre_photo')->nullable();
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
        Schema::dropIfExists('logements');
    }
};
