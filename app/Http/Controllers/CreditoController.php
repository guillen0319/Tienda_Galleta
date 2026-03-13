<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\PagoCredito;

class CreditoController extends Controller
{

public function index()
{

$creditos = Venta::where('forma_pago','Credito')->get();

return view('creditos.index',compact('creditos'));

}

public function pagar($id)
{

$venta = Venta::findOrFail($id);

return view('creditos.pagar',compact('venta'));

}

public function guardarPago(Request $request)
{

PagoCredito::create([
'venta_id' => $request->venta_id,
'monto' => $request->monto
]);

return redirect('/creditos');

}

}
