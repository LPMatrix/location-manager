<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->text('atm_id');
            $table->text('longitude');
            $table->text('latitude');
            $table->text('title');
            $table->text('atm_type');
            $table->text('kiosk_id');
            $table->text('name');
            $table->text('country');
            $table->text('region');
            $table->text('state');
            $table->text('city');
            $table->text('street');
            $table->text('zip');
            $table->text('location_image');
            $table->text('slider_image_1');
            $table->text('slider_image_2');
            $table->text('slider_image_3');
            $table->text('slider_image_4');
            $table->text('slider_image_5');
            $table->text('slider_image_6');
            $table->text('zoom_level');
            $table->text('monday_opening');
            $table->text('monday_closing');
            $table->text('tuesday_opening');
            $table->text('tuesday_closing');
            $table->text('wednesday_opening');
            $table->text('wednesday_closing');
            $table->text('thursday_opening');
            $table->text('thursday_closing');
            $table->text('friday_opening');
            $table->text('friday_closing');
            $table->text('saturday_opening');
            $table->text('saturday_closing');
            $table->text('sunday_opening');
            $table->text('sunday_closing');
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
        Schema::dropIfExists('locations');
    }
}
