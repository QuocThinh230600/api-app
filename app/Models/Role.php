<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User_Info;

class Role extends Model
{
    use HasFactory;

    public function user_info(){
        return $this->belongsto(User_Info::class);
    }
}
