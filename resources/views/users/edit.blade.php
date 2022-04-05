<x-layouts.app>

    <x-slot name="title"> Account Information</x-slot>

        <div class="card w-50 m-auto">
            <div class="card-body text-center">
                <h5 class="card-title">personal information</h5>
                <form action="{{route('users.updateInfo',$user->id)}}" method="POST">
                    @csrf
                    @method("PATCH")

                    <div class="form-group row p-1">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" id=""  name="fname" value="{{ old('fname') ?? $user->fname}}" >
                    </div>

                    <div class="form-group row p-1">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" id=""  name="lname" value="{{ old('lname') ?? $user->lname}}" >
                    </div>


                    <div class="row d-inline-block ">
                        <button type="submit" class="btn btn-success mt-5 ">Edit</button>

                    </div>
                    <div class="row">

                        <a type="button" class="btn btn-warning mt-5 col m-2" href="{{route('users.editPass',$user->id)}}">{{__('Change Password')}}</a>
                        <a type="button" class="btn btn-warning mt-5 col m-2" href="#">{{__('Phone Number')}}</a>
                        <a type="button" class="btn btn-warning mt-5 col m-2"  href="#">{{__('Address')}}</a>
                    </div>



                </form>
            </div>
        </div>



    </x-layouts.app>


