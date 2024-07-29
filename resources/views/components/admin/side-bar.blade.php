<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <span class="nav-icon uil uil-create-dashboard"></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title mt-30">
                    <span>User Management</span>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span class="nav-icon uil uil-user"></span>
                        <span class="menu-text">Users</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="">
                            <a href="inbox.html">Drivers</a>
                        </li>
                        <li class="">
                            <a href="read-email.html">Owners</a>
                        </li>
                        <li class="">
                            <a href="read-email.html">Passengers</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="chat.html" class="">
                        <span class="nav-icon uil uil-map"></span>
                        <span class="menu-text">Trips</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="">
                        <span class="nav-icon uil uil-car"></span>
                        <span class="menu-text">Vehicle Types</span>
                    </a>
                </li>
                <li class="menu-title mt-30">
                    <span>Settings</span>
                </li>
                <li>
                    <a href="chat.html" class="">
                        <img class="nav-icon" src="{{ asset('admin-assets/img/setting.png') }}" alt="General Settings">
                        <span class="menu-text">General Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
