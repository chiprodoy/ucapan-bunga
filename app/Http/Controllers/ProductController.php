<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ProductController extends WebController
{
    public $products;

    public $relateProducts;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->title='Produk Ucapan Bunga - Pesan Ucapan Papan bunga sekarang di ucapanbunga.com';
        $this->description = 'Berikan kesan yang tak terlupakan dengan ucapan papan bunga kami. Pesan sekarang di UcapanBunga.com';
        $this->keywords = explode(',',$this->keyword);
        $this->metaImage = asset('images/product1.jpg');

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

        if(empty($this->products)){
            return redirect()->route('public.product');
        }

        $this->title=$this->products->product_name;
        $this->description = strip_tags($this->products->product_description);
        $this->metaImage = asset('images/'.$this->products->product_cover);

        if(!empty($this->products->meta_title)){
            $this->title = $this->products->meta_title;
        }

        if(!empty($this->products->meta_keyword)){
            $this->keyword = $this->products->meta_keyword;
        }

        if(!empty($this->products->meta_description)){
            $this->description = $this->products->meta_description;
        }


        $keywords=str_replace(',','',$this->keyword);
        $keywords=explode(' ',$keywords);
        $sql=Product::query();

        foreach($keywords as $k => $v){
            $sql->orwhere('product_slug','like','%'.$v.'%');
        }

        $this->relateProducts=$sql->get();

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
