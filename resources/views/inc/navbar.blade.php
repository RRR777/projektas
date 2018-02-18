    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark" style="background: #9A7AA0">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Pradinis <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('orders') ? 'active' : ''}}" href="/orders">Užsakymai</a>
                    </li>      
                </ul>
                    
                    <!-- Authication Links -->
                    <ul class="navbar-nav navbar-right">
                        @guest
                            <button  type="button" class="btn btn-success" onclick="location.href='{{ route('login') }}'">
                                Login
                            </button>
                            <button  type="button" class="btn btn-success" onclick="location.href='{{ route('register') }}'">
                                Register
                            </button>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <button type="button" class="btn btn-success">{{ Auth::user()->name }} <span class="caret"></span></button>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
            </div>
        </div>
    </nav>
