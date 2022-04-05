<x-layouts.app>
    <x-slot name="title">Create Product</x-slot>

    <div class="card   text-center sepehr4"  >
        <div class="card-header text-center">
          Create Product
        </div>
        <div class="card-body">

            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @include('products.form')
              <button type="submit" class="btn btn-primary mt-5 ">Create</button>
            </form>

        </div>
    </div>


</x-layouts.app>
