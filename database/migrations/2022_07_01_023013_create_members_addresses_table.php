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
        Schema::create('members_addresses', function (Blueprint $table) {
            $table->id('id_members_address');
            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->integer('postal_code');
            $table->text('address');
            $table->integer('members_id');
            $table->integer('id_province');
            $table->integer('id_regency');
            $table->integer('id_district');
            $table->integer('id_village');
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
        Schema::dropIfExists('members_addresses');
    }
};
