<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student_records;


class apiController extends Controller
{
    // 
    public function recordList()
    {
        // return student_records::all(); 
        return response()->json(student_records::get(), 200);
    }
    function recordListId($id){
        $data = student_records::find($id);
        return response()->json($data,200);
    }
    function insertRecord(request $request)
    {
        $data  = student_records::create($request->all());
        return response()->json($data,201);
    }
    function updateRecord(request $request,$id)
    {
        $student_record = student_records::find($id);
        $student_record->studentName = $request->input('studentName');
        $student_record->studentClass = $request->input('studentClass');
        $student_record->rollNumber = $request->input('rollNumber');
        $student_record->update();
        return response()->json($student_record,200);
    }
    function deleteRecord($id)
    {
        $student_record = student_records::find($id);
        $student_record->delete();
        return response()->json($student_record,200);
    }
}
