<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class TecnowebController extends Controller
{
    //
    public function index()
    {
        $productos = Producto::paginate();
        return view('welcome', compact('productos'))
        ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }
}
