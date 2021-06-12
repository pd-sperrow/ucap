<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->comment('');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('university_id')->comment('');
            $table->foreign('university_id')->references('id')->on('users');

            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('phone');

            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();

            // $table->binary('avatar')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representatives');
        Schema::table("representatives", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
