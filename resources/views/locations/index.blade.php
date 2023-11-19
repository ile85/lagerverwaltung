@extends('layouts.app')

@section('content')
<div class="container">
    <h1></h1>
    <a href="{{ route('locations.create') }}" class="btn btn-success mb-3">Neuen Standort hinzufügen</a>
    <div class="table-responsive">
        <table class="table" id="locations-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ort</th>
                    <th>Adresse</th>
                    <th class="actions">Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($locations as $location)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $location->ort }}</td>
                        <td>{{ $location->adresse }}</td>
                        <td class="actions">
                            <a href="{{ route('locations.show', $location->id) }}" class="btn btn-info">Sicht</a>
                            <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('locations.destroy', $location->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
