<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CompletedChallenge extends Pivot
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function challenge(){
        return $this->belongsTo(Challenge::class);
    }
    use HasFactory;
}
