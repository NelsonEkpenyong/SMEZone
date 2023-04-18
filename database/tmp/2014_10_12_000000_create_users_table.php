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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dob')->nullable();
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->boolean('have_business')->default(0);
            $table->unsignedBigInteger('industry_id')->nullable();
            $table->int('years_in_business')->nullable();
            $table->boolean('have_access_bank_account')->default(0);
            $table->string('account',10)->nullable();
            $table->boolean('account_status')->default(0);
            $table->string('address')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('lga_id')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();

            $table->foreign('lga_id')->references('id')->on('lgas')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('industry_id')->references('id')->on('industries')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('restrict')->onUpdate('cascade');

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
