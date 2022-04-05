
<x-layouts.app>
    <x-slot name="title"> Show Category</x-slot>

    <div class="card  text-center sepehr"  >
        <div class="card-header text-center">
            {{$category->title}}
        </div>

        <div class="card-body">


            <a type="button" href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
            <a type="button" href="{{route('categories.create')}}" class="btn btn-success">New</a>
        </div>
    </div>


</x-layouts.app>
