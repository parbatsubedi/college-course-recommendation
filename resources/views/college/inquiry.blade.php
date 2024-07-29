@extends('layouts.college')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inquiry Form</title>
</head>
<div class="container">
    <div class="container">
    	      @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
             @endif
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>Student Id</th>
                <th>Message</th>
                <th>Inquiry Date</th>
                <th>Action</th>
            </tr>
            @forelse($inquiries as $inquiry)
                <tr>
                    <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                    <td>{{$inquiry->student->name}}</td>
                    <td>{{$inquiry->message}}</td>
                    <td>{{$inquiry->inquirydate}}</td>
                     <td class="d-flex justify-content-center">
                        <a style="width:100px" href="/inquiry/delete/{{$inquiry->id}}" class="btn btn-danger">DELETE</a>&nbsp;
                        <a  style="width:100px" href="/college/inquiry/edit/{{$inquiry->id}}" class="btn btn-success">UPDATE</a>
                   </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No inquiries found for this college.</td>
                </tr>
            @endforelse
        </table>
    </div>
</div>

@endsection
