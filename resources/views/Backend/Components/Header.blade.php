  <header class="header-navbar fixed">
            <div class="toggle-mobile action-toggle"><i class="fas fa-bars"></i></div>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="theme-switch-icon"></div>
                </div>
                <div class="header-content">
                    
                    <div class="dropdown dropdown-menu-end">
                        <a href="#" class="user-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="label">
                                <span></span>
                                <div>{{Auth::user()->name}}</div>
                            </div>
                            <img class="img-user" src="{{url('Backend/assets/images/avatar1.png')}}" alt="user"srcset="">
                        </a>
                        <ul class="dropdown-menu small">
                            <!-- <li class="menu-header">
                                <a class="dropdown-item" href="#">Notifikasi</a>
                            </li> -->
                            <li class="menu-content ps-menu">
                               
                              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="description">
                                <i class="ti-power-off"></i> Logout
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        