@extends('layouts.admin')
@section('content')
<div class="container">
    <h2 class="text-center">Inquiry</h2>
    <!-- <div class="container"> -->
        <!-- create button here-->
        <!-- <a href="/college/show"><button type="button" class="btn btn-success">+ Create</button></a> -->
    <!-- </div> -->
    <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>CourseDetail</th>
                <th>Message</th>
            </tr>
            @foreach($inquiry as $inquiry)
            <tr>
                <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                <td>
                <a href="/admin/student/detail/{{$inquiry->student->id}}">
                      {{$inquiry->student->name}}
                </a>
                </td>
                <td>{{$inquiry->courseDetail->course->name}}</td>
                <td>{{$inquiry->message}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
