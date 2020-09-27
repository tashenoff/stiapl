<?php namespace Alex\Uslugi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexUslugi extends Migration
{
    public function up()
    {
        Schema::create('alex_uslugi_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('items');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_uslugi_');
    }
}
