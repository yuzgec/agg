<nav id="navigation" class="modern-nav fs-12 bordered bg-blur link-hover-01 hover-dark nav-white hide-hover-cursor dropdown-radius" data-offset="0">
    <div class="container nav-container">
        <div class="row nav-wrapper justify-content-end">
            <div class="col-md-2">
                <a href="{{ route('home')}}" class="logo">
                     <img src="/logo.jpg" alt="{{ config('settings.img_alt')}}" class="logo-dark mxw-100">
                     <img src="images/logos/logo_03_white.svg" alt="{{ config('settings.img_alt')}}" class="logo-white mxw-100">
                </a>
            </div>
            <div class="col-md-10 nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="logo-for-mobile-navigation"><img src="images/logos/logo_03_dark.svg" alt="{{ config('settings.img_alt')}}"  class="logo-white mxw-100"></li>
                    <li><a href="{{ route('home')}}" class="nav-link">Anasayfa</a></li>
                    <li><a href="{{ route('corporatedetail','hakkimizda')}}" class="nav-link">Hakkımızda</a></li>
                    <li class="dd-toggle"> <a href="#" class="nav-link">Hizmetlerimiz</a>
                        <ul class="dropdown-menu to-right">
                            @foreach ($Service as $item)
                                <li><a href="{{ route('servicedetail', $item->slug)}}" class="nav-link">{{ $item->title }}</a></li>
                            @endforeach
                        </ul> 
                    </li>

                    <li><a href="{{ route('project')}}" class="nav-link">Projelerimiz</a></li>
                    <li><a href="{{ route('reference')}}" class="nav-link">Referanslarımız</a></li>
                    <li><a href="{{ route('contactus')}}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
            <div class="d-none d-lg-block nav-menu">
                <ul class="nav-links justify-content-end">
                    <li class="extra-links">
                        <div class="bracket"></div>
                        <a href="#" class="nav-link search-form-trigger"><i class="ti-search"></i></a>
                        <a href="https://www.instagram.com/{{ config('settings.instagram')}}" target="_blank" class="nav-link" title="Instagram"><i class="ti-instagram"></i></a>
                        <a href="https://www.facebook.com/{{ config('settings.facebook')}}" target="_blank" class="nav-link" title="facebook"><i class="ti-facebook"></i></a>
                        <a href="{{ route('contactus')}}" class="nav-button white bg-colored fs-12 uppercase bold slow" title="Teklif İste"><span>Teklif İste</span></a>
                    </li>
                </ul>
            </div>
            <div class="mobile-nb">
                <div class="hamburger-menu">
                    <div class="top-bun"></div>
                    <div class="meat"></div>
                    <div class="bottom-bun"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-bg"></div>
</nav>