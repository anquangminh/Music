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
                            <i style="font-size: 22px; color: #21b685" class="fas fa-caret-down"></i>
                        </div>
                        <ul class="option-user position-absolute right-0 round">
                            <li class="item-user favorite">
                                <a href="{{ url('user-favorite') }}">
                                    <i class="fad fa-heart"></i>
                                    <span>Nhạc yêu thích</span>
                                </a>
                            </li>
                            <li class="item-user account">
                                <a href="{{ url('user-playlist') }}">
                                    <i class="fad fa-list-music"></i>
                                    <span>Playlist</span>
                                </a>
                            </li>
                            <li class="item-user listen">
                                <a href="{{ url('user-listen') }}">
                                    <i class="fad fa-clock"></i>
                                    <span>Nghe gần đây</span>
                                </a>
                            </li>
                            <li class="item-user logout">
                                <a href="{{ url('user-logout') }}">
                                    <i class="fad fa-sign-out-alt"></i>
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    @else
                        <div class="login">
                            <a href="{{ url('user-login') }}">Đăng nhập</a>
                        </div>
                        <div class="over">|</div>
                        <div class="logout">
                            <a href="{{ url('user-register') }}">Đăng ký</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="header-top-menu d-flex container">
            <div class="theme position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                    <span>Chủ đề</span>
                    <div class="dropdown-menu-link position-absolute d-flex">
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Thể loại</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Tâm trạng</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Hoạt động</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="bxh position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                    <span>BXH</span>
                    <div class="dropdown-menu-link position-absolute d-flex">
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Việt Nam</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Âu Mỹ</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Hàn Quốc</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="album position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                    <span>Album</span>
                    <div class="dropdown-menu-link position-absolute d-flex">
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Việt Nam</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Âu Mỹ</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Hàn Quốc</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="video position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                    <span>Music Video</span>
                    <div class="dropdown-menu-link position-absolute d-flex">
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Việt Nam</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Âu Mỹ</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                        <div class="dropdown-item-link d-flex">
                            <div class="category-item title-dropdown-menu">Hàn Quốc</div>
                            <div class="category-item item-link">EDM</div>
                            <div class="category-item item-link">Acoustic</div>
                            <div class="category-item item-link">Indie</div>
                            <div class="category-item item-link">Nhạc Không Lời</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="singer position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                <span>Nghệ sĩ</span>
                <div class="dropdown-menu-link position-absolute d-flex">
                    <div class="dropdown-item-link d-flex">
                        <div class="category-item item-link">Việt Nam</div>
                        <div class="category-item item-link">Âu Mỹ</div>
                        <div class="category-item item-link">Hàn Quốc</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="vip position-relative h-100">
                <a class="nav-link d-flex align-items-center h-100" href="#">
                    <i class="fad fa-gem gem"></i>
                    <span>VIP</span>
                </a>
            </div>
        </div>
    </div>
</header>