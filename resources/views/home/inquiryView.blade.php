@extends('layouts.app')
@section('content')
<head>
<title>Inquiry</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('home/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/courses_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/courses_responsive.css')}}">

<style>
    th{
      font-size: 24px;
      color: black;
    }
</style>
</head>

<div class="super_container">
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($student && $student->inquiries->isNotEmpty())
        <table class="table">
          <thead>
            <tr>
              <th scope="col"><b>ID</b></th>
              <th scope="col"><b>Course Detail</b></th>
              <th scope="col"><b>College Name</b></th>
              <th scope="col"><b>Message</b></th>
              <th scope="col"><b>Inquiry Date</b></th>
              <th scope="col"><b>Action</b></th>
            </tr>
          </thead>
          <tbody>
            @foreach($student->inquiries as $inquiry)
            <tr>
              <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
              <td><a href="/college/detail/course/description/{{$inquiry->courseDetail->id}}">{{ $inquiry->courseDetail->course->name }}</a></td>
              <td><a href="/college/detail/{{$inquiry->courseDetail->college->id}}">{{ $inquiry->courseDetail->college->name }}</a></td>
              <td>{{ $inquiry->message ? $inquiry->message : 'No message yet' }}</td>
              <td>{{$inquiry->inquirydate}}</td>
              <td><a href="/inquiry/delete/{{$inquiry->id}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else
            <p class="text-center" style="font-size: 24px;">No data available.</p>
        @endif
</div>

<script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('home/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('home/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/js/courses_custom.js')}}"></script>

@endsection