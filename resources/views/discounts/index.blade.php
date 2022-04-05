

<x-layouts.app>
    <x-slot name="title">Index Discounts</x-slot>

    <div class="card   text-center sepehr"  >
        <div class="card-header text-center">
            Create Discount
        </div>
        <div class="card-body">


            <div ><a href="{{route('discounts.create')}}">Create</a></div>
            <div><a href="{{route('discounts.showAvailable')}}">Show All Available</a></div>


        </div>
    </div>


</x-layouts.app>
