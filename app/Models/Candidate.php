<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}
