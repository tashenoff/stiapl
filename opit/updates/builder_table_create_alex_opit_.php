<?php namespace Alex\Opit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexOpit extends Migration
{
    public function up()
    {
        Schema::create('alex_opit_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_opit_');
    }
}
