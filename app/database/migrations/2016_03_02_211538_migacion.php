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
		Schema::dropIfExists('users');
    	Schema::dropIfExists('invoices');
    	Schema::dropIfExists('invoice_items');
    	Schema::dropIfExists('type_documents');
    	Schema::create('users',function($table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('username',100)->unique();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->timestamps();
        });
		Schema::create('inovices', function($t)
        {
            $t->increments('id');
            $t->unsignedInteger('invoice_id');
            $t->unsignedInteger('account_id');
            $t->unsignedInteger('branch_id');
            $t->string('json');           
            $t->timestamps();
            $t->softDeletes(); 
        });
        Schema::create('invoice_items', function($t)
        {
            $t->increments('id');
            $t->unsignedInteger('invoice_id');
            $t->string('json');
            $t->timestamps();
            $t->softDeletes();
        });
        Schema::create('type_documents', function($t)
        {
            $t->increments('id');
            $t->string('json');            
            $t->timestamps();
            $t->softDeletes();
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