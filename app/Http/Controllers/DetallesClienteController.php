<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use DB;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	
	class DetallesClienteController extends Controller {
		public function detalles(){
		$clientes = DB::select('select * from Clientes');
		$archivos = DB::select('select * from Archivos');
		return view('detalles_cliente',['clientes'=>$clientes, 'archivos'=>$archivos]);
	}
}