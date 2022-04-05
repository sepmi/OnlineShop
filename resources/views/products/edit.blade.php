<x-layouts.app>
    <x-slot name="title">Edit Product</x-slot>

    <div class="card   text-center sepehr4"  >
        <div class="card-header text-center">
          Edit Product
        </div>
        <div class="card-body">

            <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method("PATCH")
              @include('products.form')
              <button type="submit" class="btn btn-primary mt-5 ">Edit</button>
            </form>

        </div>
      </div>


</x-layouts.app>
