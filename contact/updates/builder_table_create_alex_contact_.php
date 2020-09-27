<?php namespace Alex\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexContact extends Migration
{
    public function up()
    {
        Schema::create('alex_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('too');
            $table->text('adress');
            $table->text('phone');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_contact_');
    }
}
