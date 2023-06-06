<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed"><a class="sidebar-link td-n" href="index.html">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo"><img src="{{asset('THAdmin/images/logo.png')}}" alt="" /></div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                            </div>
                        </div>
                    </a></div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="index.html" class="td-n"><i
                                class="ti-arrow-circle-left"></i></a></div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived"><a class="sidebar-link" href="{{route('thadmin.dashboard')}}"><span
                        class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span
                        class="title">Dashboard </span></a></li>
            <li class="nav-item dropdown"><a class="dropdown-toggle" href="javascript:void(0);"><span
                        class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span><span
                        class="title">Application Api</span> <span class="arrow"><i
                            class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown"><a href="{{route('thadmin.flight-api')}}"><span>FlightApi</span></a></li>
                    <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item </span></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
