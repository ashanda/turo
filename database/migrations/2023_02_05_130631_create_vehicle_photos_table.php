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
        Schema::create('vehicle_photos', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->string('thunmbnail_image');
            $table->string('front');
            $table->string('back');
            $table->string('left');
            $table->string('right');
            $table->string('buffer');
            $table->string('dashboard');
            $table->string('interior_images_front');
            $table->string('interior_images_back');
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
        Schema::dropIfExists('vehicle_photos');
    }
};
