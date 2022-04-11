@extends('students.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Add New Student</h2>
    </div>
    <div class="pull-right">
                <a class="btn btn-primary mb-3 mt-2" href="{{ route('students.index') }}">Back</a>
            </div>
        </div>
    </div>

@if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
  <strong> Whoops!</strong> Ada permasalahan dalam Inputan<br><br>
  <ul?>
    @foreach ($errors->all() as $error)
    <li> {{  $error }} </li>
    @endforeach
</ul>
</div>

@endif
<form action="{{ route('students.store') }}" method="POST">
@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <strong> StudentName:</strong>
    <input type="text" name="studname" class="form-control" placeholder="studname">
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <strong> Course:</strong>
    <input type="text" name="course" class="form-control" placeholder="course">
</div>
<div class="col-xs-11 col-sm-12 col-md-12">
    <strong>Fee</strong>
    <input type="text" name="fee" class="form-control" placeholder="fee">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>

</div>
</div>
</form>
@endsection