<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\User;
use App\Follower;
use App\unFollower;
use App\Postlike;
use Auth;
use App\Http\Resources\Postlike as PostLikeResource;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\Comments as CommentsResource;
// use App\Http\Resources\Editpost as EditpostResource;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $this->middleware('auth');
        $users = new User;
        $potentialfollowers = $users = $users->get();

        $user = Auth::user();

        $follower = new Follower;
        $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();

        $post = new Post;
        $posts =  Post::orderBy('created_at','desc')->get();
        $comment = new Comment;

        $postscollection = array();



        foreach ($posts as $post) {
        $newPost = $post;
        $posts= Post::find($post->id)->comments;
        $newPost['comment'] = $comment;


       $newPost['liked'] = false;
       $postlike = \DB::table('postlikes')->where('user_id',$user->id)->where('post_id',$post->id)->orderBy('created_at','DESC')->first();
       if(isset($postlike->postlikes) && ($postlike->postlikes == "1")){
           $newPost['liked'] = true;



       }

       $newPost['user'] = Post::find($post->id)->user;

       if($user->id == $post->user_id){
           $newPost['has_permissions'] = 1;

       }
        $postscollection[] = $newPost;
         }
        $posts = $postscollection;

        return view('home', compact('posts', 'user','potentialfollowers'));
    }





    public function savePost(Request $request){
    $user = Auth::user();
    $post = new Post;
    $post ->user_id = $user->id;
    $post ->posts = $request->post;
    $post -> save();
    return redirect('home');
    }


    public function savecomment(Request $request){
$user = Auth::user();
$comment = new Comment;
$comment ->user_id = $user->id;
$comment ->post_id = $request->post_id;
$comment ->comments = $request->comment;
$comment-> save();
return redirect('home');
}



    public function deletePost(Request $request){

    $post = Post::find($request->post_id);
    if($post){
    Post::destroy($request->post_id);
    }
    return redirect('home');
}



    public function deletecomment(Request $request){

    $comment = comment::find($request->comment_id);
    if($comment){
    comment::destroy($request->comment_id);
    }
    return redirect('home');
}




    public function likePost(Request $request){
    $user = Auth::user();
    $postlike = new Postlike;
    $postlike ->user_id = $user->id;
    $postlike ->post_id = $request->post_id;
    $postlike ->postlikes = $request->like;
    $postlike -> save();
    return redirect('home');
     }


public function editPost(Request $request){

$post = Post::find($request->post_id);
$post->post = $request->post;

$post->save();


return redirect('home');

}

public function editPostdisplay($id){

    $post = Post::find($id);
    return View('editpost',compact('post'));

     }



     public function follow(Request $request){
     $user = Auth::user();
     $follower = new follower;
     $follower ->user_id = $user->id;
     $follower ->follower_id = $request->user_id;
     $follower->following = 16;
     $follower -> save();
     return redirect('home');
     }

     public function unFollow(Request $request, User $user)
     {
        if($request->user()->canUnFollow($user)) {
            $request->user()->following()->detach($user);
         }
            return redirect()->back();
     }

     public function getAllPostLikes(){

     $postlikes = Postlike::get();


     return new PostLikeResource($postlikes);

      }

      public function getAllComments(){

      $comments = Comment::get();


      return new CommentResource($comments);

  }

      public function likepostViaApi(Request $request){
      $user = Auth::user();
      $postlike = new Postlike;

//
//       $previosPostlike = Postlike::limit(1)->where("user_id","=",$request->user_id)->where("post_id","=",$request->post_id)->orderBy('id','DESC')->get();
//
//
//       if(count($previosPostlike) == 0){
//
//           $postlike ->user_id = $request->user_id;
//           $postlike ->post_id = $request->post_id;
//           $postlike ->postlikes = $request->like;
//           if( $postlike -> save()){
//           return '{"success": "1"}';
//            }
//            else{
//                 return '{"success": "0"}';
//            }
//       }
//
// else{
//     $postLikeId = $previosPostlike[0]["id"];
//     $previosPostlike = PostLike::find($postLikeId);
//     $previosPostlike ->like= $request->like;
//     $previosPostlike->save();
// }


      $postlike ->user_id = $request->user_id;
      $postlike ->post_id = $request->post_id;
      $postlike ->postlikes = $request->like;
      if( $postlike -> save()){
      return '{"success": "1"}';
       }
       else{
            return '{"success": "0"}';
       }
   }
   // public function getPostComments($postId){
   //
   // $comments = Comment::where("post_id","=",$postId)->get();
   //
   // return new CommentResource($comments);
   //
   //  }
   public function getPostComments($postId){

   $comments = Comment::where("post_id","=",$postId)->get();
   return new CommentResource($comments);
   }


   public function newCommentViaApi(Request $request){

$comment = new Comment;
$comment ->user_id = $request->user_id;
$comment ->post_id = $request->post_id;
$comment ->comment = $request->comment;
if( $comment -> save()){
return '{"success": "1"}';
 }
 else{
      return '{"success": "0"}';
 }
}

//   public function getAllEditPosts(){
//
//   $editPosts = EditPost::get();
//
//
//   return new EditPostResource($editPosts);
//
// }


     // public function unFollow(Request $request){
     // $user = Auth::user();
     // $unFollow = new unFollow;
     // $unFollow ->user_id = $user->id;
     // $unFollow ->follower_id = $request->user_id;
     // $unFollow ->unfollow = $request->unfollow;
     // $unFollow -> save();
     // $user->followers()->detach(auth()->user()->id);
     // return redirect()->back()->with('success', 'Successfully unfollowed the user.');
     //
     //  }
}


// public function follower(Request $request){
// $user = Auth::user();
// $follower = new follower;
// $follower ->user_id = $user->id;
// $follower ->follower_id = $request->post_id;
// $follower ->following = $request->follow;
// $follower -> save();
// return redirect('home');
//  }
//

//
// public function followUser(User $user)
// {
//   $user = User::find($profileId);
//   if(! $user) {
//
//      return redirect()->back()->with('error', 'User does not exist.');
//  }
//
// $user->followers()->attach(auth()->user()->id);
// return redirect()->back()->with('success', 'Successfully followed the user.');
// }
//
// public function unFollowUser(User $user)
// {
//   $user = User::find($profileId);
//   if(! $user) {
//
//      return redirect()->back()->with('error', 'User does not exist.');
//  }
// $user->followers()->detach(auth()->user()->id);
// return redirect()->back()->with('success', 'Successfully unfollowed the user.');
// }
