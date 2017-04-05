<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;

class Answer extends Model
{
    
    protected $fillable = ['answer'];
    protected $table = 'answers';

     public function registration(){
        return $this->belongsTo(Registration::class);
    }

    // public function question() {
    //   return $this->belongsTo(Question::class);
    // }
}
