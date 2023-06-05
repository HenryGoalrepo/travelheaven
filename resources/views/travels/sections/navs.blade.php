<div class="preloader-bg"></div>
<div id="preloader">
    <div id="preloader-status">
        <div class="preloader-position loader">  <span></span>  </div>
    </div>
</div>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- Navbar -->
<nav class="navbar navbar-expand-md">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="index.html">  <img src="{{asset('travel/img/logo-light.png')}}" class="logo-img" alt="" />  </a>
            <!-- <a class="logo" href="index.html"> <h2>TRAVOL <span>explore the world</span></h2> </a> -->
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">  <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>  </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">  <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home  <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('travelheaven.home')}}" class="dropdown-item active"><span>Home Layout 1 </span></a></li>
                        <li><a href="index2.html" class="dropdown-item"><span>Home Layout 2 </span></a></li>
                        <li><a href="index3.html" class="dropdown-item"><span>Home Layout 3 </span></a></li>
                        <li><a href="index4.html" class="dropdown-item"><span>Home Layout 4 </span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('travelheaven.about')}}">About </a></li>
                <li class="nav-item dropdown">  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Tours  <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('travelheaven.tour')}}" class="dropdown-item"><span>Tours 1 </span></a></li>
                        <li><a href="tours2.html" class="dropdown-item"><span>Tours 2 </span></a></li>
                        <li><a href="tours3.html" class="dropdown-item"><span>Tours 3 </span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('travelheaven.destinations')}}">Destinations </a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('travelheaven.gallery')}}">Gallery </a></li>
                <li class="nav-item dropdown">  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages  <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="tour-details.html" class="dropdown-item"><span>Tour Details </span></a></li>
                        <li><a href="tour-search.html" class="dropdown-item"><span>Tour Search </span></a></li>
                        <li><a href="post.html" class="dropdown-item"><span>Post Single </span></a></li>
                        <li class="dropdown-submenu dropdown">  <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages  <i class="ti-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon </span></a></li>
                                <li><a href="404.html" class="dropdown-item"><span>404 Page </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">  <a class="nav-link dropdown-toggle" href="{{route('travelheaven.blog')}}" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog  <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="blog.html" class="dropdown-item"><span>Blog 01 </span></a></li>
                        <li><a href="blog2.html" class="dropdown-item"><span>Blog 02 </span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{route('travelheaven.contact')}}">Contact </a></li>
            </ul>
        </div>
    </div>
</nav>
