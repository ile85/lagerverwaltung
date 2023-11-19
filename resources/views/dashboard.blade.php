@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 text-center">
  <h1 class="text-2xl font-bold mb-4">Dashboard</h1>

  {{-- Quick access links --}}
  <div class="flex justify-center gap-4 mb-4">
    <a href="{{ route('locations.index') }}" class="p-2 bg-blue-500 text-white rounded shadow hover:bg-blue-700 transition-colors text-sm">Lagerbestand</a>
    <a href="{{ route('items.create') }}" class="p-2 bg-blue-500 text-white rounded shadow hover:bg-blue-700 transition-colors text-sm">Artikel hinzufügen</a>
    <a href="{{ route('rentals.index') }}" class="p-2 bg-blue-500 text-white rounded shadow hover:bg-blue-700 transition-colors text-sm">Vermietungen</a>
  </div>

  {{-- TASys Picture --}}
  <div>
  <img src="{{ asset('img/tasys_gmbh_cover.jpeg') }}" alt="TASys" class="mx-auto" />
  </div>

  {{-- Search bar now moved to the top right --}}
  <div class="absolute top-0 right-0 m-4">
    <input type="text" id="search-field" class="border p-1 rounded-l text-sm" placeholder="Suche Artikeln...">
    <button id="search-button" class="p-1 bg-blue-500 text-white rounded-r hover:bg-blue-700 transition-colors text-sm">Suche</button>
  </div>
</div>
@endsection
