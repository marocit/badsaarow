<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
use Carbon\Carbon;

class Registration extends Model
{
     protected $fillable = [
        'name', 'email', 'answer1', 'answer2', 'answer3', 'answer4', 'answer5', 'message'
    ];

     public function answer(){
        return $this->hasMany(Answer::class);
    }

    public function GetDateAttribute($value){
        Carbon::setLocale('de');
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
        return $query->where('answer1', '=', 'Ja');
    }

    public function scopeAnswer2($query){
        return $query->where('answer2', '=', 'Ja');
    }

    public function scopeAnswer3($query){
            return $query->where('answer3', '=', 'Ja');
        }

    public function scopeAnswer4($query){
            return $query->where('answer4', '=', 'Ja');
        }

    public function scopeAnswer5($query){
            return $query->where('answer5', '=', 'Ja');
        }


}
