<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'total_order', 'order_time', 'order_date', 'customer_name', 'customer_address', 'customer_phone', /* 'dishesId' */];
    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}