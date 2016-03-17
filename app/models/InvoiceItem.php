<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class InvoiceItem extends Eloquent
{
	 use SoftDeletingTrait; 
	 protected $table = 'invoice_items';
   
    
	protected $softDelete = true;
	public $timestamps = true;
}

?>