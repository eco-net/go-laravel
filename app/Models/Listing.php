<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Listing extends Model
{

    public function user() {
        return $this->belongsTo(User::class);
    }
}