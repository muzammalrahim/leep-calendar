<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->string('country1')->nullable();
            $table->string('m_start')->nullable();
            $table->string('d_start')->nullable();
            $table->string('y_start')->nullable();
            $table->date('start_date')->nullable();
            $table->string('m_end')->nullable();
            $table->string('d_end')->nullable();
            $table->string('y_end')->nullable();
            $table->date('end_date')->nullable();
            $table->string('cat_1')->nullable();
            $table->string('cat_2')->nullable();
            $table->string('cat_3')->nullable();
            $table->string('cat_4')->nullable();
            $table->string('cat_5')->nullable();
            $table->string('cat_6')->nullable();
            $table->string('type')->nullable();
            $table->string('static_change')->nullable();
            $table->longText('notesNP')->nullable();
            $table->longText('url')->nullable();
            $table->string('feature_picture')->nullable();
            $table->longText('picture_name')->nullable();
            $table->longText('alt_text')->nullable();
            $table->string('estimated')->nullable();
            $table->longText('description')->nullable();
            $table->string('event_champion')->nullable();
            $table->longText('address1')->nullable();
            $table->longText('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country2')->nullable();
            $table->string('zip')->nullable();
            $table->string('ph_num')->nullable();
            $table->string('email_form')->nullable();
            $table->string('contact_person')->nullable();
            $table->longText('contact_link')->nullable();
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
            $table->longText('physical_address')->nullable();
            $table->longText('physical_addr')->nullable();
            $table->string('purchas_reserve')->nullable();
            $table->longText('location_based')->nullable();
            $table->string('manager')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('events');
    }
}
