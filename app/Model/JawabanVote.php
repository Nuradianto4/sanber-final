<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JawabanVote extends Model
{
    protected $fillable = ['jawaban_id', 'user_id', 'vote_positif', 'vote_negatif'];

    public function votepositif()
    {
        $this->vote_positif = 1;
        $this->save();
    }

    public function votenegatif()
    {
        $this->vote_negatif = 0;
        $this->save();
    }
}
