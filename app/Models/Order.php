<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'date',
        'notes',
        'hall_id',
        'accepted_id'
    ];

    public function hall()
    {
        return $this->belongsTo('App/Hall');
    }
    public function orderproduct()
    {
        return $this->hasMany('App/OrderProduct');
    }
}
