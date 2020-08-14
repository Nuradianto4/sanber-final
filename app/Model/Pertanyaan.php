<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'isi_pertanyaan', 'user_id'];

    public function tags()
    {
    	return $this->belongsToMany('App\Model\Tag','pertanyaan_tag','pertanyaan_id','tag_id');
    }
    
}
