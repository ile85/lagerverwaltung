@extends('layouts.app')

@section('content')
<h1 class="items-heading">{{ $item->name }}</h1>

<div class="item-details">
    <p>Category: {{ $item->category->name }}</p>
    <!-- Add more item details as needed -->
</div>
<a href="{{ route('items.edit', $item->id) }}" class="btn btn-edit">Edit</a>
@endsection
