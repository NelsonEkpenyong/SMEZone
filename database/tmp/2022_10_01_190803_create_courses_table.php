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
        Schema::disableForeignKeyConstraints();
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('course_video');
            $table->string('speakers');
            $table->string('speaker_credential');
            $table->string('cost');
            $table->text('description');
            $table->text('content')->nullable();
            $table->unsignedBigInteger('course_category_id');
            $table->timestamps();

            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
