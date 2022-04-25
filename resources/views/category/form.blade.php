<div>

    <div class="form-group row p-1">
        <label for="">Category Name</label>
        <input type="text" class="form-control" id=""  name="title" value="{{ old('title') ?? $category->title}}" >



    </div>
    <div class="form-group row p-1">

        <label for="">select super-category</label>
        <select class="form-select " name="super_category_id">


            @foreach ($superCategories as $superCategory)

                <option value="{{$superCategory ->id}}"  >{{$superCategory ->title}}</option>

            @endforeach

        </select>

    </div>






    <x-messages.error-message></x-messages.error-message>





</div>


