@extends('layouts.admin')
@section('content')

<div class="container">
    <h2 class="text-center">Contact</h2>
    <div class="container">
    <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
            @foreach($contacts as $contact)
            <tr>
                <td scope="row"><b>{{ $loop->index + 1 }}</b></td>
                <td>
                    <a href="mailto:{{$contact->email}}" target="_blank">
                        {{$contact->email}}
                    </a>
                </td>
                <td>
                    <div style="max-height: 200px; overflow-y: auto;">
                        {{$contact->message}}
                    </div>
                </td>
                <td>{{$contact->status}}</td>
                <td style="d-flex justify-content-center">
                    <a style="width: 100px;" href="/contact/delete/{{$contact->id}}" class="btn btn-danger">DELETE</a>
                    @if ($contact->status == 'pending')
                        <a style="width: 100px;" href="/contact/update-status/{{$contact->id}}" class="btn btn-success">READ</a>
                    @endif
                </td>

            </tr>
            @endforeach
        </table>
    </div>
    </div>
</div>

@endsection
