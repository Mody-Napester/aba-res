<div class="navbar-area ">
    <div class="ecademy-responsive-nav">
        <div class="container">
            <div class="ecademy-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ url('assets_public/images/logo.png') }}" alt="Aba Resources">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="ecademy-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ url('assets_public/images/logo.png') }}" alt="Aba Resources">
                </a>

                <div class="collapse navbar-collapse mean-menu">

                    <ul id="menu-primary-menu" class="navbar-nav ml-auto">

{{--                        <li class="menu-item nav-item"><a title="About Us" href="{{ route('public.home.index') }}" class="nav-link">Home</a></li>--}}
                        <li class="menu-item nav-item"><a title="About Us" href="{{ route('public.about.index') }}" class="nav-link">About Us</a></li>
                        <li class="menu-item nav-item"><a title="For Parents" href="{{ route('public.parent.index') }}" class="nav-link">For Parents</a></li>
                        <li class="menu-item nav-item"><a title="For Professional" href="{{ route('public.professional.index') }}" class="nav-link">For Professional</a></li>
                        <li class="menu-item nav-item"><a title="For Organizations" href="{{ route('public.organization.index') }}" class="nav-link">For Organizations</a></li>
                        <li class="menu-item nav-item"><a title="Resources" href="{{ route('public.resource.index') }}" class="nav-link">Resources</a></li>
                        <li class="menu-item nav-item"><a title="Contact" href="{{ route('public.contact.index') }}" class="nav-link">Contact</a></li>

                        <li class="lang-item lang-item-121 lang-item-ar lang-item-first menu-item menu-item-type-custom menu-item-object-custom menu-item-7959-ar nav-item">
                            <a title="العربية" href="" class="nav-link" hreflang="ar" lang="ar">العربية</a>
                        </li>

                    </ul>

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="{{ route('public.cart.index') }}"><i class="flaticon-shopping-cart"></i><span class="mini-cart-count"></span></a>
                            </div>
                        </div>

                        @if(auth()->check())
                            <div class="option-item">
                                <a href="{{ route('public.student.profile') }}" class="default-btn"><i class="flaticon-user"></i>My Profile<span></span></a>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('public.auth.show') }}" class="default-btn"><i class="flaticon-user"></i>Login/Register<span></span></a>
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">

                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <div class="cart-btn">
                                <a href=""><i class="flaticon-shopping-cart"></i><span class="mini-cart-count"></span></a>
                            </div>
                        </div>

                        <div class="option-item">
                            <a href="" class="default-btn"><i class="flaticon-user"></i>Login/Register<span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
