<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $fillable = ['firstname','user_id','created_at','updated_at','position_id','lastname','goals','assist'];
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
