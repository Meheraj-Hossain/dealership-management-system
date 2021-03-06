<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Inventory(){
        return $this->belongsTo(Inventory::class,'product_id');
    }
}
