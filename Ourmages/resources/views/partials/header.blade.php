<div role="navigation" class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="compressed">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                    type="button">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand compressed">
                    <img src="{{url('template/assets/img/logo_condensed.png')}}" alt="" data-src="{{url('template/assets/img/logo_condensed.png')}}"
                        data-src-retina="{{url('template/assets/img/logo2x.png')}}" width="119" height="22" /></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    @if(session()->has('token'))
                    <li><a href="/images">Images</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"> </i> {{session()->get('name')}}
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/auth/logout">Logout</a></li>
                            </ul>
                        </li>
                    @else
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> Account
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/auth">Login</a></li>
                          <li><a href="/auth">Register</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>