<?php

namespace App\Models\student_module;
use App\Models\academic_module\AllClass;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    use HasFactory;
    protected $guarded =[];
<<<<<<< HEAD

=======
<<<<<<< HEAD


    public function studentInfo(){
        return $this->hasOne(StudentPersonalInfo::class,'StudentInfo_id','id');
    }

    public function roll($id){

        $roll =  $this->where('student_id', $id)->select('roll_number')->get();
        if(!empty($roll[0]->roll_number)){
            return $roll[0]->roll_number;
        }
        else{
            return "roll not found";
        }
    }
    public function className($id){

        $class =  $this->where('student_id', $id)->select('class_name')->get();
        if(!empty($class[0]->class_name)){
            return $class[0]->class_name;
        }
        else{
            return "class not found";
        }
    }




=======
<<<<<<< HEAD
>>>>>>> d142817edce55d75efdf5d73c9138c25c2501550
    public function getClassName($id){
        $class_name =  AllClass::where('class_code', $id)->select('class_name')->get();
        if(!empty($class_name[0]->class_name)){
            return $class_name[0]->class_name;
        }
        else{
            return "Class not found";
        }
    }
<<<<<<< HEAD



=======
=======
    
>>>>>>> f643acda3fe6c00af562d718277bfe8d04760b30
>>>>>>> aa4c10f955d1ae31da86158fcaf40e9753a471c3
>>>>>>> d142817edce55d75efdf5d73c9138c25c2501550
}
