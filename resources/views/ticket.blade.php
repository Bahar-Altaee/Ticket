@extends('layouts.simple.master')

@section('title', 'Hala FTTH')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>IP Information</h3>
@endsection

@section('breadcrumb-items')
    <div class="sidebar-wrapper close_icon" sidebar-layout="stroke-svg">
        <div>
            <div class="logo-wrapper"><a href="https://laravel.pixelstrap.com/cuba/dashboard/index"><img
                        class="img-fluid for-light"
                        src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo.png" alt=""><img
                        class="img-fluid for-dark"
                        src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo_dark.png" alt=""></a>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                <div class="toggle-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-grid status_toggle middle sidebar-toggle">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                </div>
            </div>
            <div class="logo-icon-wrapper"><a href="https://laravel.pixelstrap.com/cuba/dashboard/index"><img
                        class="img-fluid" src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo-icon.png"
                        alt=""></a></div>
            <nav class="sidebar-main">
                <div class="left-arrow disabled" id="left-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-left">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                </div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px -5px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: scroll;">
                                        <div class="simplebar-content" style="padding: 0px 5px;">
                                            <li class="back-btn"><a
                                                    href="https://laravel.pixelstrap.com/cuba/dashboard/index"><img
                                                        class="img-fluid"
                                                        src="https://laravel.pixelstrap.com/cuba/assets/images/logo/logo-icon.png"
                                                        alt=""></a>
                                                <div class="mobile-back text-end"><span>Back</span><i
                                                        class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                                            </li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6 class="lan-1">General</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list">
                                                <label class="badge badge-light-primary">5</label><a
                                                    class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-home"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-home"></use>
                                                    </svg>
                                                    <span class="lan-3">Dashboards</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a class="lan-4"
                                                           href="https://laravel.pixelstrap.com/cuba/dashboard/index">Default</a>
                                                    </li>
                                                    <li><a class="lan-5"
                                                           href="https://laravel.pixelstrap.com/cuba/dashboard/dashboard-02">Ecommerce</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/dashboard/dashboard-03">Online
                                                            course</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/dashboard/dashboard-04">Crypto</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/dashboard/dashboard-05">Social</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-widget"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-widget"></use>
                                                    </svg>
                                                    <span class="lan-6">Widgets</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/widgets/general-widget">General</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/widgets/chart-widget">Chart</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-layout"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-layout"></use>
                                                    </svg>
                                                    <span class="lan-7">Page layout</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/box-layout">Boxed</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/layout-rtl">RTL</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/layout-dark">Dark
                                                            Layout</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/hide-on-scroll">Hide
                                                            Nav Scroll</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/footer-light">Footer
                                                            Light</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/footer-dark">Footer
                                                            Dark</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/page-layouts/footer-fixed">Footer
                                                            Fixed</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6 class="lan-8">Applications</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list">
                                                <label class="badge badge-light-secondary">New</label><a
                                                    class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-project"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-project"></use>
                                                    </svg>
                                                    <span>Project </span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/project/projects">Project
                                                            List</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/project/projectcreate">Create
                                                            new</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/file-manager">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-file"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-file"></use>
                                                    </svg>
                                                    <span>File manager</span></a></li>
                                            <li class="sidebar-list">
                                                <label class="badge badge-light-danger">Latest </label><a
                                                    class="sidebar-link sidebar-title link-nav"
                                                    href="https://laravel.pixelstrap.com/cuba/kanban">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-board"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-board"></use>
                                                    </svg>
                                                    <span>kanban Board</span></a>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-ecommerce"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-ecommerce"></use>
                                                    </svg>
                                                    <span>Ecommerce</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ecommerce/product">Product</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/page-product">Product
                                                            page</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/list-products">Product
                                                            list</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/payment-details">Payment
                                                            Details</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/order-history">Order
                                                            History</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/invoice-template">Invoice</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ecommerce/cart">Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/list-wish">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ecommerce/checkout">Checkout</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ecommerce/pricing">Pricing </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-email"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-email"></use>
                                                    </svg>
                                                    <span>Email</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/email/email-application">Email
                                                            App</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/email/email-compose">Email
                                                            Compose</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-chat"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-chat"></use>
                                                    </svg>
                                                    <span>Chat</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/chat/chat">Chat
                                                            App</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/chat/video-chat">Video
                                                            chat</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-user"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-user"></use>
                                                    </svg>
                                                    <span>Users</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/users/user-profile">Users
                                                            Profile</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/users/edit-profile">Users
                                                            Edit</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/users/user-cards">Users
                                                            Cards</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/bookmark">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-bookmark"></use>
                                                    </svg>
                                                    <span>Bookmarks</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/contacts">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-contact"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-contact"></use>
                                                    </svg>
                                                    <span>Contacts</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/task">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-task"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-task"></use>
                                                    </svg>
                                                    <span>Tasks</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/calendar-basic">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-calendar"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-calender"></use>
                                                    </svg>
                                                    <span>Calendar</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/social-app">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-social"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-social"></use>
                                                    </svg>
                                                    <span>Social App</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/to-do">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-to-do"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-to-do"></use>
                                                    </svg>
                                                    <span>To-Do</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/search">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-search"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-search"></use>
                                                    </svg>
                                                    <span>Search Result</span></a></li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6>Forms &amp; Table</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-form"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-form"></use>
                                                    </svg>
                                                    <span>Forms</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a class="submenu-title" href="#">Form Controls<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/form-validation">Form
                                                                    Validation</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/base-input">Base
                                                                    Inputs</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/radio-checkbox-control">Checkbox
                                                                    &amp; Radio</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/input-group">Input
                                                                    Groups</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/megaoptions">Mega
                                                                    Options</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="submenu-title" href="#">Form Widgets<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/datepicker">Datepicker</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/time-picker">Timepicker</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/datetimepicker">Datetimepicker</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/daterangepicker">Daterangepicker</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/touchspin">Touchspin</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/select2">Select2</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/switch">Switch</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/typeahead">Typeahead</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/clipboard">Clipboard</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="submenu-title" href="#">Form layout<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/default-form">Default
                                                                    Forms</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/form-wizard">Form
                                                                    Wizard 1</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/form-two-wizard">Form
                                                                    Wizard 2</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/forms/wizard-form-three">Form
                                                                    Wizard 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-table"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-table"></use>
                                                    </svg>
                                                    <span>Tables</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a class="submenu-title" href="#">Bootstrap Tables<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/tables/bootstrap-basic-table">Basic
                                                                    Tables</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/tables/table-components">Table
                                                                    components</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="submenu-title" href="#">Data Tables<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/tables/datatable-basic-init">Basic
                                                                    Init</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/tables/datatable-api">API</a>
                                                            </li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/tables/datatable-data-source">Data
                                                                    Sources</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/tables/datatable-ext-autofill">Ex.
                                                            Data Tables</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/tables/jsgrid-table">Js
                                                            Grid Table </a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6>Components</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-ui-kits"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-ui-kits"></use>
                                                    </svg>
                                                    <span>Ui Kits</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/typography">Typography</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/avatars">Avatars</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/helper-classes">helper
                                                            classes</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/grid">Grid</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/tag-pills">Tag
                                                            &amp; pills</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/progress-bar">Progress</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/modal">Modal</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/alert">Alert</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/popover">Popover</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/tooltip">Tooltip</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/loader">Spinners</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/dropdown">Dropdown</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/ui-kits/accordion">Accordion</a>
                                                    </li>
                                                    <li><a class="submenu-title" href="#">Tabs<span class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/ui-kits/tab-bootstrap">Bootstrap
                                                                    Tabs</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/ui-kits/tab-material">Line
                                                                    Tabs</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/box-shadow">Shadow</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/ui-kits/list">Lists</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-bonus-kit"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-bonus-kit"></use>
                                                    </svg>
                                                    <span>Bonus Ui</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/scrollable">Scrollable</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/bonus-ui/tree">Tree
                                                            view</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/bootstrap-notify">Bootstrap
                                                            Notify</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/bonus-ui/rating">Rating</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/bonus-ui/dropzone">dropzone</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/tour">Tour</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/sweet-alert2">SweetAlert2</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/modal-animated">Animated
                                                            Modal</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/owl-carousel">Owl
                                                            Carousel</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/bonus-ui/ribbons">Ribbons</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/pagination">Pagination</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/breadcrumb">Breadcrumb</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/range-slider">Range
                                                            Slider</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/image-cropper">Image
                                                            cropper</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/bonus-ui/sticky">Sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/basic-card">Basic
                                                            Card</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/creative-card">Creative
                                                            Card</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/tabbed-card">Tabbed
                                                            Card</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/dragable-card">Draggable
                                                            Card</a></li>
                                                    <li><a class="submenu-title" href="#">Timeline<span
                                                                class="sub-arrow"><i
                                                                    class="fa fa-angle-right"></i></span></a>
                                                        <ul class="nav-sub-childmenu submenu-content">
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/timeline-v-1">Timeline
                                                                    1</a></li>
                                                            <li>
                                                                <a href="https://laravel.pixelstrap.com/cuba/bonus-ui/timeline-v-2">Timeline
                                                                    2</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-builders"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-builders"></use>
                                                    </svg>
                                                    <span>Builders</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/builders/form-builder-1">
                                                            Form Builder 1</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/builders/form-builder-2">
                                                            Form Builder 2</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/builders/pagebuild">Page
                                                            Builder</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/builders/button-builder">Button
                                                            Builder</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-animation"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-animation"></use>
                                                    </svg>
                                                    <span>Animation</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/animation/animate">Animate</a>
                                                    </li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/animation/scroll-reval">Scroll
                                                            Reveal</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/animation/aos">AOS
                                                            animation</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/animation/tilt">Tilt
                                                            Animation</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/animation/wow">Wow
                                                            Animation</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-icons"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-icons"></use>
                                                    </svg>
                                                    <span>Icons</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/icons/flag-icon">Flag
                                                            icon</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/icons/font-awesome">Fontawesome
                                                            Icon</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/icons/ico-icon">Ico
                                                            Icon</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/icons/themify-icon">Themify
                                                            Icon</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/icons/feather-icon">Feather
                                                            icon</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/icons/whether-icon">Whether
                                                            Icon</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-button"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-botton"></use>
                                                    </svg>
                                                    <span>Buttons</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/buttons/buttons">Default
                                                            Style</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/buttons/flat-buttons">Flat
                                                            Style</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/buttons/edge-buttons">Edge
                                                            Style</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/buttons/raised-button">Raised
                                                            Style</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/buttons/button-group">Button
                                                            Group</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-charts"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-charts"></use>
                                                    </svg>
                                                    <span>Charts</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/echarts">Echarts</a>
                                                    </li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/chart-apex">Apex
                                                            Chart</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/charts/chart-google">Google
                                                            Chart</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/charts/chart-sparkline">Sparkline
                                                            chart</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/chart-flot">Flot
                                                            Chart</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/chart-knob">Knob
                                                            Chart</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/charts/chart-morris">Morris
                                                            Chart</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/chartjs">Chatjs
                                                            Chart</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/charts/chartist">Chartist
                                                            Chart</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/charts/chart-peity">Peity
                                                            Chart</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6>Pages</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/landing-page">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-landing-page"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-landing-page"></use>
                                                    </svg>
                                                    <span>Landing page</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/sample-page">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-sample-page"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-sample-page"></use>
                                                    </svg>
                                                    <span>Sample page</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/internationalization">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-internationalization">
                                                        </use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-internationalization"></use>
                                                    </svg>
                                                    <span>Internationalization</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="#" target="_blank">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-starter-kit"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-starter-kit"></use>
                                                    </svg>
                                                    <span>Starter kit</span></a></li>
                                            <li class="mega-menu"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-others"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-others"></use>
                                                    </svg>
                                                    <span>Others</span></a>
                                                <div class="mega-menu-container menu-content" style="display: none;">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Error Page</h5>
                                                                    </div>
                                                                    <ul class="submenu-content opensubmegamenu">
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/400">Error
                                                                                400</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/401">Error
                                                                                401</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/403">Error
                                                                                403</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/404">Error
                                                                                404</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/500">Error
                                                                                500</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/others/503">Error
                                                                                503</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5> Authentication</h5>
                                                                    </div>
                                                                    <ul class="submenu-content opensubmegamenu">
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login"
                                                                               target="_blank">Login Simple</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login-one"
                                                                               target="_blank">Login with bg image</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login-two"
                                                                               target="_blank">Login with image two </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login-bs-validation"
                                                                               target="_blank">Login With
                                                                                validation</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login-bs-tt-validation"
                                                                               target="_blank">Login with
                                                                                tooltip</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/login-sa-validation"
                                                                               target="_blank">Login with
                                                                                sweetalert</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/sign-up"
                                                                               target="_blank">Register Simple</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/sign-up-one"
                                                                               target="_blank">Register with Bg Image
                                                                            </a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/sign-up-two"
                                                                               target="_blank">Register with image
                                                                                two</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/sign-up-wizard"
                                                                               target="_blank">Register wizard</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/unlock">Unlock
                                                                                User</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/forget-password">Forget
                                                                                Password</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/reset-password">Reset
                                                                                Password</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/authentication/maintenance">Maintenance</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Coming Soon</h5>
                                                                    </div>
                                                                    <ul class="submenu-content opensubmegamenu">
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/comingsoon">Coming
                                                                                Simple</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/comingsoon-bg-video">Coming
                                                                                with Bg video</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/comingsoon-bg-img">Coming
                                                                                with Bg Image</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Email templates</h5>
                                                                    </div>
                                                                    <ul class="submenu-content opensubmegamenu">
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/basic-template">Basic
                                                                                Email</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/email-header">Basic
                                                                                With Header</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/template-email">Ecomerce
                                                                                Template</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/template-email-2">Email
                                                                                Template 2</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/ecommerce-templates">Ecommerce
                                                                                Email</a></li>
                                                                        <li>
                                                                            <a href="https://laravel.pixelstrap.com/cuba/email-order-success">Order
                                                                                Success</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="sidebar-main-title">
                                                <div>
                                                    <h6>Miscellaneous</h6>
                                                </div>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-gallery"></use>
                                                    </svg>
                                                    <span>Gallery</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/gallery/index">Gallery
                                                            Grid</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/gallery/with-gallery-description">Gallery
                                                            Grid Desc</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/gallery/gallery-masonry">Masonry
                                                            Gallery</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/gallery/masonry-gallery-with-disc">Masonry
                                                            with Desc</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/gallery/gallery-hover">Hover
                                                            Effects</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-blog"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-blog"></use>
                                                    </svg>
                                                    <span>Blog</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/blog/index">Blog
                                                            Details</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/blog/blog-single">Blog
                                                            Single</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/blog/add-post">Add
                                                            Post</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/faq">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-faq"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-faq"></use>
                                                    </svg>
                                                    <span>FAQ</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-job-search"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-job-search"></use>
                                                    </svg>
                                                    <span>Job Search</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/job-search/job-cards-view">Cards
                                                            view</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/job-search/job-list-view">List
                                                            View</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/job-search/job-details">Job
                                                            Details</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/job-search/job-apply">Apply</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-learning"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-learning"></use>
                                                    </svg>
                                                    <span>Learning</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/learning/learning-list-view">Learning
                                                            List</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/learning/learning-detailed">Detailed
                                                            Course</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-maps"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-maps"></use>
                                                    </svg>
                                                    <span>Maps</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/maps/map-js">Maps
                                                            JS</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/maps/vector-map">Vector
                                                            Maps</a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-editors"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-editors"></use>
                                                    </svg>
                                                    <span>Editors</span></a>
                                                <ul class="sidebar-submenu">
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/editors/summernote">Summer
                                                            Note</a></li>
                                                    <li><a href="https://laravel.pixelstrap.com/cuba/editors/ckeditor">CK
                                                            editor</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/editors/simple-mde">MDE
                                                            editor</a></li>
                                                    <li>
                                                        <a href="https://laravel.pixelstrap.com/cuba/editors/ace-code-editor">ACE
                                                            code editor </a></li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/knowledgebase">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                                                    </svg>
                                                    <span>Knowledgebase</span></a></li>
                                            <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                                                        href="https://laravel.pixelstrap.com/cuba/support-ticket">
                                                    <svg class="stroke-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#stroke-support-tickets"></use>
                                                    </svg>
                                                    <svg class="fill-icon">
                                                        <use
                                                            href="https://laravel.pixelstrap.com/cuba/assets/svg/icon-sprite.svg#fill-support-tickets"></use>
                                                    </svg>
                                                    <span>Support Ticket</span></a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 53px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                 style="width: 112px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                 style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-arrow-right">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </div>
            </nav>
        </div>
    </div>
    @endsection




    @section('content')


        </div>
@endsection


@section('script')

    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/js/height-equal.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>

@endsection
