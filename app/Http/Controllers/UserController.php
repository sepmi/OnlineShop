<?php

namespace App\Http\Controllers;




use App\Http\Requests\user\EditUserRequest;
use App\Http\Requests\user\PasswordUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Psy\debug;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }

    public function sameUser($user){
        if(Auth::user()->id == $user['id']){

            return true;

        }else{

            return false;
        }
    }
/////////////////// change lname and fname

    public function edit(User $user)
    {
        if($this->sameUser($user)){

            return(view('users/edit',compact('user')));

        }else{

            return('no dastresiii!!!!!!');
        }
    }


    public function updateInfo(EditUserRequest $request, User $user)
    {

        $user ->fname = $request['fname'];
        $user ->lname = $request['lname'];

        $user ->save();

        return redirect()->route('index')->with('success','changes saves completely');
    }

    ////////////change password


    public function editPass(User $user){

        if($this->sameUser($user)){

            return view('users.passwordEdit',compact('user'));
        }else{
            return('no dastresiii!!!!!!');
        }


    }

    public function updatePass(PasswordUserRequest $request,User $user){


        if (Hash::check($request['currentPassword'], $user['password'])) {

            $user ->password = Hash::make($request['password_confirmation']) ;
            $user ->save();
            return redirect()->route('index')->with('success','password updated completely');

        }else{
            return redirect(route('index'))->with('success-fail','something went worng!');die();
        }


    }


    //////////// edit address






    /////// edit phnoe number
}
