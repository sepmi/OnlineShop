

<x-layouts.app>
    <x-slot name="title">Create Category</x-slot>

    <div class="card   text-center sepehr"  >
        <div class="card-header text-center">
            Create SuperCategory
        </div>
        <div class="card-body">

            <form action="{{route('superCategories.store')}}" method="POST">
                @csrf
                @include('superCategories.form')
                <button type="submit" class="btn btn-primary mt-5 ">Create</button>
            </form>

        </div>
    </div>


</x-layouts.app>
