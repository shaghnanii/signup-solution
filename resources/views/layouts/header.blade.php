<nav class="navbar navbar-expand-lg fixed-top custom-dark-bg">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('home.index') }}">SIGNUP SOLUTION</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-black"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown05" data-bs-toggle="dropdown" aria-expanded="false">Accounts</a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdown05">
                        <li><a class="dropdown-item text-dark" href="#">Profile</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Settings</a></li>
                        <li><a class="dropdown-item text-dark" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
