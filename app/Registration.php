<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class Registration extends Model
{
     protected $fillable = [
        'name', 'email', 'answer-1', 'answer-2', 'answer-3', 'answer-4', 'answer-5', 'message'
    ];

     public function answer(){
        return $this->hasMany(Answer::class);
    }

    public function GetDateAttribute($value){
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }

     public function message(){
         if (! $this->message){
            return '<p class="font-red-mint"> User hat keine Nachricht hinterlassen </p>';
        } else {
            return $this->message;
        }
    }

    public function scopeAnswer1($query){
        return $query->where('answer-1', '=', 'Ja');
    }

    public function scopeAnswer2($query){
        return $query->where('answer-2', '=', 'Ja');
    }

    public function scopeAnswer3($query){
            return $query->where('answer-3', '=', 'Ja');
        }

    public function scopeAnswer4($query){
            return $query->where('answer-4', '=', 'Ja');
        }

    public function scopeAnswer5($query){
            return $query->where('answer-5', '=', 'Ja');
        }


}
