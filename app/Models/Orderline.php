<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    use HasFactory;

    protected $fillable = [
        'amnt',
        'price_per_piece'
    ];


    /*
     * Relationships
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->hasOne(Product::class);
    }
}
