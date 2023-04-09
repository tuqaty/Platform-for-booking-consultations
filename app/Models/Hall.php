<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'address',
        'telephone',
        'user_id'
    ];

    public function orders()
    {
       return $this->hasMany('App/Order');
    }
    public function user()
    {
        return $this->belongsTo('App/User');
    }
    public function sales()
    {
        return $this->hasMany('App/Sale');
    }
    public function products()
    {
        return $this->belongsToMany('App/Product');
    }

}
