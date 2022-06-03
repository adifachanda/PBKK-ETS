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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->foreign('room_id')->references('room_id')->on('rooms');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamps('booking_date');
            $table->string('booking_status')->default('payment_pending');
            $table->date('check_in');
            $table->date('check_out');
            $table->decimal('total_price',10,2);
            $table->integer('total_nights');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
