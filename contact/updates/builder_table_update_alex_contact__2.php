<?php namespace Alex\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAlexContact2 extends Migration
{
    public function up()
    {
        Schema::table('alex_contact_', function($table)
        {
            $table->text('mail');
        });
    }
    
    public function down()
    {
        Schema::table('alex_contact_', function($table)
        {
            $table->dropColumn('mail');
        });
    }
}
