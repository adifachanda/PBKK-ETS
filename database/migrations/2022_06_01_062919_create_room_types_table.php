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
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_name',500);
            $table->unsignedInteger('price');
        });

        DB::table('room_types')->insert([
            ['room_name' => 'Single Bed', 'price' => 250000],
            ['room_name' => 'Double Bed', 'price' => 500000],
            ['room_name' => 'VIP Queen', 'price' => 1500000],
            ['room_name' => 'VIP King', 'price' => 2000000],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
};
