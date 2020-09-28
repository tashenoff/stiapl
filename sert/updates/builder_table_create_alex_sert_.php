<?php namespace Alex\Sert\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexSert extends Migration
{
    public function up()
    {
        Schema::create('alex_sert_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_sert_');
    }
}
