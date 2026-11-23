
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <a class="navbar-brand text-uppercase" href="{{ url('/') }}">
            <strong>Rep</strong>Share
        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbar-toggler"
                aria-controls="navbar-toggler"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-toggler">

            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a href="{{ route('workouts.index') }}" class="nav-link">My Workouts</a>
                    </li>
                @endauth
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item mr-lg-2">
                        <!-- Desktop -->
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary d-none d-lg-inline-block">
                            Login
                        </a>

                        <!-- Mobile -->
                        <a href="{{ route('login') }}" class="nav-link d-lg-none">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <!-- Desktop -->
                        <a href="{{ route('register') }}" class="btn btn-outline-primary d-none d-lg-inline-block">
                            Register
                        </a>

                        <!-- Mobile -->
                        <a href="{{ route('register') }}" class="nav-link d-lg-none">
                            Register
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <!-- Desktop -->
                        <a href="{{ route('profile.show') }}" class="nav-link d-none d-lg-inline-block">
                            My Profile
                        </a>

                        <!-- Mobile -->
                        <a href="{{ route('profile.show') }}" class="nav-link d-lg-none">
                            My Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout.user') }}">
                            @csrf

                            <!-- Desktop -->
                            <button type="submit" class="nav-link btn btn-link text-danger d-none d-lg-inline-block">
                                Logout
                            </button>

                            <!-- Mobile -->
                            <button type="submit" class="nav-link btn btn-link d-lg-none">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
