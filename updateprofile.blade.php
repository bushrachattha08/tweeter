@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $user->name }}</h3>
            <!-- @if(auth()->user()->isNot($user))
      @if(auth()->user()->isFollowing($user))
           <a href="{{ route('user.unfollow', $user) }}" class="btn btn-danger">No Follow</a>
      @else
           <a href="{{ route('user.follow', $user) }}" class="btn btn-success">Follow</a>
      @endif
@endif -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="#"><img class="img-responsive" alt="" src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?cs=srgb&dl=animal-animal-photography-cat-104827.jpg&fm=jpg"></a>

                    <div class="panel panel-default panel-custom">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Trends
                                <small><a href="#">ciao</a></small>
                            </h3>
                        </div>

                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li><a href="#">#hahhaha</a></li>
                                <li><a href="#">#blah blah</a></li>
                                <li><a href="#">#yah yahaa</a></li>
                                <li><a href="#">#bushra is awsome</a></li>
                                <li><a href="#">#hahhaha wah wah</a></li>
                                <li><a href="#">#snow </a></li>
                                <li><a href="#">#cool it is</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="media">
                        <a class="media-left" href="#444">
                            <img alt="" class="media-object img-rounded" src="http://placehold.it/35x35">
                        </a>
                        <div class="container">
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <h1> Update New Life</h1>

                                    <div class="nav">
                                        <form name="profile-form" method="post" action="/edit-profile">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 align-right">
                                                    name
                                                </div>
                                                <div class="col-xs-8 col-md-9">


                                            <input type="text" class="username" name="name" placeholder="Username"  value="{{ $user->name }}" required/><br/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 align-right">
                                            lastname
                                        </div>
                                        <div class="col-xs-8 col-md-9">
                                            <input type="text" name="last_name" class="username" placeholder="Username"  value="{{ $user->last_name }}" required /><br/>
                                </div>
                            </div>
                                    <div class="row">
                                        <div class="col-md-12 align-right">
                                            email
                                        </div>
                                        <div class="col-xs-8 col-md-9">

                                    <input type="email" class="email" name="email" placeholder="email" value="{{ $user->email }}" required/><br/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 align-right">
                                    gender
                                </div>
                                <div class="col-xs-8 col-md-9">
                               <input type="text" class="username"  name="gender" placeholder="gender" value="{{ $user->gender }}" required /><br/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 align-right">
                            dob
                        </div>
                        <div class="col-xs-8 col-md-9">
                     <input type="dob" class="username" placeholder="dob"  name="dob" value="{{ $user->dob }}" required/><br/>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-12 align-right">
                        country
                    </div>
                    <div class="col-xs-8 col-md-9">
                       <input type="text" class="username" placeholder="country" name="country"  value="{{ $user->country }}" required /><br/>
                     </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 align-right">
                            telephone
                        </div>
                        <div class="col-xs-8 col-md-9">
                           <input type="text" class="username" placeholder="telephone" name="telephone"  value="{{ $user->telephone }}" required /><br/>
                         </div>
                        </div>


                                            <input type="submit" value="save changes" class="button" alt=""/></br>
                                            <label>
                                                <input type="checkbox" value="Remember me" class="checkbox"/> <span>Remember me</span>
                                            </label>
                                        </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
