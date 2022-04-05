
<x-layouts.app>
    <x-slot name="title">Edit Category</x-slot>

    <div class="card sepehr text-center"  >
        <div class="card-header text-center">
            Edit Category
        </div>
        <div class="card-body">

            <form action="{{route('categories.update',$category ->id)}}" method="POST">
                @csrf
                @method('PATCH')
                @include('category.form')
                <button type="submit" class="btn btn-primary mt-5">Edit</button>
            </form>

        </div>
    </div>


</x-layouts.app>
