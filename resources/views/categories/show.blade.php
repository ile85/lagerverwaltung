@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kategoriedetails</h1>
    <div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $category->name }}</td>
            </tr>
        </tbody>
    </table>
    </div>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
</div>
@endsection
