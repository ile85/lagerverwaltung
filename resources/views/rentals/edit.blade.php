@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vermietung bearbeiten</div>

                <div class="card-body">
                    <form action="{{ route('rentals.update', $rental->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="item_id">Article:</label>
                            <select name="item_id" id="item_id" class="form-control">
                                @foreach($items as $item)
                                <option value="{{ $item->id }}" {{ $rental->item_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location_id">Standort:</label>
                            <select name="location_id" id="location_id" class="form-control">
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}" {{ $rental->location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
    <label for="student_email">Schuler Email:</label>
    <input type="email" class="form-control" name="student_email" id="student_email" value="{{ old('student_email', $rental->student_email) }}" required>
</div>

<div class="form-group">
    <label for="student_name">Schuler Name:</label>
    <input type="text" class="form-control" name="student_name" id="student_name" value="{{ old('student_name', $rental->student_name) }}" required>
</div>
                        <button type="submit" class="btn btn-primary">Vermietung aktualisieren</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
