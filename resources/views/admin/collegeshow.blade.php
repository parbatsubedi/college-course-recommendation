@extends('layouts.admin')
@section('content')
<div class="container">
<h2 class="text-center">College Details</h2>
   @if(session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
    @endif
    <div class="container">
    <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
            </tr>
            @foreach($college as $college)
            <tr>
                <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                <td>{{$college->name}}</td>
                <td>{{$college->email}}</td>
                <td>{{$college->address}}</td>
                <td>{{$college->contact}}</td>
                <td class="d-flex justify-content-center">
                    <a style="width: 100px;" href="/admin/college/detail/{{$college->id}}"><button class="btn btn-primary">View</button></a>
                    <a style="width: 100px;" href="/college/delete/{{$college->id}}"><button class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
