<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use DB;
	use App\Http\Requests;
	use App\Http\Controllers\Controller;
	
	class InfoClienteController extends Controller {
		public function index(Request $request) {
		$id = $request->td("idC");
		$cliente = DB::select('select * from Clientes where ID_Cliente = ?', [$id]);
		return view('info_cliente/',['cliente'=>$cliente]);
	}
}