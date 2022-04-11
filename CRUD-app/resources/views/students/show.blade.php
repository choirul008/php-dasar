@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Student SHOW</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $student->name }}</h5>
        <p class="card-text">Course : {{ $student->course }}</p>
        <p class="card-text">fee : {{ $student->fee }}</p>
  </div>
      
    </hr>
  
  </div>
</div>