<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['categorie_id', 'brand_id', 'name', 'price', 'stock'];


    public function brand()
    {
      return $this->belongsTo('App\Brand');
    }
    public function categorie()
    {
      return $this->belongsTo('App\Categorie');
    }
}
