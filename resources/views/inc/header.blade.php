<nav role="navigation" class="primary-navigation">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/posts">Style &dtrif;</a>
            <ul class="dropdown">
              <li><a href="#">High-tech</a></li>
              <li><a href="#">International</a></li>
              <li><a href="#">Industrial</a></li>
              <li><a href="#">Modern</a></li>
              <li><a href="#">Neoclassical</a></li>
            </ul>
        </li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>

        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} &dtrif;
                </a>
                <ul class="dropdown">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></li>
                  </ul>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest

    </ul>
    
</nav>
