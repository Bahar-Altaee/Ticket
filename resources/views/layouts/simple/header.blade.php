@php
            use App\User;

            $User = User::where('approved', 0)->orderBy('created_at', 'desc')->get();
            $usersCount = User::where('approved', 0)->count();
            @endphp
<div class="page-header">
  <div class="header-wrapper row m-0">
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper"><a href="{{ route('index')}}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
    </div>
    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div class="notification-slider">
        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">MAMOON VLANS </span></h6><a class="ms-1" href="" target="_blank">1311 1312 1313</a>
        </div>
        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">KADMIYA VLANS</span></h6><a class="ms-1" href="" target="_blank">1322 1323</a>
        </div>
          <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">BELEDIYAT VLANS</span></h6><a class="ms-1" href="" target="_blank">1331</a>
        </div>

        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">OMC VLANS</span></h6><a class="ms-1" href="" target="_blank">1351 1352</a>
        </div>

         <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">BAYAA VLANS</span></h6><a class="ms-1" href="" target="_blank">1371 1372</a>
        </div>

        <div class="d-flex h-100"><img src="{{ asset('assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400"><span class="f-light">SHAAB VLANS</span></h6><a class="ms-1" href="" target="_blank">1391 1392 1393</a>
        </div>



      </div>
    </div>
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus">
        <li class="language-nav">
          <div class="translate_wrapper">
            <div class="current_lang">
              <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
            </div>
            <div class="more_lang">
              <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
            </div>
          </div>
        </li>
        <li>                         <span class="header-search">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
            </svg></span></li>
        <li>
          <div class="mode">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
            </svg>
          </div>
        </li>
        @if (Auth()->user()->role == 1)
        <li class="onhover-dropdown">
          <div class="notification-box">
            <svg>
              <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
            </svg><span class="badge rounded-pill badge-secondary">{{ $usersCount }}</span>
          </div>
          <div class="onhover-show-div notification-dropdown" id="userList">
    <h6 class="f-18 mb-0 dropdown-title">Disabled Users</h6>
    <ul id="userContainer" style="max-height: 600px; overflow-y: scroll;">
        @foreach ($User as $user)
            <li class="b-l-secondary border-4">
                @php
                    $hours = $user->created_at->diffInHours(now());
                @endphp
                <p>{{ $user->name }}<span class="font-secondary">{{ $hours }} hr</span></p>
            </li>
        @endforeach
              <li><a class="f-w-700" href="SystemUsers" data-bs-original-title="" title="">Check all</a></li>
              </ul>

   
            
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var userContainer = $('#userContainer');
        var page = 1; // Initial page number for loading users
        var isLoading = false; // Flag to prevent multiple simultaneous requests

        userContainer.scroll(function() {
            var scrollTop = userContainer.scrollTop();
            var containerHeight = userContainer.height();
            var contentHeight = userContainer.get(0).scrollHeight;

            if (scrollTop + containerHeight >= contentHeight && !isLoading) {
                loadMoreUsers();
            }
        });

        function loadMoreUsers() {
            isLoading = true;
            // Show loading indicator or perform any other desired action

            // Simulating an AJAX request to fetch more users
            $.ajax({
                url: '/load-more-users', // Replace with your actual endpoint for loading more users
                method: 'GET',
                data: {
                    page: page + 1 // Increment the page number for each subsequent request
                },
                success: function(response) {
                    if (response && response.length > 0) {
                        // Append the fetched users to the userContainer
                        response.forEach(function(user) {
                            var userHtml = '<li class="b-l-secondary border-4"><p>' + user.name + '<span class="font-secondary">' + user.hours + ' hr</span></p></li>';
                            userContainer.append(userHtml);
                        });

                        page++; // Increment the page number for the next request
                    }

                    isLoading = false;
                    // Hide loading indicator or perform any other desired action
                },
                error: function() {
                    isLoading = false;
                    // Handle error scenario
                }
            });
        }

        // Load initial set of users
        loadMoreUsers();
    });
</script>
        </li>
        @endif
        <li class="profile-nav onhover-dropdown pe-0 py-0">
          
        <div class="media profile-media">
    @if (Auth()->user()->image)
        <img class="b-r-10" src="{{ asset('uploads/profiles/' . Auth()->user()->image) }}" alt="" width="40" height="40">
    @else
        <img class="b-r-10" src="{{ asset('/assets/images/user/360_F_517798849_WuXhHTpg2djTbfNf0FQAjzFEoluHpnct.jpg') }}" alt="" width="40" height="40">
    @endif
                <div class="media-body"><span>{{Auth::user()->name}}</span>
              <p class="mb-0 font-roboto">{{Auth::user()->department}} <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="userprofile"><i data-feather="user"></i><span>Account </span></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>

<li>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i id="logout-icon" data-feather="logout"></i><span>Log Out</span>
    </a>
</li>

            
          </ul>
        </li>
      </ul>
    </div>
    <script class="result-template" type="text/x-handlebars-template">
      <div class="ProfileCard u-cf">                        
      <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
      <div class="ProfileCard-details">
      {{-- <div class="ProfileCard-realName">{{name}}</div> --}}
      </div>
      </div>
    </script>
    <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
  </div>
</div>

