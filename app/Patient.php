<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function examination(){
        return $this->hasMany('App\Examination','patient_id');
    }
    protected $dates = [
        'DOB',
    ];
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getSurnameAttribute($value)
    {
        return ucfirst($value);
    }
    public function getFullNameAttribute()
{
    return "{$this->first_name} {$this->surname}";
}
public function getSex(){
    if($this->gender==1)
         return "Male";
    else 
        return "Female";
   
}
}
