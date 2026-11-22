
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
                <li class="nav-item">
                    <a href="#" class="nav-link">My Workouts</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-lg-2">
                    <!-- Desktop -->
                    <a href="#" class="btn btn-outline-secondary d-none d-lg-inline-block">
                        Login
                    </a>

                    <!-- Mobile -->
                    <a href="#" class="nav-link d-lg-none">
                        Login
                    </a>
                </li>

                <li class="nav-item">
                    <!-- Desktop -->
                    <a href="#" class="btn btn-outline-primary d-none d-lg-inline-block">
                        Register
                    </a>

                    <!-- Mobile -->
                    <a href="#" class="nav-link d-lg-none">
                        Register
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
