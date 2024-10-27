<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">

                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                    </div>
                </a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    {{--  <img src="img/avatars/avatar.jpg" class="rounded avatar img-fluid me-1" alt="Charles Hall" /> <span  --}}
                    Pages
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('cheff.add') }}">Cheff Add </a>
                    <a class="dropdown-item" href="{{ route('show') }}">Cheff Edit </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('menu.add') }}">Menu Add </a>
                    <a class="dropdown-item" href="{{ route('menu.show') }}">Menu Edit </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('cheff.logout') }}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
