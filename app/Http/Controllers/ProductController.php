<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends WebController
{
    public $products;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->title='Produk Ucapan Bunga - Pesan Ucapan Papan bunga sekarang di ucapanbunga.com';
        $this->description = 'Berikan kesan yang tak terlupakan dengan ucapan papan bunga kami. Pesan sekarang di UcapanBunga.com';
        $this->keywords = explode(',',$this->keyword);
        $this->products=Product::all();
        return view('product.index',get_object_vars($this));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $slug)
    {
        $this->products = Product::where('product_slug',$slug)->first();
        $this->title=$this->products->product_name;
        $this->description = strip_tags($this->products->product_description);
        $this->keywords = explode(',',$this->keyword);
        return view('product.show',get_object_vars($this));
        //
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
