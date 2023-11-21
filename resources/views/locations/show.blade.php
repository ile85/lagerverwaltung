@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-5 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-3">{{ $location->ort }}</h1>
        <p class="mb-6 text-gray-700">Adresse: {{ $location->adresse }}</p>

        <h2 class="text-xl font-semibold mb-4">Artikel an diesem Standort</h2>
        @if ($location->items && $location->items->count() > 0)
            <div class="overflow-x-auto">
                <table class="table-auto w-full mb-6">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Details</th>
                            <!-- Add other item attributes here -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($location->items as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">{{ $item->id }}</td>
                                <td class="border px-4 py-2">{{ $item->name }}</td>
                                <td class="border px-4 py-2">{{ $item->details }}</td>
                                <!-- Display other item attributes here -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-gray-600">An diesem Standort wurden keine Artikel gefunden.</p>
        @endif

        <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary">Standort bearbeiten</a>
    </div>
</div>
@endsection
