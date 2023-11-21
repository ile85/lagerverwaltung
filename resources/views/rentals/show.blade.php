@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mietdetails</div>

                <div class="card-body">
                    <p><strong>Item:</strong> {{ $rental->item->name }}</p>
                    <p><strong>Location:</strong> {{ $rental->location->name }}</p>
                    <!-- Display other necessary details -->

                    <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-warning">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
