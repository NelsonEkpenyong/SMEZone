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
        // Schema::disableForeignKeyConstraints();
        Schema::create('event_registration', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('gender_id')->default(1);
            $table->unsignedBigInteger('role_id')->default(4);
            $table->unsignedBigInteger('event_id');
            $table->text('venue_name');
            $table->boolean('is_active')->nullable();
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('event_id')->references('id')->on('event')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_registration');
    }
};
