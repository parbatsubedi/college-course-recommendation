
@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 200px">
    <h1 class="text-center">Recommendation</h1>
    <div class="row course_boxes">
        @if(count($topRecommendedCourses) > 0)
            @foreach($topRecommendedCourses as $course)
                <div class="col-lg-4 course_box" style="margin: 10px 0px;">
                    <div class="card" style="border: 1px solid black; border-radius: 5px; height: 235px;">
                        <br/>
                        <div class="card-body text-center">
                            <div class="card-title"><h3 style="color: black; font-weight: bold;">{{$course['name']}}</h3></div>
                        </div>
                        <br/>
                        <div class="d-flex justify-content-center">
                        <a href="/view/course/description/{{ $course['course_id'] }}">
                            <button class="btn btn-primary">View</button>
                        </a>

                        </div>
                        <br/>
                    </div>
                </div>
            @endforeach
        @else
            No data here
        @endif
    </div>
	</div>
@endsection
