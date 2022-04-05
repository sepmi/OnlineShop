
<x-layouts.app>
    <x-slot name="title"> Show Product</x-slot>

    <div class="card  text-center sepehr5"  >
        <div class="card-header text-center">
            {{$product->name}}
        </div>
        <div class="card-body">

            @isset($product->image)
                <div class="mb-2">
                    <img class="w-50 " src="{{asset('images/'.$product->image ->image)}}" alt="this is image file">
                </div>
            @endisset

            <div class="mb-2">
                <p>Price: {{$product ->price}}</p>

            </div>




                <a type="button" href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                <a type="button" href="{{route('products.create')}}" class="btn btn-success">New</a>


        </div>
      </div>


</x-layouts.app>
