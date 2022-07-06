<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    /*
     * Relationships
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderline(){
        return $this->hasMany(Orderline::class);
    }

    public function deliveryaddress(){
        return $this->hasOne(DeliveryAddress::class);
    }
}
