<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attachments', function (Blueprint $table) {
            $table->id();
            $table->longText('video1')->nullable();
            $table->longText('video2')->nullable();
            $table->longText('video3')->nullable();
            $table->longText('download1')->nullable();
            $table->longText('download2')->nullable();
            $table->longText('download3')->nullable();
            $table->longText('download_title1')->nullable();
            $table->longText('download_title2')->nullable();
            $table->longText('download_title3')->nullable();
            $table->longText('extra_image1')->nullable();
            $table->longText('extra_image2')->nullable();
            $table->longText('extra_image3')->nullable();
            $table->longText('image_tile1')->nullable();
            $table->longText('image_tile2')->nullable();
            $table->longText('image_tile3')->nullable();
            $table->longText('socail_link1')->nullable();
            $table->longText('socail_link2')->nullable();
            $table->longText('socail_link3')->nullable();
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
        Schema::dropIfExists('event_attachments');
    }
}
