<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcement';
    protected $fillable = ['title', 'description', 'made_by', 'time_of_annocement', 'member_code'];
}
