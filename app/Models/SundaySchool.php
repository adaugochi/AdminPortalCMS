<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SundaySchool extends Model
{
    protected $table = 'sunday_school';
    protected $fillable = ['ministered_by', 'topic', 'content', 'date_time', 'total_attendees'];
}
