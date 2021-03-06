<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';
    protected $fillable = ['name'];

    public function members()
    {
        return $this->hasMany('App\Member');
    }
}
