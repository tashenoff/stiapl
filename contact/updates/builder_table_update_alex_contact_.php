<?php namespace Alex\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexContact extends Migration
{
    public function up()
    {
        Schema::table('alex_contact_', function($table)
        {
            $table->renameColumn('phone', 'phones');
        });
    }
    
    public function down()
    {
        Schema::table('alex_contact_', function($table)
        {
            $table->renameColumn('phones', 'phone');
        });
    }
}
