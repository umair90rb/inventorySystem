<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = ['id', 'name', 'contact', 'email', 'address', 'comment'];    

    public function customers()
    {
      return DB::table('customers')->get();
    }
}
