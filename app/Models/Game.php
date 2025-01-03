<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $fillable = ['team','id','created_at','updated_at','opponent','result_team','result_opponent','game_date','pitch'];

}

