<?php

namespace App\Http\Controllers\backend\routine;

use App\Http\Controllers\Controller;
use App\Models\academic_module\AllClass;
use App\Models\academic_module\AllShift;
use App\Models\academic_module\AllSection;
use App\Models\academic_module\All_subject;
use App\Models\academic_module\Routine;
use App\Models\academic_module\mediumacademic;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
   public function index()
   {   $allcalsses = AllClass::all();
       $allMedium = mediumacademic::all();
       $allShift = AllShift::all();
       $AllSection = AllSection::all();
       $All_subject = All_subject::all();
       return view('backend.routine.index',[
        'allcalsses' => $allcalsses,
        'allMedium'  => $allMedium,
        'allShift'  => $allShift,
        'AllSection'  => $AllSection,
        'All_subject'  => $All_subject,

       ]);
   }

    protected $rules = [
        'medium' => ['required'],
        'class' => ['required'],
        'shift' => ['required'],
        'section' => ['required'],
        'days' => ['required'],
        's_time' => ['required'],
        'e_time' => ['required'],
        'a' => ['required'],
        'subject' => ['required'],
        'teacher' => ['required'],
         'status' => ['required'],
    ];


   public function add_routine(Request $request){
    $this->validate($request, $this->rules);
        Routine::insert([
             'medium_id' => $request->medium,
             'class_id' => $request->class,
             'shift_id' => $request->shift,
             'section_id' => $request->section,
             'subject_id' => $request->subject,
             'teacher_id' => $request->teacher,
             'routine_day' => $request->days,
             's_time' => $request->s_time,
             'e_time' => $request->e_time,
             'brack_time' => $request->a,
             'status' => $request->status,
             'created_at' => Carbon::now(),
        ]);
         return back()->with('success', 'Added Successfully!');
   }


   public function dynamic()
   {
    $allcalsses = AllClass::all();
       $allMedium = mediumacademic::all();
       $allShift = AllShift::all();
       $AllSection = AllSection::all();
       $All_subject = All_subject::all();
       return view('backend.routine.dynamic',[
         'allcalsses' => $allcalsses,
        'allMedium'  => $allMedium,
        'allShift'  => $allShift,
        'AllSection'  => $AllSection,
        'All_subject'  => $All_subject
       ]);
   }



     protected $wer = [
        'medium' => ['required'],
        'class' => ['required'],
        'shift' => ['required'],
        'section' => ['required'],
     ];

   public function printindex()
   {
    $allcalsses = AllClass::all();
       $allMedium = mediumacademic::all();
       $allShift = AllShift::all();
       $AllSection = AllSection::all();
       $All_subject = All_subject::all();
       return view('backend.routine.print',[
         'allcalsses' => $allcalsses,
        'allMedium'  => $allMedium,
        'allShift'  => $allShift,
        'AllSection'  => $AllSection,
        'All_subject'  => $All_subject
       ]);
   }
   public function View_routine(Request $request){
     $this->validate($request, $this->wer);
       $medium = $request->medium;
       $class = $request->class;
       $shift = $request->shift;
       $section = $request->section;
       $findRoutine =  Routine::where('medium_id', $medium)
        ->where('class_id', $class)
        ->where('shift_id', $shift)
        ->where('section_id', $section)
        ->get();
       if ($findRoutine->isEmpty()) {
            return back()->with('Error', 'NOt Find!');
        } else {
            return view('backend.routine.result',[
                'findRoutine' => $findRoutine,
            ]);
        }
    }
    public function list(){
        $all_routine = Routine::all();
        return view('backend.routine.list',[
            'all_routine' => $all_routine,
        ]);
    }

    public function delete(Request $request){
        Routine::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);
    }       
}
