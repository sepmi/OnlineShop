<x-layouts.app>
    <x-slot name="title">All Discountss</x-slot>


    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th class="h1">Title</th>

            @if (Auth::check() && Auth::user()->is_admin == 1)

                <th class="h1">Actions</th>

            @endif
        </tr>

        </thead>

        <tbody>
        @foreach ( $discounts as $discount)

            @if ($discount->deleted_at == null)

                <tr>
                    <td>

                            {{$discount->title}}(use: {{$discount->number_of_uses}})

                    </td>

                    @if (Auth::check() && Auth::user()->is_admin == 1)
                        <td>

                            <a class="btn btn-info" href="{{route('discounts.edit',$discount ->id)}}">Edit</a>

                            <form class="sepehr2" action="{{route('discounts.destroy',$discount ->id)}}" method="POST">
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
