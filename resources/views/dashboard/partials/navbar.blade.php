<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align dropdown-menu-end">
            <li class="nav-item dropdown justify-content-end">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <i class='bi bi-person-circle' style="font-size: 16px"></i> <span
                        class="text-dark text-capitalize">{{ Auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/"><i class="align-middle me-1"
                            data-feather="home"></i> Homepage</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout"><i
                            class="align-middle me-1" data-feather="log-out"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav> -
