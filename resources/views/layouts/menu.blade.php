<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
    <li class="nav-item menu-is-opening menu-open">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bed"></i><p>Rooms<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview" style="display: block;">
            <li class="nav-item">
                <a href="{{route('room.index')}}" class="nav-link {{ Request::is('room.index') ? 'active' : '' }}"><i class="fas fa-list nav-icon"></i><p>All Rooms</p></a>
            </li>
            <li class="nav-item">
                <a href="{{route('room.create')}}" class="nav-link {{ Request::is('room.create') ? 'active' : '' }}"><i class="fas fa-folder-plus nav-icon"></i><p>Add Room</p></a>
            </li>
        </ul>
    </li>
</li>
