<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_usages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id')->unsigned();
            $table->foreign('household_id')->references('id')->on('households');
            $table->integer('year');
            $table->integer('quarter');
            $table->decimal('meter_reading', 8, 2);
            $table->decimal('consumption', 8, 2)->nullable();
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
        Schema::dropIfExists('water_usages');
    }
}
