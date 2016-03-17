<?php 
class BackupController extends Controller{
	public function invoice(){
		/*$user  = new User();
		$user->name = "admin";
		$user->username = "admin";
		$user->email = "admin";
		$user->password = Hash::make("12345");
		$user->save();*/
		return Hash::make("12345");
		$inv = Invoice::where('id','1')->first();
		print_r($inv->json);
		return 0;
	}
	public function invoiceItem(){
		$item = InvoiceItem::get();
		print_r($item);
		return 0;
	}
	public function typeDocument(){
		$doc = TypeDocument::get();
		print_r($doc);
		return 0;
	}

	public function saveInvoice(){		
		$respuesta = array();    	
    	$input = Request::get('json');    	
    	//$input = "with jason2";
    	$invoice = new Invoice();
    	$invoice->invoice_id=1;//Request::get('invoice_id');
    	$invoice->branch_id = Request::get('branch_id');
    	$invoice->account_id = Request::get('account_id');    	
    	$invoice->json = $input;
    	$invoice->save();    	
    	return Response::json("hola");    	
	}
	public function saveTypeDocument(){

	}

}
?>