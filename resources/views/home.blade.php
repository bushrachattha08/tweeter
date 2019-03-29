@extends('layouts.app')

@section('content')

<link href="{{ asset('.public/css/tweeter.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#"><img class="img-responsive" alt="" src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?cs=srgb&dl=animal-animal-photography-cat-104827.jpg&fm=jpg"></a>

                    <div class="row">
                        <div class="col-xs-3">
                            <h5>
                                <small>TWEETS</small>
                                <a href="#">1,545</a>
                            </h5>
                        </div>
                        <div class="col-xs-4">
                            <h5>
                                <small>FOLLOWING</small>
                                <a href="#">251</a>
                            </h5>
                        </div>
                        <div class="col-xs-5">
                            <h5>
                                <small>FOLLOWERS</small>
                            </br>
                            <a href="#">251</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default panel-custom">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Trends
                    <small><a href="#">ciao</a></small>
                </h3>
            </div>

            <div class="panel-body">
                <ul class="list-unstyled">
                    <li><a href="#">#Edmonton</a></li>
                    <li><a href="#">#Sydney</a></li>
                    <li><a href="#">#Canada</a></li>
                    <li><a href="#">#Weather</a></li>
                    <li><a href="#">#Snow</a></li>
                    <li><a href="#">#Traffic</a></li>
                    <li><a href="#">#News</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="media">
                    <a class="media-left" href="#444">
                            <img src="https://upload.wikimedia.org/wikipedia/fr/c/c8/Twitter_Bird.svg" height="40" width="40"/>
                    </a>

                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-10">

                                <div class="row">
                                    <div   class="col-xs-10 col-md-12">
                                        <h2>Tweets</h2>
                                            <h3>{{ $user->name }}</h3>
                                        <form  name="post-form"method="post" action="/posts">
                                            @csrf
                                            <textarea class="form-control tweet-box" name="tweet" placeholder="Enter tweet here">
                                            </textarea>

                                            <button  class="btn btn-success  btn-sm">Tweet</button>

                                        </form>


                                        <?php
                                        if(isset($posts) && ($posts!=null)){
                                            ?>
                                            @foreach ($posts as $post)
                                            <div class="row" >
                                                <br/>
                                                <div class="panel-body">
                                                    <div class="media">
                                                        <a class="media-left" href="#555">

                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">{{ $user->name }}</h4>

                                                            <p>    {{ $post->post }}
                                                                <br/>!{{ $post->user_id }}
                                                                <br/>  {{ $post ->created_at }}
                                                            </p>

                                                            <ul class="nav nav-pills nav-pills-custom">

                                                                <li><a href="#">

                                                                    <form name="delete-form" method="post" action="/delete-post">
                                                                        @csrf
                                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                                        <input type="hidden" name="post_id" value="{{ $post->id }} /">
                                                                        <button class="glyphicon glyphicon-trash"
                                                                        ></button>
                                                                    </form>
                                                                </a></li>
                                                                <li><a href="/editpost/{{ $post->id }}"><span class="glyphicon glyphicon-edit"></span></a></li>
                                                                <li><a href="#">

                                                                    @php
                                                                    if(isset( $post->liked) && ($post->liked==true)){
                                                                        @endphp
                                                                        <form name="postlikes-form" method="post" action="/like-post">
                                                                            @csrf
                                                                            <input type="hidden" name="post_id" value="{{ $post->id }} "/>
                                                                            <input type="hidden" name="like" value="0"/>

                                                                            <button class="glyphicon glyphicon-star"
                                                                            ></button>
                                                                        </form>

                                                                        @php
                                                                    }

                                                                    else{
                                                                        @endphp
                                                                        <form name="postlikes-form" method="post" action="/like-post">
                                                                            @csrf
                                                                            <input type="hidden" name="post_id" value="{{ $post->id }} "/>
                                                                            <input type="hidden" name="like" value="1"/>
                                                                            <button class="glyphicon glyphicon-star"
                                                                            style="background-color: #1da1f2; color:white;"></button>
                                                                        </form>

                                                                        @php
                                                                    }
                                                                    @endphp
                                                                </a></li>


                                                            </ul>
                                                            <li><a href="#"><span class="glyphicon glyphicon-comment"></span>
                                                                <form method="post" action="/comment">
                                                                    @csrf
                                                                    <textarea class="form-control comment-box" name="comment" placeholder="comment here"></textarea>
                                                                    <br/>
                                                                    <input type="hidden" name="user_id"  value="{{ $post->user_id}}" />
                                                                    <input type="hidden" name="post_id"  value="{{ $post->id}}" />

                                                                    <button  class="btn btn-success  btn-sm">comment</button>
                                                                </form>
                                                            </a></li>

                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-11 offset-md-1">

                                                        @foreach ($post->comments as $comment)
                                                        <div class="single-comment">
                                                            {{ $comment->comments }} <br/>
                                                            by - {{ $comment->user_id }}
                                                            <br/>
                                                        </div>

                                                        <li><a href="#">

                                                            <form name="delete-form" method="post" action="/delete-comment">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE"/>
                                                                <input type="hidden" name="comment_id" value="{{ $comment->id }} /">
                                                                <button class="glyphicon glyphicon-trash"
                                                                ></button>
                                                            </form>
                                                        </a></li>


                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                            <?php
                                        } ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </br>
        </br>
    </div>
