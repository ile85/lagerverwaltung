@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kategorie bearbeiten</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Kategoriename</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Kategorie aktualisieren</button>
    </form>
</div>
@endsection
