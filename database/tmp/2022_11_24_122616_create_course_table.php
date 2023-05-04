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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->string('name');
            $table->text('embed_link');
            $table->unsignedBigInteger('certificate_id');
            $table->unsignedBigInteger('course_category_id');
            $table->unsignedBigInteger('payment_type_id');
            $table->text('synopsis');
            $table->text('description');
            $table->string('image');
            $table->string('enrolled')->nullable();
            $table->boolean('is_featured')->default('0');
            $table->time('avg_time_spent_on_course')->nullable();
            $table->time('avg_feedback_score')->nullable();
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('course_type')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('payment_type_id')->references('id')->on('price')->onDelete('restrict')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
};
