@extends('layouts.app')

@section('content')
<div class="container">
    <h1></h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Neue Kategorie hinzufügen</a>
    <div id="search-container">
        <!--  search input -->
   </div>
    <div class="table-responsive">
    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="actions">
                <div class="table-actions">
                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection
