<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="search-bar flex-grow-1">

            </div>

            <div class="top-menu ms-auto">

            </div>


            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{ Auth::user()->firstname??'' }} {{ Auth::user()->lastname??'' }}</p>
                        <p class="designattion mb-0">{{ Auth::user()->roles[0]->name??'' }}</p>
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.auth.logout') }}"><i class='bx bx-log-out-circle'></i><span>Logout</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
