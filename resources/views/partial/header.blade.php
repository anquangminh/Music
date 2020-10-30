<header id="header">
    <div class="header-menu">
        <div class="header-logo">
            <div
                class="container h-100 d-flex align-items-center justify-content-sm-between">
                <div class="logo">
                    <a class=" d-block" href="#">
                        <img class=" d-block" src="{{ asset('image/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="header-search d-flex align-items-center">
                    <input type="text" class="search" name="search" placeholder="Từ Khoá Tìm Kiếm">
                    <div class="wrap-icon-search position-relative">
                        <i class="fad fa-search position-absolute icon-search"></i>
                    </div>
                </div>
                <div class="login-logout d-flex align-items-center position-relative">
                    @if (Auth::check())
                        <div class="user-login bg-light d-flex align-items-center justify-content-center">
                            <i class="fad fa-user-secret"></i>
                        </div>
                        <div class="name-user ml-2">{{ Auth()->user()->username }}</div>
                        <div class="icon-option position-absolute right-0">
                            <i style="font-size: 22px" class="fas fa-caret-down"></i>
                        </div>
                        <ul class="option-user position-absolute">
                            <li class="item-user favorite"></li>
                            <li class="item-user"></li>
                            <li class="item-user"></li>
                        </ul>
                    @else
                        <div class="login">
                            <a href="{{ url('user-login') }}">Đăng nhập</a>
                        </div>
                        <div class="over">|</div>
                        <div class="logout">
                            <a href="{{ url('user-logout') }}">Đăng xuất</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="header-top-menu d-flex container">
            <div class="theme h-100">
                <a class="d-flex align-items-center h-100" href="#">Chủ đề</a>
            </div>
            <div class="bxh h-100">
                <a class="d-flex align-items-center h-100" href="#">BXH</a>
            </div>
            <div class="album h-100">
                <a class="d-flex align-items-center h-100" href="#">Album</a>
            </div>
            <div class="video h-100">
                <a class="d-flex align-items-center h-100" href="#">Music Video</a>
            </div>
            <div class="singer h-100">
                <a class="d-flex align-items-center h-100" href="#">Nghệ sĩ</a>
            </div>
            <div class="vip h-100">
                <a class="d-flex align-items-center h-100" href="#">
                    <i class="fad fa-gem gem"></i>
                    <span>VIP</span>
                </a>
            </div>
        </div>
    </div>
</header>