<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PertanyaanVote extends Model
{
    protected $fillable = ['pertanyaan_id', 'vote_up', 'vote_down', 'user_id'];

    public function upvote()
    {
        $this->vote_up = 1;
        $this->save();
    }

    public function downvote()
    {
        $this->vote_down = 0;
        $this->save();
    }
}
