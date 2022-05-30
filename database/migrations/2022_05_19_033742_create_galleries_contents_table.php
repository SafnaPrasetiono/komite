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
        Schema::create('galleries_contents', function (Blueprint $table) {
            $table->id('id_galleries_contents');
            $table->string('title');
            $table->text('slug');
            $table->string('locations');
            $table->text('description');
            $table->text('venue');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('publish');
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
        Schema::dropIfExists('gallery_contents');
    }
};
