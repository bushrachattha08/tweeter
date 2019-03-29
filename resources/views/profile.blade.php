@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>{{ $user->name }}</h3>

        </div>
    </div>
</div>
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
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="glyphicon glyphicon-camera">

                    <div class="container">
                        <div class="row justify-content-center">


                            <div class="col-md-12">
                                <h1>   Welcome  {{ $user->name }}     </h1>

                                <div class="nav">
                                    <form name="profile-form" method="post" action="/edit-profile">
                                        @csrf
                                        <div class="glyphicon glyphicon-user">
                                            <div class="col-md-12 align-right">
                                                name
                                                <br/>
                                                {{ $user->name }}

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 align-right">
                                                lastname
                                                <br/>
                                                {{ $user->last_name }}
                                            </div>
                                        </div>
                                        <div class="glyphicon glyphicon-envelope">
                                            <div class="col-md-12 align-right">

                                                {{ $user->email }}
                                            </div>

                                        </div>

                                        <div class="glyphicon glyphicon-user">
                                            <div class="col-md-12 align-right">
                                                gender
                                                <br/>
                                                {{ $user->gender }}
                                            </div>

                                        </div>

                                        <div class="glyphicon glyphicon-calendar">
                                            <div class="col-md-12 align-right">
                                                dob<br/>

                                                {{ $user->dob }}<br/>
                                            </div>

                                        </div>

                                        <div class="glyphicon glyphicon-globe">
                                            <div class="col-md-12 align-right">
                                                country<br/>

                                            </div>
                                            <div class="col-md-12 align-right">

                                                {{ $user->country }}<br/>
                                            </div>

                                        </div>
                                        <div class="glyphicon glyphicon-phone">
                                            <div class="col-md-12 align-right">
                                                telephone<br/>
                                                {{ $user->telephone }}<br/>
                                            </div>

                                        </div>
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

@endsection
