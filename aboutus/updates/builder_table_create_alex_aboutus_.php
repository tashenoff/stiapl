<?php namespace Alex\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexAboutus extends Migration
{
    public function up()
    {
        Schema::create('alex_aboutus_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_aboutus_');
    }
}
