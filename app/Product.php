<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $fillable = ['categorie_id', 'brand_id', 'name', 'price', 'stock'];

    public function products()
    {
      return DB::table('products')->get();
    }

    public function brand()
    {
      return $this->belongsTo('App\Brand');
    }
    public function categorie()
    {
      return $this->belongsTo('App\Categorie');
    }
}
