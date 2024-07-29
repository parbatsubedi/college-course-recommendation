@extends('layouts.admin')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseDetailshow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
<div class="container">
 <div class="text-center"><h2>Course Detail</h2></div>
    <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>S.N.</th>
                <th>Course Name</th>
                <th>College Name</th>
                <th>Description</th>
            </tr>
            @foreach($courseDetails as $courseDetail)
            <tr>
                <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                <td>{{$courseDetail->course->name}}</td>
                <td>{{$courseDetail->college->name}}</td>
                <td>
                    <div style="max-height: 200px; overflow-y: auto;">
                        {{$courseDetail->description}}
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
