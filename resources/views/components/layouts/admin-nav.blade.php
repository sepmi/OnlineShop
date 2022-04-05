<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid " style="background-color: #2ECFCA">

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">

                <li class="nav-item">
                </li>

                <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        {{__('Account')}}({{ Auth::user()->fname }}  {{ Auth::user()->lname }})
                    </a>

                    <ul class="dropdown-menu me-0" >


                        <li class="d-block">
                            <form>
                                <a class="dropdown-item" href="{{route('users.edit',Auth::user()->id)}}">{{__('Information')}}</a>
                            </form>
                        </li>

                        <li class="d-block">
                            <form>
                                <button class="dropdown-item">{{__('Users')}}</button>
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

                <li class="nav-item ">
                    <a id="" class="nav-link" href="{{route('discounts.index')}}" role="button" >
                        Discounts
                    </a>
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
                        {{ __('Product') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="{{route("products.create")}}">{{ __('Create') }}</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Category') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-center" href="{{route('categories.index')}}">{{ __('Show Categories') }}</a></li>
                        <li><a class="dropdown-item text-center" href="{{route('categories.create')}}">{{ __('Create') }}</a></li>
                    </ul>
                </li>

                <a class="nav-link active" aria-current="page" href="{{route('index')}}">(admin){{ __('Home') }}</a>
            </div>


        </div>
    </div>
</nav>
