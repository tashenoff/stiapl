<?php namespace Alex\Exp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexExp extends Migration
{
    public function up()
    {
        Schema::create('alex_exp_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('number');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_exp_');
    }
}
