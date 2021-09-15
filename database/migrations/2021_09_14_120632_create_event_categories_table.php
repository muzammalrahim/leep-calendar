<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable();
            $table->foreignId('category_1')->nullable();
            $table->foreignId('category_2')->nullable();
            $table->foreignId('category_3')->nullable();
            $table->foreignId('category_4')->nullable();
            $table->foreignId('category_5')->nullable();
            $table->foreignId('category_6')->nullable();
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
        Schema::dropIfExists('event_categories');
    }
}
