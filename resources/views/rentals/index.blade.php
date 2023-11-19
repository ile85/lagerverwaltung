@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <a href="{{ route('rentals.create') }}" class="btn btn-primary mb-3">Neue Miete hinzufügen</a>
                    
                    <!-- Search Container -->
                    <div id="search-container">
                        <!-- Search input will be dynamically inserted here by the DataTables JS -->
                    </div>

                    <!-- DataTables Table -->
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Artikel</th>
                                    <th>Standort</th>
                                    <th class="actions">Aktionen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rentals as $rental)
                                    <tr>
                                        <td>{{ $rental->id }}</td>
                                        <td>{{ $rental->item->name }}</td>
                                        <td>{{ $rental->location ? $rental->location->name : 'N/A' }}</td>
                                        <td class="actions">
                                            <div class="table-actions">
                                                <a href="{{ route('rentals.show', $rental->id) }}" class="btn btn-info">Sicht</a>
                                                <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" class="inline-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger delete-btn">Delete</button>
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
@endsection