</div>

</div>
<div class="col-sm-3">
    <div class="panel panel-default panel-custom">
        <div class="panel-heading">
            <h3 class="panel-title">
                Who to follow
                <small><a href="#">Refresh</a> ● <a href="#">View all</a></small>
            </h3>
        </div>
<div class="panel-body">
    <div class="media">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            @if(auth()->user()->isNot($user))
                            @if(auth()->user()->isFollowing($user))
                            <a href="{{ route('user.unfollow', $user) }}" class="btn btn-danger">No Follow</a>
                            @else
                            <a href="{{ route('user.follow', $user) }}" class="btn btn-success">Follow</a>
                            @endif
                            @endif

                        </div>
                    </div>
                </div>

            </div>

            @foreach ($potentialfollowers as $potentialfollower)
            <form method="post" action="follow">
                @csrf
                <input type="hidden" name="user_id" value="{{ $potentialfollower->id}}">
                <div class="$potential-follower">
                    <div class="row">
                        <div class="media">
                            <div class="media-right">
                                <img src="https://upload.wikimedia.org/wikipedia/fr/c/c8/Twitter_Bird.svg" height="40" width="40"/>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">{{ $potentialfollower -> name}}</h4>
                                <!-- <a href="/users/{{ $potentialfollower->id }}">{{ $potentialfollower -> name}} -->
                                <a href="{{ route('user.follow', $user) }}" class="btn btn-default btn-xs">    </a>
                                <div class="media">
                                    <div class="container">
                                        <div class="row">

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5 ">
                                    <div class="row">
                                        <div class="col-md-11 offset-md-1">
                                            @php
                                            if(isset( $user->following) && ($user->following==true)){
                                                @endphp
                                                <form name="follow-form" method="post" action="/follow">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->id }} "/>
                                                    <input type="hidden" name="follow" value="0"/>

                                                    <button class="glyphicon glyphicon-user"
                                                    style="background-color: #1da1f2; color:white;">UnFollow</button>
                                                </form>

                                                @php
                                            }

                                            else{
                                                @endphp
                                                <form name="follow-form" method="post" action="/follow">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->id }} "/>
                                                    <input type="hidden" name="follow" value="1"/>
                                                    <button class="glyphicon glyphicon-user"
                                                    style="background-color: #1da1f2; color:white;">follow</button>
                                                </form>

                                                @php
                                            }
                                            @endphp

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach

        </div>
        <div class="panel-footer">
            <a href="posts">
                <span class="glyphicon glyphicon-user"></span>
                Find people you know
            </a>
        </div>
    </div>
    <div class="well well-sm">
        <ul class="list-inline">
            <li>© 2019 Twitter</li>
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Ads info</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Status</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Businesses</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Developers</a></li>
        </ul>
    </div>
   </div>
  </div>
</div>



@endsection
@endsection
