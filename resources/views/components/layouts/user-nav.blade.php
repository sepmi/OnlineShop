<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid " style="background-color: #2ECFCA">




        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">

            <div class="navbar-nav me-auto">

                <li class="nav-item">

                </li>

                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        {{__('Account')}}
                    </a>

                    <ul class="dropdown-menu me-0" >


                        <li class="d-block">
                            <form>
                                <a class="dropdown-item" href="{{route('users.edit',Auth::user()->id)}}">{{__('Information')}}</a>
                            </form>
                        </li>

                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-block">
                                @csrf

                                <button type="submit" class="dropdown-item" >{{ __('Logout') }}</button>
                            </form>
                        </li>

                    </ul>
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


                <a class="nav-link active" aria-current="page" href="{{route('index')}}">(user){{ __('Home') }}</a>

            </div>
        </div>
    </div>
</nav>
