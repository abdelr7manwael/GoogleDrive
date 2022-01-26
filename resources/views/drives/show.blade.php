@extends('layouts.app')

@section('content')

<h1 class="text-center text-inf"> File: {{$drive->title}}</h1>
<div class="container col-md-6">
    <div class="card">
        
           <img src="{{ asset("upload/$drive->file") }}"  alt="" class="img-top">
         <div class="card-body">
            <h5>Drive Name: {{$drive->file}}</h5>
            <h6>Drive description: {{$drive->description}}</h6>

            <a href="{{route('drives.download',$drive->id)}}" class="btn btn-success btn-block mt-4">Download File</a>
        </div>
    </div>
</div>




@endsection