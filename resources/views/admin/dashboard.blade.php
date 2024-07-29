@extends('layouts.admin ')
@section('content')
<style>
  /* <link rel="stylesheet" href="{{ asset('dashboard/css/main.min.css') }}" /> */
</style>
<div class="dashboard">
        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
         @endif
    <div class="content-wrapper">
        <div class="hero-body">
            <div class="row g-3 mb-3">
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/course/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/book.png') }}"  style="width: 100px; height:100px;" class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of Course</h5>
                        <p>{{ $coursecount }}</p>
                    </a>
                </div>
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/college/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/college.png') }}"  style="width: 100px; height:100px;"  class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of College</h5>
                        <p>{{ $collegecount }}</p>
                    </a>
                </div>
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/student/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/student.png') }}"  style="width: 100px; height:100px;" class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of Student</h5>
                        <p>{{ $studentscount }}</p>
                    </a>
                </div>
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/course-detail/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/coursedetail.png') }}"  style="width: 100px; height:100px;"  class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of CourseDetail</h5>
                        <p>{{ $coursedetailcount }}</p>
                    </a>
                </div>
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/contact/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/message.png') }}"  style="width: 100px; height:100px;" class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of Contact</h5>
                        <p>{{ $contactcount }}</p>
                    </a>
                </div>
                <div class="col-xxl-2 col-lg-3 col-sm-4 col-12">
                    <a href="/admin/inquiry/show" class="tile-link d-flex align-items-center flex-column text-center rounded-2" style="width: 100%; color: black; text-decoration:none;">
                        <img src="{{ asset('dashboard/images/inquiry.png') }}"  style="width: 100px; height:100px;" class="img-3x m-auto mb-4" alt="Admin Dashboards" />
                        <h5>No.of inquiry</h5>
                        <p>{{ $inquirycount }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
