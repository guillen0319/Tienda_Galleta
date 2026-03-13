<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Galleta;

class VentaController extends Controller
{

    public function index()
    {
        $ventas = Venta::with('galleta')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $galletas = Galleta::all();
        return view('ventas.create', compact('galletas'));
    }

    public function store(Request $request)
    {

        $galleta = Galleta::findOrFail($request->galleta_id);

        $total = $galleta->precio * $request->cantidad;

        Venta::create([
            'galleta_id' => $request->galleta_id,
            'cantidad' => $request->cantidad,
            'cliente' => $request->cliente,
            'forma_pago' => $request->forma_pago,
            'total' => $total
        ]);

        // descontar stock
        $galleta->stock -= $request->cantidad;
        $galleta->save();

        return redirect('/ventas');
    }

}
