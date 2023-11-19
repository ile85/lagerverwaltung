<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <title>Lagerverwaltung TASys</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="headerField">
        <h1><span>TASys</span></h1>
        <h2>TASys GmbH</h2>
        <h3>zKursnet ®</h3>
    </div>
    <div id="sidebar">
    @include('navigation-menu')
</div>

<div class="main-container">
    <div id="app">
        @yield('content')
    </div>
</div>
@stack('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
