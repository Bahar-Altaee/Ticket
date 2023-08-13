<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="{{ url('/') }}"><img class="img-fluid for-light"
                    src="{{ asset('assets/images/logo/halasat-ftth-logo-dark.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/halasat-ftth-logo-dark.png') }}" alt=""></a>
                    

            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href=""><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href=""><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    
                    <li class="sidebar-list">
                        <label class="badge badge-light-primary"></label><a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-3"  >Dashboard</span></a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="/">Default</a></li>
                            <!-- <li><a class="lan-5" href="">Ecommerce</a></li>
                            <li><a href="">Online course</a></li>
                            <li><a href="">Crypto</a></li>
                            <li><a href="">Social</a></li> -->
                        </ul>
                    </li>

                    <!-- 
                    role 1 ( Admin )
                    role 2 ( NOC )
                    role 3 ( CC teamleader ) , role 33 ( CC )
                    role 4 ( Quality )
                    role 5 ( Commercial )
                    role 6 ( OSP ) 
                    role 7 ( HR ) 
                    -->

                    @if (Auth()->user()->role == 1)
                    <li class="sidebar-main-title">
                        <div>
                            <h6>System User</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="SystemUsers">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}"></use>
                            </svg><span>Users</span></a></li>
                     @endif


                     @if (Auth()->user()->role == 3 || Auth()->user()->role == 33 || Auth()->user()->role == 1 || Auth()->user()->role == 2 || Auth()->user()->role == 4 )
                            <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Contact Center</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Help Desk</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="userdata">Request User Data</a></li>
                    </li>
                            <li><a href="ip-location">IP Info</a></li>
                            <li><a class="submenu-title" href="#">SAS<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                <li><a href="sasauthlog">User Authentication log</a></li>
                                <li><a href="sascardlog">Check Card Status</a></li>
                                <li><a href="sasuser">Change Expiration</a></li>
                                <li><a href="extend">Extend Expiration</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="#">ONTS's<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="xmlcalix">Calix ONT</a></li>
                                    <li><a href="thirdparty">Third Party ONT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                     @endif

                     @if (Auth()->user()->role == 1 || Auth()->user()->role == 2 )
                            <li class="sidebar-main-title">
                        <div>
                            <h6 class="">NOC Dep.</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-internationalization') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>NOC</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="Subnets">Subnets Advertise</a></li>
                    </li>
                            <li><a href="ip-location">IP Info</a></li>
                            <li><a class="submenu-title" href="#">Confige Scripts<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                <li><a href="">User Authentication log</a></li>
                                <li><a href="">Check Card Status</a></li>
                                <li><a href="">Change Expiration</a></li>
                                <li><a href="">Extend Expiration</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                     @endif

                     @if (Auth()->user()->role == 1 || Auth()->user()->role == 4)
                     <li class="sidebar-main-title">
                        <div>
                            <h6 class="">Quality Dep.</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>Quality</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="">Odoo</a></li>
                    </li>
                          
                        
                        </ul>
                    </li>
                     @endif

                     @if (Auth()->user()->role == 1 || Auth()->user()->role == 2 || Auth()->user()->role == 4)
                     <li class="sidebar-main-title">
                        <div>
                            <h6 class="">LOG</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title"
                            href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-project') }}"></use>
                            </svg><span>LOG</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="sassyslog">SAS System Log</a></li>
                            <li><a href="sasextenlogs">Change User Expiration</a></li>
                    </li>
                          
                        
                        </ul>
                    </li>
                     @endif
                    





                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
