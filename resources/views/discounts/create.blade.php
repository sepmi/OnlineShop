<x-layouts.app>
    <x-slot name="title">Create Discount</x-slot>

    <div class="card   text-center sepehr4"  >
        <div class="card-header text-center">
            Create Discount
        </div>
        <div class="card-body">

            <form action="{{route('discounts.store')}}" method="POST" >
                @csrf
                @include('discounts.form')
                <button type="submit" class="btn btn-primary mt-5 ">Create</button>
            </form>

        </div>
    </div>


</x-layouts.app>
