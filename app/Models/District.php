<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
