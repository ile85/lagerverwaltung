@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary text-white">Add New Rental</div>
        <div class="card-body bg-light">
            <form action="{{ route('rentals.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item:</label>
                    <select name="item_id" id="item_id" class="form-select">
                        @foreach($items as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label">Location:</label>
                    <select name="location_id" id="location_id" class="form-select">
                        @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="student_email" class="form-label">Student Email:</label>
                    <input type="email" class="form-control" name="student_email" id="student_email" value="{{ old('student_email') }}" required>
                </div>
                <div class="mb-3">
                    <label for="student_name" class="form-label">Student Name:</label>
                    <input type="text" class="form-control" name="student_name" id="student_name" value="{{ old('student_name') }}" required>
                </div>
                <button type="submit" class="btn btn-secondary">Add Rental</button>
            </form>
        </div>
    </div>
</div>
@endsection
