<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function sales()
    {
        return $this->belongsToMany('Sale','sale_product','product_id','sale_id')
            ->withPivot('count','price','unitie_id');
    }
}
