@extends('layouts.admin')
@section('content')
<div class="container">
<h2 class="text-center">Student Details</h2>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
     @endif
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Action</th>

            </tr>
            @foreach($student as $student)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->contact}}</td>

                <td class="d-flex justify-content-center">
                    <a style="width: 100px;" href="/admin/student/detail/{{$student->id}}" class="btn btn-primary">View</a>&nbsp;
                    <a style="width: 100px;" href="/student/delete/{{$student->id}}" class="btn btn-danger">DELETE</a>
                 </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
