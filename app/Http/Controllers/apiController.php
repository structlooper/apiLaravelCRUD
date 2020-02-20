<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student_records;


class apiController extends Controller
{
    // 
    public function recordList()
    {
        return response()->json(student_records::get(), 200);
    }
    function recordListId($id){
        $data = student_records::find($id);
        if (is_null($data)){
            return response()->json('Record not found!! please enter a valid record id',404);
        }
        return response()->json($data,200);
    }
    function insertRecord(request $request)
    {
        if ($request->input('studentName') and $request->input('studentClass') and $request->input('rollNumber')) {
            
            $data  = new student_records;
            $data->studentName = $request->input('studentName');
            $data->studentClass = $request->input('studentClass');
            $data->rollNumber = $request->input('rollNumber');
            $data->save();
            
            return response()->json($data,201);
        }
        else {
            return response()->json("All values are required,Please Enter all values and try again!!",449);
        }
    }
    function updateRecord(request $request,$id)
    {
        $student_record = student_records::find($id);
        $student_record->studentName = $request->input('studentName') ?? $student_record->studentName;
        $student_record->studentClass = $request->input('studentClass') ?? $student_record->studentClass;
        $student_record->rollNumber = $request->input('rollNumber') ?? $student_record->rollNumber;
        if($request->all() == $student_record){
            return response()->json('Please enter the value you have to update');
        }
        $student_record->update();
        return response()->json($student_record,200);
    }
    function deleteRecord($id)
    {
        $student_record = student_records::find($id);
        if (is_null($student_record)) {
            return response()->json('Entered record not found in data base',404);
        }
        $student_record->delete();
        return response()->json($student_record,200);
    }
}
