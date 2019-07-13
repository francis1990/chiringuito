<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function products()
    {
        return $this->belongsToMany('Product','sale_product','sale_id','product_id')
            ->withPivot('count','price','unitie_id');
    }
}
