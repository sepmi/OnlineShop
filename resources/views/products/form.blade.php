<div>

    <div class="form-group row p-1">
        <label for="">Product Name</label>
        <input type="text" class="form-control" id=""  name="name" value="{{ old('name') ?? $product->name}}" >



    </div>

    <div class="form-group row p-1">
        <label for=""> Price</label>
        <input type="number" name="price" class="form-control"  value="{{ old('price') ?? $product->price}}">

    </div>

    <div class="form-group row p-1">

        <label for="">select category</label>
            <select class="form-select " name="category_id">


                @foreach ($categories as $category)

                <option value="{{$category ->id}}"  >{{$category ->title}}</option>

                @endforeach

            </select>

    </div>

    <div class="form-group row p-1">

        <label for="image" class="" data-browse="Upload image">select image</label>

        <input  type="file" class="form-control" list="" id="image" placeholder="select image" name="image" >



    </div>


    <x-messages.error-message></x-messages.error-message>





</div>
