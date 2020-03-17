<?php

namespace App\classes;

use Carbon\Carbon;
 
class checkDateHelper{
    public static function check($year,$month,$day){
        $dob=Carbon::createFromDate($year, $month, $day);
        if($dob>Carbon::now()||!checkdate($month, $day,$year)){
             throw new \Exception('invalid date of birth');
        }
        else
        return $dob;
    }
    
}