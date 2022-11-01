<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    use HasFactory;
    protected $table = 'order_products';

    protected $fillable = [
        'products_id','price','qty','total_bdt','total_usd','billings_id',
    ];

    public function billing()
    {
        return $this->belongsTo('App\Models\Billing','billing_id');
    }
    public function products()
    {
        return $this->belongsTo('App\Models\Products','products_id');
    }
    
}
