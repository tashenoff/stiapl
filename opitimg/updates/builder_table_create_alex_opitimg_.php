<?php namespace Alex\Opitimg\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexOpitimg extends Migration
{
    public function up()
    {
        Schema::create('alex_opitimg_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_opitimg_');
    }
}
