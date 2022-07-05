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
        Schema::create('members', function (Blueprint $table) {
            $table->id('id_members');
            $table->char('code', 16);
            $table->char('nik', 20);
            $table->string('username');
            $table->string('email')->uniqie();
            $table->date('born');
            $table->string('gender');
            $table->string('phone');

            $table->string('country');
            $table->string('city');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->integer('postal_code');
            $table->text('address');
            $table->integer('id_province');
            $table->integer('id_regency');
            $table->integer('id_district');
            $table->integer('id_village');

            $table->text('typeBusiness')->nullable();
            $table->string('class')->nullable();
            $table->string('description')->nullable();
            $table->text('permission')->nullable();
            
            $table->boolean('validate');
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
        Schema::dropIfExists('members');
    }
};
