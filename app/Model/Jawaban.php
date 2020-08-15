<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['isi_jawaban', 'pertanyaan_id', 'user_id'];

    public function upvote()
    {
        $user = auth()->user();
        if ($user) {
            $vote = $this->votes()->where('user_id', $user->id)->first();
            if ($vote) {
                if ($vote->vote_positif == 1) {
                    $this->unvote();
                    $this->user->updateUserReputation('cancel upvote');
                }
                if ($vote->vote_positif == 0) {
                    $vote->upvote();
                    $this->user->updateUserReputation('cancel downvote');
                    $this->user->updateUserReputation('upvote');
                }
            } else {
                $this->votes()->create([
                    'user_id' => $user->id,
                    'vote_positif' => 1,
                ]);
                $this->user->updateUserReputation('upvote');
            }
            $this->countVote();
        }
    }

    public function downvote()
    {
        $user = auth()->user();
        if ($user) {
            $vote = $this->votes()->where('user_id', $user->id)->first();
            if ($vote) {
                if ($vote->vote_negatif == 0) {
                    $this->unvote();
                    $this->user->updateUserReputation('cancel downvote');
                }
                if ($vote->vote_negatif == 1) {
                    $vote->downvote();
                    $this->user->updateUserReputation('cancel upvote');
                    $this->user->updateUserReputation('downvote');
                }
            } else {
                $this->votes()->create([
                    'user_id' => $user->id,
                    'vote_negatif' => 0,
                ]);
                $this->user->updateUserReputation('downvote');
            }
            $this->countVote();
        }
    }

    public function unvote()
    {
        $user = auth()->user();
        if ($user) {
            $vote = $this->votes()->where('user_id', $user->id)->first();
            $vote->delete();
        }
        $this->countVote();
    }

    public function countVote()
    {
        $upvote     = $this->votes()->where('vote_positif', 1)->count();
        $downvote   = $this->votes()->where('vote_negatif', 0)->count();
        $totalVote  = $upvote - $downvote;
        $this->vote = $totalVote;
        $this->save();
    }
}
