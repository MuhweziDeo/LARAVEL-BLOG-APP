<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    public $primayKey='id';
    public function user(){
      return $this->belongsTo('App\User');
    }

}
