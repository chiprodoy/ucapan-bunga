<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MainModel extends Model
{
    public function setUuidAttribute($value)
    {
        if(Str::isUuid($value)) $this->attributes['uuid']=$value;
        else $this->attributes['uuid']=Str::uuid();
    }


}
