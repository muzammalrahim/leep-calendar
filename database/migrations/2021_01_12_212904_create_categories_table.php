<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->string('name');
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
        Schema::dropIfExists('categories');
    }
    // $category=array(
    //     array("cat_id"=>64,"name"=>"Africa"),
    //     array("cat_id"=>1,"name"=>"Alcohol,Tobacco & Drugs"),
    //     array("cat_id"=>2,"name"=>"Animals, Fish, Insect & Birds"),
    //     array("cat_id"=>3,"name"=>"Anniversaries"),
    //     array("cat_id"=>4,"name"=>"Australia"),
    //     array("cat_id"=>58,"name"=>"Books"),
    //     array("cat_id"=>5,"name"=>"Brazil & S. America"),
    //     array("cat_id"=>6,"name"=>"Buddhism"),
    //     array("cat_id"=>7,"name"=>"Canada"),
    //     array("cat_id"=>8,"name"=>"Career"),
    //     array("cat_id"=>9,"name"=>"Children"),
    //     array("cat_id"=>61,"name"=>"China, Japan & Korea"),
    //     array("cat_id"=>10,"name"=>"Christian"),
    //     array("cat_id"=>59,"name"=>"Civil Rights"),
    //     array("cat_id"=>12,"name"=>"Culture & Art"),
    //     array("cat_id"=>13,"name"=>"Education"),
    //     array("cat_id"=>14,"name"=>"Entertainment"),
    //     array("cat_id"=>15,"name"=>"Environment, Space & The Outdoors"),
    //     array("cat_id"=>66,"name"=>"Eastern Europe"),
    //     array("cat_id"=>16,"name"=>"European Countries"),
    //     array("cat_id"=>17,"name"=>"Family & Friends"),
    //     array("cat_id"=>18,"name"=>"Finance & Banking"),
    //     array("cat_id"=>19,"name"=>"Food"),
    //     array("cat_id"=>20,"name"=>"Health"),
    //     array("cat_id"=>21,"name"=>"Hindu"),
    //     array("cat_id"=>22,"name"=>"Hobby"),
    //     array("cat_id"=>70,"name"=>"India"),
    //     array("cat_id"=>24,"name"=>"Jewish"),
    //     array("cat_id"=>25,"name"=>"Legal"),
    //     array("cat_id"=>26,"name"=>"Lifestyle"),
    //     array("cat_id"=>27,"name"=>"Media"),
    //     array("cat_id"=>28,"name"=>"Men"),
    //     array("cat_id"=>62,"name"=>"Middle East/West Asia"),
    //     array("cat_id"=>29,"name"=>"Military"),
    //     array("cat_id"=>30,"name"=>"Misc"),
    //     array("cat_id"=>31,"name"=>"Moon"),
    //     array("cat_id"=>32,"name"=>"Music"),
    //     array("cat_id"=>33,"name"=>"Muslim"),
    //     array("cat_id"=>34,"name"=>"Mexico & Central America"),
    //     array("cat_id"=>35,"name"=>"Other Religions"),
    //     array("cat_id"=>36,"name"=>"Politics"),
    //     array("cat_id"=>37,"name"=>"Real Estate"),
    //     array("cat_id"=>38,"name"=>"Religion"),
    //     array("cat_id"=>39,"name"=>"Retail"),
    //     array("cat_id"=>40,"name"=>"Romance, Love & Sexuality"),
    //     array("cat_id"=>65,"name"=>"Russia"),
    //     array("cat_id"=>41,"name"=>"South Africa"),
    //     array("cat_id"=>63,"name"=>"South Asia"),
    //     array("cat_id"=>42,"name"=>"Safety & Security"),
    //     array("cat_id"=>43,"name"=>"Science & Math"),
    //     array("cat_id"=>60,"name"=>"Seniors"),
    //     array("cat_id"=>57,"name"=>"Sikh"),
    //     array("cat_id"=>44,"name"=>"Silly"),
    //     array("cat_id"=>45,"name"=>"Sports & Fitness"),
    //     array("cat_id"=>46,"name"=>"Technology & Telecom"),
    //     array("cat_id"=>47,"name"=>"Transportation"),
    //     array("cat_id"=>48,"name"=>"Travel & Tourism"),
    //     array("cat_id"=>49,"name"=>"United Kingdom & Ireland"),
    //     array("cat_id"=>52,"name"=>"United States"),
    //     array("cat_id"=>50,"name"=>"Women"),
    //     array("cat_id"=>68,"name"=>"Conferences & Symposiums"),
    //     array("cat_id"=>69,"name"=>"Festivals & Fairs"),
    //     array("cat_id"=>67,"name"=>"Trade Shows & Exhibitions"),
    //     array("cat_id"=>11,"name"=>"Fundraising Event"),
    //     array("cat_id"=>23,"name"=>"Rallies & Protests"),
    //     array("cat_id"=>51,"name"=>"Competitions & Awards")
    // );
    // App\Models\category::insert($category);
}
