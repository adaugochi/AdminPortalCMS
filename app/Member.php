<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['group_id', 'department_id', 'firstname', 'lastname', 'gender', 'age_category', 
                           'birth_date', 'address', 'phone_number', 'email', 'password', 'member_code'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function offering()
    {
        return $this->hasMany('App\Offering');
    }
}

