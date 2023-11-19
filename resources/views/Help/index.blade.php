@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hilfe und Ressourcen</h1>
    <ul>
        <li><a href="{{ $resources['userManual'] }}">Benutzerhandbuch</a></li>
        <li><a href="{{ $resources['faq'] }}">FAQ</a></li>
        <li><a href="{{ $resources['quick-start-guides'] }}">Quick-Start-Guides</a></li>
        <li><a href="{{ $resources['visual-guides'] }}">Visuelle Anleitungen</a></li>
    </ul>
</div>
@endsection