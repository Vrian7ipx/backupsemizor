<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class Migacion extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inovices', function($t)
        {
            $t->increments('id');
            $t->unsignedInteger('invoice_id');
            $t->unsignedInteger('account_id');
            $t->unsignedInteger('branch_id');
            $t->string('json');            
        });
        Schema::create('invoice_items', function($t)
        {
            $t->increments('id');
            $t->unsignedInteger('invoice_id');
            $t->string('json');
        });
        Schema::create('type_documents', function($t)
        {
            $t->increments('id');
            $t->string('json');            
        });
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
?>