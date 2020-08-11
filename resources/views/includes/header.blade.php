
<style>

    @media (min-width: 768px) {
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: -30px;
            border-radius:0;
        }
    }
</style>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=1538809056383320&autoLogAppEvents=1"></script>​
<div id="fb-root"></div>
<!-- <script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script> -->
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form action="{{ url('/search') }}" method="GET">
                <input type="text" name="search" placeholder="Search The Standard...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div id="mySidenav" class="sidenav" style="z-index:10000;">
        <a href="javascript:void(0)" class="closebtn border-0" onclick="closeNav()">&times;</a>
        <a class="navheading">Digital News</a>
        <a href="https://www.standardmedia.co.ke/videos/">Videos</a>
        <a href="https://www.standardmedia.co.ke/category/7/opinion">Opinions</a>
        <a href="https://www.standardmedia.co.ke/category/52/cartoons">Cartoons</a>
        <a href="https://www.standardmedia.co.ke/category/56/education">Education</a>
        <a href="https://www.standardmedia.co.ke/ureport">U-Report</a>
        <a target="_blank" href="https://newsstand.standardmedia.co.ke/?utm_source=standard&amp;utm_medium=website">E-Paper</a>
        <a class="navheading">Lifestyle &amp; Entertainment</a>
        <a target="_blank" href="https://thenairobian.ke/">Nairobian</a>
        <a target="_blank" href="https://www.sde.ke/">SDE</a>
        <a target="_blank" href="https://www.standardmedia.co.ke/evewoman/?utm_source=standard&amp;utm_medium=website">Eve Woman</a>
        <a target="_blank" href="https://www.travelog.ke/?utm_source=standard&amp;utm_medium=website">Travelog</a>
        <a class="navheading">TV Stations</a>
        <a href="https://www.standardmedia.co.ke/ktn?utm_source=standard&amp;utm_medium=website">KTN Home</a>
        <a href="https://www.standardmedia.co.ke/ktnnews?utm_source=standard&amp;utm_medium=website">KTN News</a>
        <a href="http://www.btvkenya.ke/?utm_source=standard&amp;utm_medium=website">BTV</a>
        <a href="https://www.farmers.co.ke/farmers-tv?utm_source=standard&amp;utm_medium=website">KTN Farmers TV</a>
        <a class="navheading">Radio Stations</a>
        <a href="https://www.standardmedia.co.ke/radiomaisha">Radio Maisha</a>
        <a href="https://www.spicefm.co.ke?utm_source=standard&amp;utm_medium=website">Spice FM</a>
        <a href="https://www.vybezradio.co.ke?utm_source=standard&amp;utm_medium=website">Vybez Radio</a>
        <a class="navheading">Enterprise</a>
        <a target="_blank" href="http://vas.standardmedia.co.ke/?utm_source=standard&amp;utm_medium=website">VAS</a>
        <a target="_blank" href="https://tutorsoma.standardmedia.co.ke/?utm_source=standard&amp;utm_medium=website">E-Learning</a>
        <a target="_blank" href="https://digger.co.ke/?utm_source=standard&amp;utm_medium=webiste">Digger Classified</a>
        <a class="navheading">The Standard Group</a>
        <a href="https://www.standardmedia.co.ke/corporate">Corporate</a>
        <a href="https://www.standardgroup.co.ke/contact-us">Contact Us</a>
        <a href="https://www.standardmedia.co.ke/ratecard/rate_card.pdf">Rate Card</a>
        <a href="https://www.standardmedia.co.ke/recruitment">Vacancies</a>
        <a href="https://portal.standardmedia.co.ke/dcx_sg">DCX</a>
        <a href="https://portal.standardmedia.co.ke/omportal">O.M Portal</a>
        <a href="https://smtp.standardmedia.co.ke/owa">Corporate Email</a>
        <a href="https://rms.standardmedia.co.ke:73/">RMS</a>
    </div>
    <div id="mySidenavMob" class="sidenav sidenavMob" style="z-index:9999;">
        <a href="javascript:void(0)" class="closebtn border-0" onclick="closeNavMob()">×</a>
        <ul>
            <li class="nav-item">
                <a class="nav-link navheading sectionborder" onclick="openNav()"><i class="fa fa-bars text-white"></i> MORE </a>
            </li>
            <li class="nav-item  active ">
                <a class="nav-link d-none d-md-block d-lg-block " href="https://www.standardmedia.co.ke">HOME</a>
            </li>
            <li class="nav-item  d-none d-md-block d-lg-block">
                <a class="nav-link" href="https://www.standardmedia.co.ke/search"><i class="fa fa-search"></i></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" onclick="openSearch()">SEARCH <i class="fa fa-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/listen') }}">LISTEN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/store') }}">SPICE STORE</a>
            </li>
            <li class="nav-item login">
                <a data-scroll-nav="0" class="nav-link sectionborder" data-toggle="modal" data-dismiss="modal" data-target="#loginModal" href="#">Login</a>
            </li>
            <li class="nav-item ctabg ">
                <a class="nav-link" target="_blank" href="https://newsstand.standardmedia.co.ke/">E-Paper @Ksh.20 </a>
            </li>
        </ul>
    </div>

    <div class="main_menu">


        <nav class="navbar navbar-expand-lg pt-5">
            <div class="container-fluid mx-2">
                <a class="navbar-brand logo_h" href="{{ url('/') }}"
                ><img src="{{ url('assets/img/logo-spice.png') }}" alt="" class="logotop d-block d-md-none d-lg-none"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"  onclick="openNavMob()" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset " id="navbarSupportedContent">

                    <ul class="navbar-nav justify-content-around w-100 px-3">
                        <li class="nav-item login">
                            <a style="curosr:pointer !important;" class="nav-link sectionborder" onclick="openNav()">
                                <i class="fa fa-bars">

                                </i> MORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="openSearch()"> <i class="fa fa-search"></i></a>

                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="{{ url('/') }}"> <i class="fa fa-home"></i></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/listen') }}">LISTEN</a>
                        </li>
                        <li class="nav-item ">

                            <a class="navbar-brand logo_h" href="{{ url('/') }}"
                            ><img src="{{ asset('assets/img/logo-spice.png') }}" alt="" class="logotop"></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/store') }}">SPICE STORE</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user mr-2"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-item login">
                            <a data-scroll-nav="0" class="nav-link sectionborder" data-toggle="modal" data-dismiss="modal" data-target="#loginModal" href="#">Login</a>
                        </li>
                        @endif

                        <li class="nav-item ctabg ">
                            <a class="nav-link" target="_blank" href="https://newsstand.standardmedia.co.ke/"> E-Paper @Ksh.20 </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->


<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "url": "{{ url('/') }}",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.standardmedia.co.ke/sports/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
</script>

<script type="application/ld+json">
        {
              "@context": "http://schema.org",
              "@type": "Organization",
              "url": "{{ url('/') }}",
              "logo": "{{url('/assets/images/logo.png')}}"
        }

</script>

<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Person",
          "name": "Standard Digital - Your Gateway",
          "url": "{{ url('/') }}",
          "sameAs": [
                        "https://www.facebook.com/GameYetu/",
                        "https://www.instagram.com/game_yetu/?hl=en",
                        "https://t.me/gameyetu",
                        "https://twitter.com/gameyetu?lang=en"
                    ]
        }
</script>



