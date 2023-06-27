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
        Schema::create('get_funded_africa', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsappId');
            $table->string('jTitle');
            $table->string('gender');
            $table->string('location');
            $table->string('bio');
            $table->string('startupName');
            $table->string('businessStage');
            $table->unsignedBigInteger('industry_id');
            $table->string('foundYear');
            $table->string('annualRevenue');
            $table->string('raiseAmount');
            $table->timestamps();

            $table->foreign('industry_id')->references('id')->on('lgas')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_funded_africa');
    }
};
