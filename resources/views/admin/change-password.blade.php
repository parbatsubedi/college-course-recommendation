@extends('layouts.admin')
@section('content')
<div class="home">
    <div class="container mt-5">
        <h2 class="text-center">Password Change Form</h2>
        <form method="POST" action="{{ route('admin.updatePassword') }}">
            @csrf
            <div class="form-group">
                <label for="newPassword">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Enter new password">
                @error('newPassword')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <br/>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm new password">
                @error('confirmPassword')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>
@endsection
