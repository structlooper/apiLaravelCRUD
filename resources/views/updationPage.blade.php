@extends('mainPage')
@section('title')
  Update Record
@endsection
@section('site_content')
<div class="container">
  <form method="POST" action="/upadting/{{$data->id}}">
    @csrf
    @method('PUT')
        <div class="container ml-4">
          Student Name : <input class="ml-2 mt-2" type="text" name="studentName" value="{{$data->studentName}}"><br>
          Student Class :  <input class="ml-3 mt-2" type="text" name="studentClass" value="{{$data->studentClass}}"><br>
          Student Rollno. :<input class="ml-2 mt-2" type="text" name="rollNumber" value="{{$data->rollNumber}}"><br>
          <input class=" my-2 btn-lg btn-warning" type="submit" value="Update" >
    </form>
</div>
    
@endsection