<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid " style="background-color: #2ECFCA">




        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <li class="nav-item">

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>

            </div>

            <div class="navbar-nav ms-auto">


                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{route('contact')}}"  role="button"  aria-expanded="false">
                        {{__('Contact Us')}}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Categoreis') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li>
                            <a class="dropdown-item" href="{{route('categories.index')}}">{{ __('Show') }} </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Super Category') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-center" href="{{route('superCategories.index')}}">{{ __('Show') }}</a></li>
                    </ul>
                </li>


                <a class="nav-link active" aria-current="page" href="{{route('index')}}">(عادی){{ __('Home') }}</a>


            </div>
        </div>
    </div>
</nav>

