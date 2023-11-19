@extends('layouts.app')

@section('content')
<h1>Edit Location</h1>

<form action="{{ route('locations.update', $location->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="ort">Ort:</label>
    <input type="text" id="ort" name="ort" value="{{ $location->ort }}">
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse" value="{{ $location->adresse }}">
    <button type="submit">Update</button>
</form>
@endsection
