<?php namespace Alex\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexBrand extends Migration
{
    public function up()
    {
        Schema::table('alex_brand_', function($table)
        {
            $table->dropColumn('title');
        });
    }
    
    public function down()
    {
        Schema::table('alex_brand_', function($table)
        {
            $table->text('title');
        });
    }
}
