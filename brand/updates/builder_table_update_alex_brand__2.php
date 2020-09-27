<?php namespace Alex\Brand\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexBrand2 extends Migration
{
    public function up()
    {
        Schema::table('alex_brand_', function($table)
        {
            $table->text('photo');
            $table->renameColumn('brand', 'title');
        });
    }
    
    public function down()
    {
        Schema::table('alex_brand_', function($table)
        {
            $table->dropColumn('photo');
            $table->renameColumn('title', 'brand');
        });
    }
}
