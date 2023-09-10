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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('branch', 50);
            $table->string('email', 70);
            $table->string('college', 100)->nullable();
            $table->string('edu_status', 20)->nullable();
            $table->string('job_profile', 70)->nullable();
            $table->string('company', 70)->nullable();
            $table->string('achivement', 70)->nullable();
            $table->string('message', 70)->nullable();
            $table->string('approval', 5)->nullable();            
            $table->string('password', 100);
            $table->string('image', 100)->nullable();
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
        Schema::dropIfExists('student');
    }
};
