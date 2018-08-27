<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The products that belong to the order.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    /**
     * The customer that belong to the order.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
