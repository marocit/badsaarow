<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['title', 'question_type', 'option_name', 'user_id'];
    
    public function answers() {
    return $this->hasMany(Answer::class);
  }
  
  protected $table = 'question';


}
