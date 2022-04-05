


<div>

    <div class="form-group">
        <label for="" >Discount Name*</label>
        <input type="text" class="form-control " id=""  name="title" value="{{ old('title') ?? $discount->title}}" >



        <div class="form-group row p-1">
            <div >Is Public*</div>
            <select name="public" >

                <option value="1"  >true</option>
                <option value="0"  >false</option>
            </select>

        </div>

        <div class="form-group row p-1">
            <div >canUseForAllProducts*</div>
            <select name="canUseForAllProducts" >

                <option value="1"  >true</option>
                <option value="0"  >false</option>
            </select>

        </div>

        <div class="form-group row p-1">
            <label for=""> Max Use(number)*</label>
            <input type="number" name="max_number_of_uses" class="form-control"  value="{{ old('max_number_of_uses') ?? $discount->max_number_of_uses}}">

        </div>
        <div class="form-group row p-1">
            <label for=""> Max User Use(number)*</label>
            <input type="number" name="max_number_of_user_uses" class="form-control"  value="{{ old('max_number_of_user_uses') ?? $discount->max_number_of_user_uses}}">

        </div>



        <div class="form-group row p-1">
            <div >Discount(type)*</div>
            <select name="discount_type" >

                <option {{ old('discount_type')=="percent" ? 'selected' : ''}} value="percent"  >percent</option>
                <option {{ old('discount_type')=="amount" ? 'selected' : ''}} value="amount"  selected >amount</option>
            </select>

        </div>


        <div class="form-group row p-1">

            <label for="">select product</label>
            <select class="form-select " name="product_id[]" multiple>


                @foreach ($products as $product)

                    <option value="{{$product->id}}"   >{{$product->name}}</option>

                @endforeach

            </select>

        </div>


        <div class="form-group row p-1">

            <label for="">select user</label>
            <select class="form-select " name="user_id[]" multiple>


                @foreach ($users as $user)

                    <option value="{{$user->id}}"  >{{$user->fname}} {{$user->lname}}</option>

                @endforeach

            </select>

        </div>

        <div class="form-group row p-1">
            <label for=""> Code</label>
            <input type="text" name="code" class="form-control"  value="{{ old('code') ?? $discount->code}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> description</label>
            <input type="text" name="description" class="form-control"  value="{{ old('description') ?? $discount->description}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> number_of_uses</label>
            <input type="text" name="number_of_uses" class="form-control"  value="{{ old('number_of_uses') ?? $discount->number_of_uses}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> discount_amount_percentage</label>
            <input type="text" name="discount_amount_percentage" class="form-control"  value="{{ old('discount_amount_percentage') ?? $discount->discount_amount_percentage}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> discount_amount_amount</label>
            <input type="text" name="discount_amount_amount" class="form-control"  value="{{ old('discount_amount_amount') ?? $discount->discount_amount_amount}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> starts_at[Y-m-d H:i:s]</label>
            <input type="text" name="starts_at" class="form-control"  value="{{ old('starts_at') ?? $discount->starts_at}}">

        </div>

        <div class="form-group row p-1">
            <label for=""> expires_at[Y-m-d H:i:s]</label>
            <input type="text" name="expires_at" class="form-control"  value="{{ old('expires_at') ?? $discount->expires_at}}">






        <x-messages.error-message></x-messages.error-message>

    </div>


</div>

</div>
