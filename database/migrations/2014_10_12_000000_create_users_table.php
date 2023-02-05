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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic')->default('avatar.png');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('contact_no');
            $table->string('location');
            $table->string('passport_no');
            $table->string('passport_photo');
            $table->string('nic');
            $table->string('nic_front');
            $table->string('nic_back');
            $table->string('driving_license_no');
            $table->string('driving_license_front');
            $table->string('driving_license_back');
            $table->string('driving_license_expire_date');
            $table->integer('status')->default(0);
            $table->integer('role')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
