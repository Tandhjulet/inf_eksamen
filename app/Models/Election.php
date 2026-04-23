<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    protected $casts = [
        'active' => 'bool'
    ];


    public function votes()
    {
        return $this->belongsToMany(Candidate::class, 'candidate_election_user')
            ->withPivot(['candidate_id']);
    }

    public function voters()
    {
        return $this->belongsToMany(User::class, 'candidate_election_user')
            ->withPivot(['user_id']);
    }
}
