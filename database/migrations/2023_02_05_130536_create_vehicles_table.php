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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('make');
            $table->string('model');
            $table->string('description');
            $table->string('year');
            $table->string('category');
            $table->string('vehicle_condition');
            $table->string('type');
            $table->integer('no_seat');
            $table->string('location');
            $table->string('transmission');
            $table->string('experince');
            $table->string('feature');
            $table->float('regular_price', 8, 2);
            $table->float('discount_price', 8, 2);
            $table->float('user_rating', 2, 1);
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('vehicles');
    }
};
