<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    // app/Http/Controllers/ProdutoController.php
// app/Http/Controllers/CategoriaController.php
// app/Http/Controllers/PedidoController.php

// ...

// Operações CRUD
public function index()
{
    return response()->json(Produto::all());
}

public function store(Request $request)
{
    $produto = Produto::create($request->all());
    return response()->json($produto, 201);
}

// Adicione operações específicas
public function calcularFrete(Request $request)
{
    // Lógica para calcular o frete
    $frete = 10.0; // Exemplo simples, você pode adaptar conforme necessário
    return response()->json(['frete' => $frete]);
}

}
