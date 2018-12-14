
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="{{ url('/') }}">

            <img src="{{ asset('admin/assets/imgs/logo.png') }}"  alt=logo>
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">
           
                @if(Auth::user()->author == true)

                <a href="{{ route('newPost') }}" class="btn btn-primary">New Post</a>
                @endif

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                   
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="avatar avatar-sm" alt="logo" style="width:50px; height:50px; float:left; border-radius:50%; margin-right:25px;">
                    <span class="small ml-1 d-md-down-none">{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="{{ route('userProfile') }}" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>

                   
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                    <a href="#" onclick="document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="fa fa-lock"></i> Logout
                    </a>
                    
                </div>
            </li>
        </ul>
    </nav>