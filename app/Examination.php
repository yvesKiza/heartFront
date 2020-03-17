<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Examination extends Model
{
   private $cp_choice=array("None","Typical Angina","Atypical Angina","Non-Angina", "Asymptomatic");
 private $fasting_blood_sugar_choices=array("> 120 mg/dl","< 120 mg/dl");
private $resting_ecg_choices=array("Normal", "Having ST-T wave abnormality", "hypertrophy");
private $exercise_induced_angina_choices=array("No", "Yes");
private $st_slope_choices=array("Upsloping", "Flat", "Down Sloping");
private $number_of_vessels_choices=array("None","One", "Two", "Three");
private $thallium_scan_results_choices=array("Normal", "Fixed Defect","Reversible Defect");

    protected $fillable = ['age','sex','cp',  'trestbps', 'chol','fbs','restecg','thalach', 'exang',  'oldpeak',  'slope', 'ca', 'thal','prediction','user_id','patient_id'];
    public function patient(){
        return $this->belongsTo('App\Patient','patient_id');
   }
   public function doctor(){
    return $this->belongsTo('App\User','user_id');
} 
   public function getCP(){
       return $this->cp_choice[$this->cp];
   }
   public function getFBS(){
    return $this->fasting_blood_sugar_choices[$this->fbs];
}
public function getrestecg(){
    return $this->resting_ecg_choices[$this->restecg];
}
public function getexang(){
    return $this->exercise_induced_angina_choices[$this->exang];
}
public function getslope(){
    return $this->st_slope_choices[$this->slope];
}
public function getNbrVessels(){
    return $this->number_of_vessels_choices[$this->ca];
}
public function getThal(){
    return $this->thallium_scan_results_choices[$this->thal];
}
public function getSex(){
    if($this->sex==1)
         return "Male";
    else 
        return "Female";
   
}
public function getResult(){
    if($this->prediction==1){
        return "Positive";
    }else
    return "Negative";

}
public function getCorrectPrediction(){
    if($this->doctorAnalysis==1){
        return "Yes";
    }else if($this->doctorAnalysis==0)
    return "No";


}





}
