<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;
class TypeDocument extends Eloquent
{
	 use SoftDeletingTrait; 
	 protected $table = 'type_documents';
   
    
	protected $softDelete = true;
	public $timestamps = true;
}

?>