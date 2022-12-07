<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('id_khn');
            $table->string('icz');
            $table->string('name');
            $table->string('street');
            $table->string('town');
            $table->string('psc');
            $table->string('phoenix_code')->nullable();
            $table->string('pharmos_code')->nullable();
            $table->string('alliance_code')->nullable();
            $table->string('via_code')->nullable();
            $table->string('person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('pharmacies');
    }
}
