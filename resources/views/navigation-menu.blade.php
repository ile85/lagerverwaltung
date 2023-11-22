<div id="sidebar">
    <!-- Main Menu Item for Lagerverwaltung -->
    <div class="menu-item show-welcome">
        <i class="fas fa-home"></i>
        <a href="{{ url('/') }}">Lagerverwaltung</a>
        <span class="arrow">&#9660;</span>
    </div>

    <!-- Submenu Items -->
    <ul class="submenu">
        <li><a href="{{ route('locations.index') }}">Standorte</a></li>
        <li><a href="{{ route('items.index') }}">Artikel</a></li>
        <li><a href="{{ route('categories.index') }}">Kategorien</a></li>
        <li><a href="{{ route('rentals.index') }}">Vermietungen</a></li>
        <li><a href="{{ route('users.index') }}">Benutzer</a></li>
    </ul>
</div>