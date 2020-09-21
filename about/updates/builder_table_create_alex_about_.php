<?php namespace Alex\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexAbout extends Migration
{
    public function up()
    {
        Schema::create('alex_about_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_about_');
    }
}
