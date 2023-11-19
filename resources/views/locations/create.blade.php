@extends('layouts.app')

@section('content')
<h1>Add New Location</h1>

<form action="{{ route('locations.store') }}" method="POST">
    @csrf
    <label for="ort">Ort:</label>
    <input type="text" id="ort" name="ort">
    <label for="adresse">Adresse:</label>
    <input type="text" id="adresse" name="adresse">

    <button type="submit">Add</button>
</form>
@endsection
