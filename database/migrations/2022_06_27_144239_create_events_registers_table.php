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
        Schema::create('events_registers', function (Blueprint $table) {
            $table->id('id_events_member');
            $table->string('username');
            $table->string('email');
            $table->date('born');
            $table->string('gender');
            $table->string('phone');

            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('village');
            $table->integer('postal_code');
            $table->text('address');
            $table->integer('province_id');
            $table->integer('regency_id');
            $table->integer('district_id');
            $table->integer('village_id');

            $table->bigInteger('events_id');
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
        Schema::dropIfExists('events_registers');
    }
};
