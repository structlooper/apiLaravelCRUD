@extends('mainPage')
@section('title')
  Deleting
@endsection
@section('site_content')
<div class="container">
          
  <table class="table">
                    <tbody calss="table">
                        <thead class="text-primary">
                            <th>Primary Id</th>
                            <th>Student Name</th>
                            <th>Student class</th>
                            <th>Student Rollno.</th>
                            <th>Edit</th>
                        </thead>
                    </tbody>
                    @foreach ($student_records as $data)
                        
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->studentName }}</td>
                        <td>{{ $data->studentClass }}</td>
                        <td>{{ $data->rollNumber }}</td>                         
                        <td> 
                          <form method="post" action="/deletion/{{ $data->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" name="" value="Delete"> 
                          </form>                     
                        </td>    
                    </tr>
                    @endforeach
  </table>
</div>
    
@endsection