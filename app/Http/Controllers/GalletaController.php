<?php

namespace App\Http\Controllers;

use App\Models\Galleta;
use Illuminate\Http\Request;

class GalletaController extends Controller
{
    public function index()
    {
        $galletas = Galleta::all();
        return view('galletas.index', compact('galletas'));
    }

    public function create()
    {
        return view('galletas.create');
    }

    public function store(Request $request)
    {
        Galleta::create($request->all());
        return redirect('/galletas');
    }

    public function edit($id)
    {
        $galleta = Galleta::find($id);
        return view('galletas.edit', compact('galleta'));
    }

    public function update(Request $request, $id)
    {
        $galleta = Galleta::find($id);
        $galleta->update($request->all());
        return redirect('/galletas');
    }

    public function destroy($id)
    {
        Galleta::destroy($id);
        return redirect('/galletas');
    }
    
}