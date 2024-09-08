<header>
    <nav class="primary-nav padding-small">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-2 col-md-2">
                    <div class="main-logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('images/logonew.png') }}" alt="All Atout Lighting Logo">
                        </a>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10">
                    <div class="navbar">
                        <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                            <ul class="menu-list">
                                <li class="menu-item has-sub">
                                    <a href="{{ route('home') }}" class="item-anchor  d-flex align-item-center"
                                        data-effect="{{ __('messages.home') }}">
                                        {{ __('messages.home') }}<i class="icon icon-chevron-down"></i>
                                    </a>
                                </li>

                                <li><a href="{{ route('about') }}" class="item-anchor"
                                        data-effect="{{ __('messages.about') }}">{{ __('messages.about') }}</a></li>
                                <li><a href="{{ route('contact') }}" class="item-anchor"
                                        data-effect="{{ __('messages.contact') }}">{{ __('messages.contact') }}</a>
                                </li>
                                <li class="menu-item has-sub">
                                    <a  class="item-anchor  d-flex align-item-center"
                                        data-effect="Home">Select Language<i class="icon icon-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('language.switch', 'en') }}">English</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="{{ route('language.switch', 'ar') }}">العربية</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Language Switch Links -->


                                <!-- Conditional Admin and Login/Logout Links -->
                                @if (Auth::check())
                                    <!-- Check if the user is logged in -->
                                    @if (Auth::user()->is_admin)
                                        <!-- Check if the logged-in user is an admin -->
                                        <!-- Admin Button -->
                                        <li class="nav-item">
                                            <a href="{{ route('admin.products.index') }}" class="item-anchor">
                                                {{ __('Manage Products') }}
                                            </a>
                                        </li>
                                    @endif

                                    <!-- Logout Button -->
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}" class="item-anchor"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                    <!-- Hidden Logout Form -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <!-- Login Button -->
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="item-anchor">
                                            {{ __('Login') }}
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
