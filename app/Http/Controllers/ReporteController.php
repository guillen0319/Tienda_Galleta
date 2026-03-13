<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{

public function index()
{

$reporte = Venta::select(
'galletas.nombre',
'ventas.forma_pago',
DB::raw('SUM(ventas.cantidad) as cantidad'),
DB::raw('SUM(ventas.total) as total')
)

->join('galletas','ventas.galleta_id','=','galletas.id')

->whereDate('ventas.created_at',date('Y-m-d'))

->groupBy('galletas.nombre','ventas.forma_pago')

->get();

return view('reportes.index',compact('reporte'));

}

}
