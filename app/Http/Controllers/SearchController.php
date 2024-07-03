<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $query ;

    public $products;

    public $currentMonth;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $keyword)
    {
        $this->query = $keyword;
        $sql = Product::where('product_name', 'like', "%$this->query%")
                            ->orWhere('product_description', 'like', "%$this->query%");

        $currentMonth = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY');

        if($sql->exists()){
            $this->products = $sql->get();
        }else{
            $this->products = Product::all();
        }

        return view('search.show',get_object_vars($this));
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
