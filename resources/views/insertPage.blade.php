@extends('mainPage')
@section('title')
  Insert Record
@endsection
@section('site_content')
<div class="container">
  <form method="POST" action="/insertion">
    @csrf
      <div class="container ml-4">
        Student Name : <input required class="ml-2 mt-2" type="text" name="studentName"><br>
        Student Class :  <input required class="ml-3 mt-2" type="text" name="studentClass"><br>
        Student Rollno. :<input required class="ml-2 mt-2" type="text" name="rollNumber"><br>
        <input class="my-2 btn-lg btn-primary" type="submit" >
  </form>
</div>
    
@endsection