<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giving extends Model
{
    protected $table = 'giving';
    protected $fillable = ['member_id', 'item', 'amount', 'transaction_code', 'date_of_giving', 'member_code'];
}
