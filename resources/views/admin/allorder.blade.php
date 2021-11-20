@extends('admin.base')
@section('content')
<h1></h1>
 {{$records}}
 
 <button type="button" class="btn btn-primary">
    Total number of order<span class="badge bg-danger"> {{count($records)}}</span>
  </button>

@endsection