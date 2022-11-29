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
        Schema::create('course_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->integer('user_count');
            $table->decimal('average_score', 12, 2);
            //$table->double('average_score', 8, 2);
            $table->unsignedBigInteger('ratings_id');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('course')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('ratings_id')->references('id')->on('ratings')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_feedback');
    }
};
