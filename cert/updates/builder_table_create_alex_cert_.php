<?php namespace Alex\Cert\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAlexCert extends Migration
{
    public function up()
    {
        Schema::create('alex_cert_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alex_cert_');
    }
}
