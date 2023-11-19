@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
