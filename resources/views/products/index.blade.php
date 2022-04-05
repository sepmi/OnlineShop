
<x-layouts.app>
    <x-slot name="title">  Products</x-slot>


    <div class="row ">

            @foreach ( $products as $product )
            <div class="card  text-center sepehr6 m-1"  >




                    <div class="card-header text-center ">
                        {{$product->name}}
                    </div>
                    <div class="card-body">



                        @isset($product->image)
                            <div class="mb-2">
                                <a href="{{route('eachProduct',$product->id)}}">
                                    <img class="w-50 " src="{{asset('images/'.$product->image ->image)}}" alt="this is image file">
                                </a>
                            </div>
                        @endisset

                        <div class="mb-2">
                            <p>Price: {{$product ->price}}</p>


                        </div>

                        @if (Auth::check() && Auth::user()->is_admin == 1)

                            <a type="button" href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>

                            <a type="button" href="{{route('products.create')}}" class="btn btn-success">New</a>
                        @endif

                        @if (!is_null($product->image))
                            <a type="button" class="btn btn-success ds-block" href="{{route('imageDownload',[$product->image->image,$product->name])}}" >Download</a>
                        @endif


                        @if (Auth::check() && Auth::user()->is_admin == 1)

                            <form class=""action="{{route('products.destroy',$product )}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        @endif


                    </div>



            </div>

            @endforeach
    </div>


</x-layouts.app>
