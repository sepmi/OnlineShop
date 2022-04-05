<x-layouts.app>
    <x-slot name="title">All Categoreis</x-slot>


    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th class="h1">Name</th>

            @if (Auth::check() && Auth::user()->is_admin == 1)

                <th class="h1">Actions</th>

            @endif
        </tr>

        </thead>

        <tbody>
        @foreach ( $categories as $category)

            @if ($category->deleted_at == null)

                <tr>
                    <td>
                       <a href="{{route('products.showRelated',$category->id)}}">
                           {{$category->title}}({{count($category->products)}})
                       </a>
                    </td>

                    @if (Auth::check() && Auth::user()->is_admin == 1)
                        <td>

                            <a class="btn btn-info" href="{{route('categories.edit',$category ->id)}}">Edit</a>

                            <form class="sepehr2"action="{{route('categories.destroy',$category ->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                    @endif


                </tr>
            @endif

        @endforeach

        </tbody>
    </table>

</x-layouts.app>
