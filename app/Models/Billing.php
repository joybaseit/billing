<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'billings';

    protected $fillable = [
        'order_no','style_no','design_no','stich','product_name','colour_name','unit_name',
        'quantity','unit_price','total','total_usd','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
