@extends('layouts.app')

@section('content')


<h1 class="text-center text-inf">Display Files Page</h1>
<div class="container col-md-6">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
                <tr>
                    <th>ID </th>
                    <th>Title</th>
                    <th colspan="3">Action</th>
                </tr>
                
                @foreach ($drives as $data)
                 
                <tr>
                    <th>{{$data->id}}</th>
                    <th>{{$data->title}}</th>
                    <th> <a href="{{ route('drives.show',$data->id)}}" ><i class="fas fa-eye"></i> </a> </th>
                    <th> <a href="{{ route('drives.edit', $data->id)}} "> <i class="fas fa-edit"></i></a> </th>
                    <th> <a href="{{ route('drives.destroy', $data->id)}} "> <i class="fas text-danger  fa-trash-alt"></i></a> </th>
                   
                </tr>
                @endforeach
                
            </table>
        </div>
    </div>
</div>



@endsection