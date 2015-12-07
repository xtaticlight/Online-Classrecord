<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
abstract class UsersController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    
    protected $layout = "master";
    function getUserData($username) {
        $query = DB::table('users')->where('username', '=', $username)->first();
        $resultArray = json_decode(json_encode($query), true);
        // dd($resultArray);
        //$userData = User::where('username', '=', $username)->first();
        return $resultArray;
    }
 
    function getCourse($users_id) {
        $query = DB::table('courses')->where('users_id', '=', $users_id)->get();
        $resultArray = json_decode(json_encode($query), true);
        //  dd($resultArray);
        return $resultArray;
    }

    function getSubject($schoolYear, $semester, $id) {
        $query = DB::table('courses')->where('users_id', $id)
                ->where('schoolYear', $schoolYear)
                ->where('semester', $semester)
                ->get();
        $resultArray = json_decode(json_encode($query), true);
     // dd($resultArray);
        foreach ($resultArray as $course) {
            $query = DB::table('subjects')
                    ->where('users_id', $course['users_id'])
                    ->where('courses_id', $course['id'])
                    ->get();
            $subjectData1[] = json_decode(json_encode($query), true);
        }
        $subjectData2 = array_column($subjectData1, 0); 
   //  dd($subjectData2);

           foreach ($subjectData2 as $course) {
            $query = DB::table('subjects')
                    ->join('classes', 'subjects.id', '=', 'classes.subjects_id')
                    ->join('courses', 'subjects.courses_id', '=', 'courses.id')
                    ->select('subjects.*','classes.*','courses.schoolYear','courses.semester')
                    ->where('classes.users_id', $course['users_id'])
                    ->where('classes.subjects_id', $course['id'])
                    ->get();
            $subjectDatalist[] = json_decode(json_encode($query), true);
            $subjectData = $subjectDatalist;
            }
           $subjectData = array_column($subjectData, 0); 
       //  dd($subjectData);
            return $subjectData;
    }
    function  getStudentData($subject_id){
        $query = DB::table('students')->where('classes_id',$subject_id)->get();
        $studentlist = json_decode(json_encode($query), true);
        return  $studentlist;
        
        
    }
}