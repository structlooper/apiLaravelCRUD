<?php

namespace App\Http\Controllers;
use App\student_records;
use Illuminate\Http\Request;
// use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



use JWTAuth;
class apiResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // $generatedToken = JWTAuth::getToken();
        // $token = $request->header('token');
        // if ($token == $generatedToken) {
            
        //     return response()->json(['error' => 'You are not authrorised user'],404);
        // }
        return response()->json($this->guard()->student_records::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return response()->json(['message' => 'All values are required,Please Enter all values and try again!!'],449);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = student_records::find($id);
        if (is_null($data)){
            return response()->json(['message' => 'Record not found!! please enter a valid record id'],404);
        }
        return response()->json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student_record = student_records::find($id);
        $student_record->studentName = $request->input('studentName') ?? $student_record->studentName;
        $student_record->studentClass = $request->input('studentClass') ?? $student_record->studentClass;
        $student_record->rollNumber = $request->input('rollNumber') ?? $student_record->rollNumber;
        if($request->all() == $student_record){
            return response()->json(['message' => 'Please enter the value you have to update'],404);
        }
        $student_record->update();
        return response()->json($student_record,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student_record = student_records::find($id);
        if (is_null($student_record)) {
            return response()->json(['message' => 'Entered record not found in data base'],404);
        }
        $student_record->delete();
        return response()->json($student_record,200);
    }
    public function guard()
    {
        return Auth::guard();
    }

}
