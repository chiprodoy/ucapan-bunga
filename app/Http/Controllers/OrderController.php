<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public $products;

    public $slug;

    /**
     * Display a listing of the resource.
     */
    public function index($slug='')
    {
        $this->slug = $slug;
        $this->products=Product::all();
        return view('order.index',get_object_vars($this));
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
    public function store(OrderRequest $request)
    {
        $data = $request->safe()->only(['costumer_name', 'costumer_phone','delivery_address','product_name','qty','delivery_phone']);

        if(empty($data['delivery_phone'])){
            $data['delivery_phone']=$data['costumer_phone'];
        }

        $order=Order::create($data);

        $message = 'Hi kak, saya ingin memesan ucapan bunga *Data Pesanan:* \n
            Nama : '.$data['costumer_name'].'\n
            Hp : '.$data['costumer_phone'].'\n
            *Produk* \n
            Produk yang dipesan : '.$data['product_name'].'\n
            alamat pengiriman ucapan bunga : *'.$data['delivery_address'].'*\n
            pesan yang disampaikan : *'.$data['notes'].'*\n'

            ;

        if($order) return redirect('https://wa.me/6285158804947?text='.urlencode($message));

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
