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
            $table->string('start_month')->nullable();
            $table->string('start_day')->nullable();
            $table->string('start_year')->nullable();
            $table->date('start_date')->nullable();
            $table->string('end_month')->nullable();
            $table->string('end_day')->nullable();
            $table->string('end_year')->nullable();
            $table->date('end_date')->nullable();
            $table->string('type')->nullable();
            $table->string('static_change')->nullable();
            $table->longText('notes_not_public')->nullable();
            $table->longText('url')->nullable();
            $table->string('feature_picture')->nullable();
            $table->longText('picture_name')->nullable();
            $table->longText('alt_text')->nullable();
            $table->string('estimated')->nullable();  // Indicates with yes and linked with column type;
            $table->longText('description')->nullable();
            $table->string('event_champion')->nullable();
            $table->longText('event_address1')->nullable();
            $table->longText('event_address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country_code')->nullable();
            $table->string('zip')->nullable();
            $table->string('ph_num')->nullable();
            $table->string('email_form')->nullable();
            $table->string('contact_person')->nullable();
            $table->longText('contact_link')->nullable();
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
