<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'payment_method', 'discount', 'total'];
    
    /**
     * The products that belong to the order.
     */
    
     public function products()
    {
        return $this->belongsToMany('App\Product')
                    ->withPivot('quantity');
    }
    /**
     * The customer that belong to the order.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
