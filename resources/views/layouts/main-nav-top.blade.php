<!-- NAV ================================================== -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div class="container">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" alt="{{config('app.name')}}">
        </a>
        <ul id="nav" class="nav navbar-nav float-right">
            <li class="{{request()->is('/')? 'active': ''}} nav-item"><a href="/" class="nav-link">HOME</a></li>
            <li class="{{request()->is('/')? 'product*': ''}} dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    PRODUCTS
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/">
                        <img src="{{url('images/menu/menu1.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        Air Control and Backdraft Dampers
                    </a>
                    <a class="dropdown-item" href="/">
                        <img src="{{url('images/menu/menu2.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        UL Rated Fire, Smoke and Ceiling Radiation Dampers
                    </a>
                    <a class="dropdown-item" href="/">
                        <img src="{{url('images/menu/menu3.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        Louvers and Penthouses
                    </a>
                    <a class="dropdown-item" href="/">
                        <img src="{{url('images/menu/menu4.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        Actuators and Accessories
                    </a>
                </div>
            </li>
            <li class="{{request()->is('/')? 'product*': ''}} dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    Quick Reference
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex flex-row" href="/">
                        <img src="{{url('images/menu/qmenu0.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        Louvers and Dampers
                    </a>
                    <a class="dropdown-item d-flex flex-row" href="/">
                        <img src="{{url('images/menu/qmenu1.png')}}" alt="Menu" class="pr-2 img-circle" width="60" />
                        Louvers and Dampers<br> Quick Reference
                    </a>
                </div>
            </li>
            <li class="{{request()->is('quick-reference*')? 'active': ''}}nav-item"><a href="/" class="nav-link">QUICK
                    REFERENCE</a></li>
            <li class="{{request()->is('selection-tools*')? 'active': ''}}nav-item"><a href="/" class="nav-link">SELECTION
                    TOOLS</a></li>
            <li class="{{request()->is('resources*')? 'active': ''}}nav-item"><a href="/" class="nav-link">RESOURCES</a>
            </li>
            <li class="{{request()->is(['about', 'company', 'repfinder', 'history', 'news*'])? 'active': ''}} nav-item dropdown">
                <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    ABOUT
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('company.index')}}">Company</a>
                    <a class="dropdown-item" href="{{route('repfinder.index')}}">Repfinder</a>
                    <a class="dropdown-item" href="{{route('about.index')}}">History</a>
                    <a class="dropdown-item" href="{{route('news.index')}}">News</a>
                    <a class="dropdown-item" href="{{route('contact.index')}}">Contact</a>
                </div>
            </li>
            <li class="nav-item"><a href="/" class="nav-link">REP LOGIN</a>
            </li>
        </ul>
    </div>
</nav>
<!-- /nav end--->
