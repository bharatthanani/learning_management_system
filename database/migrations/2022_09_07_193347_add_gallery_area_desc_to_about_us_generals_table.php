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
        Schema::table('about_us_generals', function (Blueprint $table) {
            $table->longText('gallery_area_desc')->after('gallery_area_subtitle')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_us_generals', function (Blueprint $table) {
            $table->dropColumn('gallery_area_desc');
        });
    }
};
