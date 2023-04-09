<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrederProduct extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'quantity',
        'department_id',
        'order_id',
        'product_id'
    ];
    public function order()
    {
        return $this->belongsTo('Order');
    }
    public function product()
    {
        return $this->belongsTo('Product');
    }
    public function department()
    {
        return $this->belongsTo('Department');
    }
}
