@extends('layouts.app')
@section('content')
<div class="container">
    @if (!empty($courseDetails) && count($courseDetails) > 0)
        <!-- Display course details when there are records -->
        <div class="row course_boxes">
            @foreach ($courseDetails as $detail)

				<div class="col-lg-4 course_box">
                    <div class="card" style="height:320px; border: 1px solid black; border-radius:5px;">
                        <div class="card-body text-center">
                        <img src="{{ asset('storage/' . $detail->college->logo) }}" alt="College Logo" style="object-fit: contain; height: 100px; width:100px; margin-top: 10px; border: 2px solid black;">
                            <div class="card-title"><a href="courses.html">{{$detail->college->name}}</a></div>
                            <div class="card-text">{{$detail->college->address}}</div>
                        </div>
                        <br/>
                        <div class="d-flex justify-content-center">
                            <a href="/college/detail/course/description/{{$detail->id}}">
                                <button class="btn btn-primary">View</button>
                            </a>
                        </div>
                        <br/>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        <!-- Display a "No data" message when there are no records -->
        <p>No data available.</p>
    @endif
</div>
@endsection
