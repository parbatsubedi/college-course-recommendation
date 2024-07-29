@extends('layouts.college')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <a href="/college/create/course-detail">

            <button class="btn btn-primary">Add Course</button>

            </a>
        </div>
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($courseDetails as $courseDetail)
            <tr>
                <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                <td>{{$courseDetail->course->name}}</td>
                <td>
                    <div style="max-height: 100px; overflow-y: auto;">
                        {{$courseDetail->description}}
                    </div>
                </td>

                <td class="d-flex justify-content-center">
                    <a style="width: 100px" href="/coursedetail/delete/{{$courseDetail->id}}" class="btn btn-danger">DELETE</a> &nbsp;
                    <a style="width: 100px" href="/college/coursedetail/edit/{{$courseDetail->id}}" class="btn btn-success">EDIT</a>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
