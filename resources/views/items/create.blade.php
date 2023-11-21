@extends('layouts.app')

@section('content')
<h1 class="items-heading">Artikel hinzufügen</h1>

<form action="{{ route('items.store') }}" method="POST" id="form-add-item">
    @csrf
    <div class="form-group">
        <label for="item-name">Artikel Name:</label>
        <input type="text" id="item-name" name="name" class="form-input">
    </div>
    
    <div class="form-group">
        <label for="item-category">Kategorie:</label>
        <select id="item-category" name="category_id" class="form-input">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-submit">Hinzufügen</button>
</form>
@endsection
