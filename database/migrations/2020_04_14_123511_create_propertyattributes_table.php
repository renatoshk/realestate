<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyattributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertyattributes', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->integer('attribute_group_id');
            $table->integer('attribute_id');
            $table->string('attribute_value');
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
        Schema::dropIfExists('propertyattributes');
    }
}
