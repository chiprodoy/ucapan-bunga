<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends WebController
{

    public $products;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->title='Ucapan Bunga - Pesan Ucapan Papan bunga sekarang di ucapanbunga.com';
        $this->description = 'Berikan kesan yang tak terlupakan dengan ucapan papan bunga kami. Pesan sekarang di UcapanBunga.com';
        $this->keywords = explode(',',$this->keyword);
        $this->products=Product::all();
        return view('home.index',get_object_vars($this));
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
    public function show(string $id)
    {
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
