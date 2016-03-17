<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Invoice extends Eloquent
{
	 use SoftDeletingTrait;
	 protected $table = 'invoices';
   
    
	protected $softDelete = true;
	public $timestamps = true;
}
?>