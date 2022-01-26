@extends('layouts.app')

@section('content')

<h1 class="text-center text-inf"> File: {{$drive->id}}</h1>
@if ($errors->any())
    <div class="alert alert-danger mx-auto w-50">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <form action="{{route('drives.update',$drive->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                   <div class="form-group">
                       <label for="">Drive Title</label>
                       <input value="{{$drive->title}}" type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Drive description</label>
                        <input value="{{$drive->description}}" type="text" name="description" class="form-control">
                     </div>
                     <div class="form-group mb-4">
                        <label for="">File Name: {{$drive->file}}</label>
                        <input type="file" name="inputFile" class="d-block">
                     </div>
                     <button class="btn btn-info">Send data</button>
               </form>
            </div>
        </div>
    </div>
</div>




@endsection