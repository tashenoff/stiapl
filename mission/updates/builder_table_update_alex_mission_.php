<?php namespace Alex\Mission\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexMission extends Migration
{
    public function up()
    {
        Schema::table('alex_mission_', function($table)
        {
            $table->text('slogan');
        });
    }
    
    public function down()
    {
        Schema::table('alex_mission_', function($table)
        {
            $table->dropColumn('slogan');
        });
    }
}
