<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
abstract class UsersController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    
     function  getStudentData($subject_id){
        $query = DB::table('students')->where('load_id',$subject_id)->get();
        $studentlist = json_decode(json_encode($query), true);
        
        return  $studentlist;
    }
    
    function getActivitiesData($subject_id,$term) {
        $query = DB::table('students')->join('records','records.students_id','=','students.id')->where('records.term',$term)->get();//->join('activities', 'activities.records_id','=','records.id')->select('records.students_id','records.term','records.exam_score','records.exam_total','records.exam_grade','records.term_grade','records.remarks','students.sname','activities.*')->get();
        $records = json_decode(json_encode($query), true);
        //dd($records);
        foreach ($records as $records) {
                $query = DB::table('activities')->join('records', 'activities.records_id','=','records.id')->join('students', 'students.id','=','records.students_id')->select('records.students_id','records.term','records.exam_score','records.exam_total','records.exam_grade','records.term_grade','records.remarks','students.sname','activities.*')->where('records.id',$records['id'])->get();
                $activitylist[][] = json_decode(json_encode($query), true);
                $activities = array_column($activitylist, 0);
            }
            //dd($activities);
            
        return  $activities;
    }
    
    function getRecordsData($studentlist,$term) {
        
        foreach ($studentlist as $data) {
            $query = DB::table('records')->where('students_id',$data['id'])->where('term',$term)->get();
            $recordslist[] = json_decode(json_encode($query), true);
            $records = array_column($recordslist, 0);
            
        }
        //dd($records);
        return $records;
    }
    
    function getRData($subject_id,$term) {
        $studentlist = $this->getStudentData($subject_id);
        
        foreach ($studentlist as $data) {
            $query = DB::table('records')->where('students_id',$data['id'])->where('term',$term)->get();
            $recordslist[] = json_decode(json_encode($query), true);
            $records = array_column($recordslist, 0);
            
        }
        //dd($records);
        foreach ($records as $records) {
                $query = DB::table('activities')->join('records', 'records.id', '=', 'activities.records_id')->join('students', 'students.id', '=', 'records.students_id')->select('activities.*', 'students.id', 'students.students_name')->where('records_id',$records['id'])->get();
                $activitylist[][] = json_decode(json_encode($query), true);
                $activities = array_column($activitylist, 0);
            }
            //dd($activities);
        return  $activities;
    }
    
    function getActivitiesList($subject_id) {
        $students_list = getStudentData($subject_id);
        $query = DB::table('activities')->where('records_id',$subject_id)->get();
        $studentlist = json_decode(json_encode($query), true);
        return  $activities;
    }
    
    function generateSubject($schoolYear, $semester, $id) {
        $query = \DB::table('load')->where('school_year_sy', $schoolYear)->get();
        $resultArray = json_decode(json_encode($query), true);
        return $resultArray;
    }
    
    
}