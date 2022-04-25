
<x-layouts.app>
    <x-slot name="title"> Show Super Category</x-slot>

    <div class="card  text-center sepehr"  >
        <div class="card-header text-center">
            {{$superCategory->title}}
        </div>

        <div class="card-body">


            <a type="button" href="{{route('superCategories.edit',$superCategory->id)}}" class="btn btn-primary">Edit</a>
            <a type="button" href="{{route('superCategories.create')}}" class="btn btn-success">New</a>
        </div>
    </div>


</x-layouts.app>
