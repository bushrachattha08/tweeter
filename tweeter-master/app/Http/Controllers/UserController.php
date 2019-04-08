<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\follow;
use App\following;


use Auth;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{

        public function follow(Request $request){
        $user = Auth::user();
        $follower = new follower;
        $follower ->user_id = $user->id;
        $follower ->following = $request->follow;
        $follower -> save();
        return redirect('home');
        }



      public function editProfiledisplay(){

          $currentUser = Auth:: User();
          $currentUserId = $currentUser->id;
          $user = new User();
          $user = $user->find($currentUserId);
          return view('updateprofile',compact('user'));
      }


      public function Profiledisplay(){

                $currentUser = Auth:: User();
                $currentUserId = $currentUser->id;
                $user = new User();
                $user = $user->find($currentUserId);
                return view('profile',compact('user'));
            }

      public function editProfile(Request $request){

          $currentUser = Auth:: User();

          $user = new User();
          $currentUserId = $currentUser->id;
          $user = $user->find($currentUserId);

         $user->name = $request->name;
         $user->last_name = $request->last_name;
         $user->email = $request->email;
         $user->gender = $request->gender;
         $user->telephone = $request->telephone;
         $user->dob = $request->dob;
         $user->country = $request->country;
         $user -> save();

          return redirect('edit-profile');
      }




    public function show(User $user)
    {

        return view('user', compact('user'));
    }
    // public function follow(Request $request, User $user)
    // {
    //     if($request->user()->canFollow($user)) {
    //         $request->user()->following()->attach($user);
    //     }
    //     // return redirect()->back();
    // }
    public function unFollow(Request $request, User $user)
    {
        if($request->user()->canUnFollow($user)) {
            $request->user()->following()->detach($user);
        }
    return redirect('home');
    }
    public function getAllUsers(){

    $users = User::get();


    return new UserResource($users);

}
}
