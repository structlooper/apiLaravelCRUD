@extends('layouts.header')


@section('body')
<title>@yield('title')</title>
<div class="border mt-2">
    <h1 class="display-4">Welcome to this testing Web for CRUD</h1>
    <a href="/mainPage" class="btn btn-lg btn-success ml-2">Home</a>
    <hr>
        <div class="container">
              @if (session('status'))
        <div class="alert alert-success" role="alert">
              {{session('status')}}
        </div>
    @endif

    <a href="/insertRecord" class="btn btn-primary my-2" >Insert Record</a><br>
    <a href="/view" class="btn btn-primary my-2" >View Records</a><br>
  </div>
  <div class="body">
    @yield('site_content')
  </div>
@endsection
   