
<x-layouts.app>
    <x-slot name="title">Edit Super Category</x-slot>

    <div class="card sepehr text-center"  >
        <div class="card-header text-center">
            Edit Super Category
        </div>
        <div class="card-body">

            <form action="{{route('superCategories.update',$superCategory ->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('superCategories.form')
                <button type="submit" class="btn btn-primary mt-5">Edit</button>
            </form>

        </div>
    </div>


</x-layouts.app>
