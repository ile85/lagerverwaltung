@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Neuen Standort hinzufügen</h1>
    <form action="{{ route('locations.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="ort" class="form-label">Ort:</label>
            <input type="text" class="form-control" id="ort" name="ort" required>
        </div>
        <div class="form-group mb-3">
            <label for="adresse" class="form-label">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" required>
        </div>
        <button type="submit" class="btn btn-primary">Hinzufügen</button>
    </form>
</div>
@endsection
