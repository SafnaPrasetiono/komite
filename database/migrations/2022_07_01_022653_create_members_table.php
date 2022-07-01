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
            $table->string('username');
            $table->string('email')->uniqie();
            $table->date('born');
            $table->string('gender');
            $table->string('phone');
            $table->string('class');
            $table->string('description');
            $table->boolean('validate');
            $table->string('avatar');
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
