@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="text-center">Edit Course</h2>
    <div class="container">
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="stream">Stream</label>
                <input type="text" class="form-control @error('stream') is-invalid @enderror" id="stream" name="stream" value="{{ old('stream', $course->stream) }}" required>
                @error('stream')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="subStream">Sub Stream</label>
                <input type="text" class="form-control @error('subStream') is-invalid @enderror" id="subStream" name="subStream" value="{{ old('subStream', $course->subStream) }}">
                @error('subStream')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $course->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="shortName">Short Name</label>
                <input type="text" class="form-control @error('shortName') is-invalid @enderror" id="shortName" name="shortName" value="{{ old('shortName', $course->shortName) }}">
                @error('shortName')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $course->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gpa_limit">GPA Limit</label>
                <input type="number" step="0.01" class="form-control @error('gpa_limit') is-invalid @enderror" id="gpa_limit" name="gpa_limit" value="{{ old('gpa_limit', $course->gpa_limit) }}">
                @error('gpa_limit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration', $course->duration) }}">
                @error('duration')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
