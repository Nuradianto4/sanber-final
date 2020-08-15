<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $table="tag";
    protected $guarded=[];

    public function showtag()
    {
        return $this->hasMany('App\Model\Pertanyaan');
    }
}
