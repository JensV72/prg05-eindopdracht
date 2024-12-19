<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{

    protected $fillable = ['team','id','created_at','updated_at','played','wins','draws','losses', 'goals_scored', 'goal_difference','points'];

}
