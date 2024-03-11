<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        ['id' => 1, 'title' => 'Prodotto 1', 'description' => 'Descrizione del prodotto 1'],
        ['id' => 2, 'title' => 'Prodotto 2', 'description' => 'Descrizione del prodotto 2'],
        ['id' => 3, 'title' => 'Prodotto 3', 'description' => 'Descrizione del prodotto 3'],
        ['id' => 4, 'title' => 'Prodotto 4', 'description' => 'Descrizione del prodotto 4'],
        ['id' => 5, 'title' => 'Prodotto 5', 'description' => 'Descrizione del prodotto 5'],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products', ['title' => 'Lista prodotti', 'products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newProduct', ['title' => 'Aggiungi un nuovo prodotto']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $products)
    {
        return view('singleProduct', ['title' => $this->products[$products]['title'],'description' => $this->products[$products]['description']]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
