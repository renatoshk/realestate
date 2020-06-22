<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('property_name');
            $table->string('property_description');
            $table->string('status');
            $table->string('price');
            $table->string('location');
            $table->string('surface');
            $table->string('bedroom');
            $table->string('internet');
            $table->string('kitchen');
            $table->string('furnished');
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
        Schema::dropIfExists('searches');
    }
}
