<nav class="main-sidebar ps-menu">
    <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div>
    <div class="sidebar-header">
        <div class="text">Luxury Palace Oman</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('adminDashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="{{ request()->is(
                    'admin/data-pengguna',
                    'admin/data-pengguna/add',
                    'admin/data-pengguna/show/*',
                    'admin/data-pengguna/update/*',
                )
                    ? 'active'
                    : '' }}">
                <a href="{{ route('adminPengguna') }}" class="link">
                    <i class="ti-user"></i>
                    <span>Data User</span>
                </a>
            </li>
            
             <li class="{{ request()->is(
                    'admin/data-galeri',
                    'admin/data-galeri/add',
                   
                )
                    ? 'active'
                    : '' }}">
                <a href="{{ route('adminGaleri') }}" class="link">
                    <i class="ti-image"></i>
                    <span>Data Gallery</span>
                </a>
            </li>
            
            <li class="{{ request()->is(
                    'admin/data-po',
                    'admin/data-po/add',
                    'admin/data-po/show/*',
                    'admin/data-po/update/*',
                )
                    ? 'active'
                    : '' }}">
                <a href="{{ route('adminPO') }}" class="link">
                    <i class="ti-announcement"></i>
                    <span>Data Booking</span>
                </a>
            </li>
            
           

           
        </ul>
    </div>
</nav>