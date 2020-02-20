<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student_records;

class CRUDController extends Controller
{
    public function index(){
      return view("mainPage");
    }
    public function insert(){
      return view("insertPage");
    }
	function insertion(request $request)
    {
    	// return $request;
    	$student_record = new student_records();

        $student_record->studentName = $request->Input('studentName');
        $student_record->studentClass = $request->Input('studentClass');
        $student_record->rollNumber = $request->Input('rollNumber');
        $student_record->save();
        return redirect('/view')->with('status', 'Data saved successfully.');
	}




    public function view(){
    	$student_records = student_records::all();
      return view("viewPage")->with('student_records', $student_records);
    }
   
    function updation(request $request,$id){
    	$data = student_records::find($id);
    	return view('updationPage')->with('data',$data);

    }
    function updating(request $request,$id )
    {
    	$student_record = student_records::find($id);
        $student_record->studentName = $request->input('studentName');
        $student_record->studentClass = $request->input('studentClass');
        $student_record->rollNumber = $request->input('rollNumber');
        $student_record->update();
        return  redirect('/view')->with('status', 'record updated successfuly');
    }

    public function delete(){
    		$student_records = student_records::all();
      return view("deletePage")->with('student_records', $student_records);    
  	}
  	function deletion(request $request,$id)
  	{
  		$student_records = student_records::find($id);
  		echo "Record deleted successfully.<br/>";
  		$student_records->delete();
    	return redirect('/view')->with('status',"record deleted successfuly");
  	}


}
