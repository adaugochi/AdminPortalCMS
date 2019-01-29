<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $table = 'offering';
    protected $fillable = ['member_id', 'amount', 'transaction_code', 'payment_date', 'member_code'];

    public function member()
    {
        return $this->belongsTo('App\Member');
    }
}
