<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends MainModel
{
    use HasFactory;

    public function setInvoiceNumberAttribute($value)
    {
        $this->attributes['invoice_number`']=date('Ym').'-'.substr($this->uuid,0,5);
    }
}
