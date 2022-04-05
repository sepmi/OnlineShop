<x-layouts.app>
    <x-slot name="title">Edit Discount</x-slot>

    <div class="card   text-center sepehr4"  >
        <div class="card-header text-center">
            Edit Discount
        </div>
        <div class="card-body">

            <form action="{{route('discounts.update',$discount->id)}}" method="POST" >
                @csrf
                @method('PATCH')
                @include('discounts.form')
                <button type="submit" class="btn btn-primary mt-5 ">Edit</button>
            </form>

        </div>
    </div>


</x-layouts.app>
