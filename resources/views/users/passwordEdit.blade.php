<x-layouts.app>

    <x-slot name="title"> Change Password</x-slot>

    <div class="card w-50 m-auto">
        <div class="card-body text-center">
            <h5 class="card-title">personal information</h5>
            <form action="{{route('users.updatePass',$user->id)}}" method="POST" autocomplete="off">
                @csrf
                @method("PATCH")

                <div class="form-group row p-1">
                    <label for="">Current Password</label>
                    <input type="password" class="form-control" id=""  name="currentPassword"  >
                </div>

                <div class="form-group row p-1">
                    <label for="">New Password</label>
                    <input type="password" class="form-control" id=""  name="password"  autocomplete="new-password">
                </div>

                <div class="form-group row p-1">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" id=""  name="password_confirmation" autocomplete="new-password" >
                </div>



                <div class="row d-inline-block ">
                    <button type="submit" class="btn btn-success mt-5 ">Edit</button>

                </div>
                <div class="row">

                    <a type="button" class="btn btn-warning mt-5 col m-2" href="{{route('users.edit',$user->id)}}">{{__('Information')}}</a>
                    <a type="button" class="btn btn-warning mt-5 col m-2" href="#">{{__('Phone Number')}}</a>
                    <a type="button" class="btn btn-warning mt-5 col m-2"  href="#">{{__('Address')}}</a>
                </div>



            </form>
        </div>
    </div>



</x-layouts.app>


