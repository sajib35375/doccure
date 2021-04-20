<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="{{ route('home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>


                <li>
                    <a href="{{ route('users.index') }}"><i class="fe fe-user"></i> <span>Users</span></a>
                </li>


                <li>
                    <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('role.index') }}">Role</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li>
                    <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
