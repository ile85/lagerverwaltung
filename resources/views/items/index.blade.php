@extends('layouts.app')

@section('content')
<h1 class="items-heading"></h1>

<a href="{{ route('items.create') }}" class="btn btn-add">Neuen Artikel hinzufügen</a>
<div id="search-container">

   </div>
   <div class="table-responsive">
        <!-- DataTables Table -->
    </div>
<div class="table-responsive">
<table class="data-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Kategorie</th>
            <th class="actions">Aktionen</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr id="item-{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category->name }}</td>
            <td class="actions">
    <div class="table-actions">
        <!-- Assume you have routes for viewing, editing, and deleting items -->
        <a href="{{ route('items.show', $item->id) }}" class="btn btn-info">Sicht</a>
        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline-form">
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
@endsection
