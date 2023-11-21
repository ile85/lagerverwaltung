@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Neue Kategorie hinzufügen</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Kategoriename</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Kategorie hinzufügen</button>
    </form>
</div>
@endsection
