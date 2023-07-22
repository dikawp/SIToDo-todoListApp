<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;

    // public function users(){
    //     return $this->belongsTo(User::class)->hasMany(Members::class)->hasMany(Tasks::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function member(){
        return $this->hasMany(Members::class);
    }

    public function task(){
        return $this->hasMany(Tasks::class);
    }
}
