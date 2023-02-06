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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('venue_name');
            $table->string('expected_participants');
            $table->string('venue_address');
            $table->unsignedBigInteger('event_type_id');
            $table->text('event_link')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('description');
            $table->string('event_image');
            $table->string('thumbnail');
            $table->string('invitation_email_banner');
            $table->integer('invite_user')->nullable(); //[0 => 'default', 1 => 'SME User',2 => Non- Sme User, 3 => All Users]
            $table->integer('is_upcoming')->default(0); 
            $table->boolean('is_featured')->default(0);
            $table->timestamps();

            $table->foreign('event_type_id')->references('id')->on('event_type')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event');
    }
};
