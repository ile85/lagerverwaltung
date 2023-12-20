@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="flash-message">
        {{ session('success') }}
    </div>
@endif
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-12">
 <div class="card">
 <div class="card-header"></div>
 <div class="card-body">
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Neuen Benutzer hinzufügen</a>
    <div id="search-container">
        <!-- Search input will be dynamically inserted here by the DataTables JS -->
    </div>
    <div class="table-responsive">
    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="actions">
                <div class="table-actions">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
 </div>
</div>
@endsection
