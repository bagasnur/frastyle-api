<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VersionContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('version_content', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('content_id');
            $table->unsignedBigInteger('version_id');
        });

        Schema::table('version_content', function (Blueprint $table) {
            $table->foreign('content_id')->references('id')->on('contents')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('version_id')->references('id')->on('versions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
