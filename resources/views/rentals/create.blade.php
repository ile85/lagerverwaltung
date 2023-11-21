@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary text-white">Neue Miete hinzufügen</div>
        <div class="card-body bg-light">
            <form action="{{ route('rentals.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="item_id" class="form-label">Artikel:</label>
                    <select name="item_id" id="item_id" class="form-select">
                        @foreach($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label">Standort:</label>
                    <select name="location_id" id="location_id" class="form-select">
                        @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->ort }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="user_id" class="form-label">Benutzer:</label>
                    <select name="user_id" id="user_id" class="form-select">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="student_email" class="form-label">Schüler Email:</label>
                    <input type="email" class="form-control" name="student_email" id="student_email" value="{{ old('student_email') }}" required>
                </div>
                <button type="submit" class="btn btn-secondary">Miete hinzufügen</button>
            </form>
        </div>
    </div>
</div>
@endsection
