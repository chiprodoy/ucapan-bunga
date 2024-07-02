<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends MainModel
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'invoice_number',
        'costumer_name',
        'costumer_phone',
        'delivery_address',
        'delivery_phone',
        'product_name',
        'notes',
        'discount',
        'qty',
        'price',
        'total_price',
        'ongkir',
        'tax',
        'grand_total_price'
    ];

    public function setInvoiceNumberAttribute($value)
    {
        $this->attributes['invoice_number']=date('Ym').'-'.substr($this->uuid,0,5);
    }

    public function setTotalPriceAttribute($value)
    {
        $price = $this->qty*$this->price;
        $disc = $price * ($this->discount/100);
        $this->attributes['total_price']=$price - $disc;
    }

    public function setGrandTotalPriceAttribute($value)
    {
        $this->attributes['grand_total_price']=$this->total_price + $this->ongkir + $this->tax;
    }
}
