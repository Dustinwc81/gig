<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','billing_name', 'billing_email', 'billing_address', 'billing_city', 'billing_state', 'billing_zipcode',
        'billing_phone', 'billing_name_on_card', 'billing_subtotal', 'billing_tax', 'billing_total', 'error'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
