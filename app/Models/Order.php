<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = ['id'];

    public function billing()
    {
        return $this->hasOne(Billing::class, 'id', 'billing_id');
    }

    public function orderdetails()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }
}
