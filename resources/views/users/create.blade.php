@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="flash-message1">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mt-3">
<div class="card">
<div class="card-header bg-primary text-white">Neuen Benutzer erstellen</div>
<div class="card-body bg-light">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Senden</button>
    </form>
</div>
</div>
</div>
</div>
@endsection
