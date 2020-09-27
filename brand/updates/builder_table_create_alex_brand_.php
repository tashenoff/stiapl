<?php namespace Alex\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexBrand extends Migration
{
    public function up()
    {
        Schema::create('alex_brand_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('brand');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_brand_');
    }
}
