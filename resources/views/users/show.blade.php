@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ $user->email }}</p>
            <!-- Display other user details -->
        </div>
    </div>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning mt-3">Edit</a>
</div>
@endsection
