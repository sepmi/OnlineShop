<div>

    @if (session('success-fail-login'))
        <p class="alert alert-danger text-center">{{session('success-fail-login')}}</p>
    @endif

    @if (session('success'))
        <p class="alert alert-success text-center">{{session('success')}}</p>
    @endif

    @if (session('success-fail'))
        <p class="alert alert-danger text-center">{{session('success-fail')}}</p>
    @endif



    @if (session('success-delete'))
        <p class="alert alert-danger text-center">{{session('success-delete')}}</p>
    @endif

    @if (session('success-login'))
        <p class="alert alert-success text-center">{{session('success-login')}}</p>
    @endif


</div>
