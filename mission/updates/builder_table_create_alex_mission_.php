<?php namespace Alex\Mission\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexMission extends Migration
{
    public function up()
    {
        Schema::create('alex_mission_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_mission_');
    }
}
