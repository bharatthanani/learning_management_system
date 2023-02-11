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
        Schema::create('packages', function (Blueprint $table) {
            $table->increment("id");
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('real_price')->nullable();
            $table->longText('description')->nullable();
            $table->integer('separate_charges')->nullable();
            $table->integer('status')->default(1)->comment('1=active,2=disable');
            $table->longText('charges_desc')->nullable();
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
        Schema::dropIfExists('packages');
    }
};
