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
        Schema::create('featured_course_images', function (Blueprint $table) {
            $table->id();
            $table->text('featured_course_image1')->nullable();
            $table->text('featured_course_image2')->nullable();
            $table->text('featured_course_image3')->nullable();
            $table->text('featured_course_image4')->nullable();
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
        Schema::dropIfExists('featured_course_images');
    }
};
