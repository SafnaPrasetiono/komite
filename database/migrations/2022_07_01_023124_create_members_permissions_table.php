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
        Schema::create('members_permissions', function (Blueprint $table) {
            $table->id('id_members_permissions');
            $table->boolean('ud')->default(0)->nullable();
            $table->boolean('siup')->default(0)->nullable();
            $table->boolean('halal')->default(0)->nullable();
            $table->boolean('bpom')->default(0)->nullable();
            $table->boolean('pirt')->default(0)->nullable();
            $table->boolean('nib')->default(0)->nullable();
            $table->boolean('sku')->default(0)->nullable();
            $table->boolean('izin')->default(0)->nullable();
            $table->bigInteger('members_id');
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
        Schema::dropIfExists('members_permissions');
    }
};
