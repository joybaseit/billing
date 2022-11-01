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
        'customer_name','address','order_no','style_no','design_no','stich','colour_name','unit_name',
        'total_order','total_order_usd','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
