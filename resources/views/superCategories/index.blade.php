<x-layouts.app>
    <x-slot name="title">All Super Categoreis</x-slot>


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
        @foreach ( $superCategories as $superCategory)



                <tr>
                    <td>
                       <a href="{{route('categories.showRelated',$superCategory->id)}}">
                           {{$superCategory->title}}({{count($superCategory->categories)}})
                       </a>
                    </td>

                    @if (Auth::check() && Auth::user()->is_admin == 1)
                        <td>

                            <a class="btn btn-info" href="{{route('superCategories.edit',$superCategory ->id)}}">Edit</a>

                            <form class="sepehr2"action="{{route('superCategories.destroy',$superCategory ->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                    @endif


                </tr>


        @endforeach

        </tbody>
    </table>

</x-layouts.app>
