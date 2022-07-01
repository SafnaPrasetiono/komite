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
        Schema::create('members_categories', function (Blueprint $table) {
            $table->id('id_members_categories');
            $table->string('categories');
            $table->string('categories_subs');
            $table->integer('members_id');
            $table->integer('categories_id');
            $table->integer('categories_subs_id');
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
        Schema::dropIfExists('members_categories');
    }
};
