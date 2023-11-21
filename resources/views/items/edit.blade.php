@extends('layouts.app')

@section('content')
<h1 class="items-heading">Artikel bearbeiten</h1>

<form action="{{ route('items.update', $item->id) }}" method="POST" id="form-edit-item">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="item-name">Artikelname:</label>
        <input type="text" id="item-name" name="name" value="{{ $item->name }}" class="form-input">
    </div>

    <div class="form-group">
        <label for="item-category">Kategorie:</label>
        <select id="item-category" name="category_id" class="form-input">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($category->id == $item->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-submit">Aktualisieren</button>
</form>
@endsection
