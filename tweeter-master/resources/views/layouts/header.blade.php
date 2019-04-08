<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>twitter</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
          <link rel="stylesheet" href="css/style.css" media="all" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1548278062/icons/favicon.svg" color="#1da1f2">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Tooltip CSS -->
    <link rel="stylesheet" href="vendors/tooltip/balloon.min.css">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Check-button CSS-->
    <link rel="stylesheet" href="vendors/calendar/dcalendar.picker.css">
    <!-- Calendar CSS-->
    <link rel="stylesheet" href="vendors/check-button/jqflipswitch.default.style.css">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" href="css/style.css" media="all" />

</head>
<body>
    <!-- Header_Area -->
    <nav class="header_area">
        <div class="custom_container">
            <div class="nav-wrapper">
                <a href="index-2.html" class="brand-logo"><img src="images/logo.png" alt=""></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <a href="#post_modal" class="waves-effect btn post_btn sm_post_btn modal-trigger"><i class="ion-plus"></i>Add Tweet</a>
                <ul class="left_menu hide-on-med-and-down">
                    <li><a href="index-2.html" class="active">Home</a></li>
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown6">All Pages</a>
                        <div id="dropdown6" class="dropdown-content submenu row">
                           <div class="col m4 menu_column">
                               <ul>
                                   <li><a href="get-started.html">Get started</a></li>
                                   <li><a href="dashboard.html">Dashboard</a></li>
                                   <li><a href="details.html">Post details</a></li>
                                   <li><a href="details-2.html">Post details 2</a></li>
                                   <li><a href="profile.html">Profile</a></li>
                               </ul>
                           </div>
                           <div class="col m4 menu_column">
                               <ul>
                                   <li><a href="messages.html">Messages</a></li>
                                   <li><a href="requests.html">Requests</a></li>
                                   <li><a href="read-later.html">Read-Later</a></li>
                                   <li><a href="notifications.html">Notifications</a></li>
                                   <li><a href="block-list.html">Block-list</a></li>
                               </ul>
                           </div>
                           <div class="col m4 menu_column">
                               <ul>
                                   <li><a href="photos.html">Photos</a></li>
                                   <li><a href="photos-2.html">Photos v2</a></li>
                                   <li><a href="video.html">Videos</a></li>
                                   <li><a href="error.html">Error (404)</a></li>
                                   <li><a href="#modal1" class="waves-effect modal-trigger">Sign in</a></li>
                               </ul>
                           </div>
                        </div>
                    </li>
                    <li><a href="{{ url('/home') }}">Profile</a></li>
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="notifications search_sm"><a class="dropdown-button" href="#!" data-activates="dropdown5"><i class="ion-ios-search"></i></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown5" class="dropdown-content">
                           <li class="search_from">
                                <input placeholder="Search and enter" type="text">
                           </li>
                        </ul>
                    </li>
                </ul>
                <ul class="right right_menu hide-on-med-and-down">
                    <li class="search_min">
                       <ul class="search_from">
                            <li><input placeholder="Search Here" type="text"></li>
                            <li><a href="#" class="search_icon"><i class="ion-ios-search"></i></a> </li>
                       </ul>
                    </li>
                    <li><a href="#post_modal" class="waves-effect btn post_btn modal-trigger"><i class="ion-plus"></i><span>Add Tweet</span></a></li>
                    <!-- Follow feed -->
                    <li class="notifications follow"><a class="dropdown-button" href="#!" data-activates="dropdown4"><i class="ion-ios-person-outline"></i><b class="n-number">7</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown4" class="dropdown-content">
                            <li class="hed_notic">Follow feed <span><i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> started following you.</p>
                                            <h6>544 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>started following you.</p>
                                            <h6>32 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect confirm"><i class="ion-android-done"></i></span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-12.jpg" alt="" class="circle responsive-img w_img">
                                        <div class="media_body">
                                            <p>You are now following <b>Mery</b></p>
                                            <h6>Check out her most recent updates.</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-2.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>started following you.</p>
                                            <h6>90 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect close_b"><i class="ion-android-close"></i></span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> started following you.</p>
                                            <h6>544 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect"><i class="ion-android-done"></i></span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-11.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Mosa</b> started following you.</p>
                                            <div class="btn_group left">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="requests.html" class="waves-effect chack_all_btn">Check All Follow Requests</a></li>
                        </ul>
                    </li>
                    <!-- Messages -->
                    <li class="notifications messages"><a class="dropdown-button" href="#!" data-activates="dropdown3"><i class="ion-ios-chatboxes-outline"></i><b class="n-number">3</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown3" class="dropdown-content">
                            <li class="hed_notic">Messages <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Khan <small>12:40pm</small></h4>
                                            <p>Listen, I need to talk to you about this!</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-3.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Rachel <small>2 hours ago</small></h4>
                                            <p>One of the best ways to make a great vacation quickly horrible is to choose the...</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Annie  <small>3 hours ago</small></h4>
                                            <p>Hi</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-5.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Jordan <small>2 days ago</small></h4>
                                            <p>Hey Masum, I am looking for you as a new actor for upcoming Equalizer 2 movie...</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Sam. <small>5 days ago</small></h4>
                                            <p>Hello</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="messages.html" class="waves-effect chack_all_btn">Check All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="notifications"><a class="dropdown-button" href="#!" data-activates="dropdown2"><i class="ion-ios-bell-outline"></i><b class="n-number">5</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown2" class="dropdown-content">
                            <li class="hed_notic">Notifications <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-6.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> submitted a new photo  to a <small>post</small> post you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>downvoted your <small>answer</small> in a post.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Megha</b> commented on your <small>photo</small>.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Peter Parker</b> is now following you.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra </b> submitted a new photo  to a <small>post</small> you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="notifications.html" class="waves-effect chack_all_btn">Check All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- Profile -->
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown1"><img src="images/profile-pic.jpg" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" alt="" class="circle p_2"></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="profile.html"><i class="ion-person"></i>My profile</a></li>
                            <li><a href="read-later.html"><i class="ion-android-folder-open"></i>Saved Articles</a></li>
                            <li class="b_t"><a href="#"><i class="ion-android-notifications"></i>Notification settings</a></li>
                            <li class="b_b"><a href="#"><i class="ion-ios-locked"></i>Change Password</a></li>
                            <li><a href="#"><i class="ion-gear-b"></i>Settings</a></li>
                            <li><a href="#"><i class="ion-ios-flag"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="ion-podium"></i>FAQ</a></li>
                            <li><a href="#"><i class="ion-power"></i>Log out</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li class="search_min">
                       <div class="search_from">
                            <input placeholder="Search Here" type="text">
                            <a href="#" class="search_icon"><i class="ion-ios-search"></i></a>
                       </div>
                    </li>
                    <li><a href="index-2.html">Home</a></li>
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s0">All Pages</a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s0" class="dropdown-content">
                           <li><a href="get-started.html">Get started</a></li>
                           <li><a href="dashboard.html">Dashboard</a></li>
                           <li><a href="details.html">Post details</a></li>
                           <li><a href="details-2.html">Post details 2</a></li>
                           <li><a href="profile.html">Profile</a></li>
                           <li><a href="messages.html">Messages</a></li>
                           <li><a href="requests.html">Requests</a></li>
                           <li><a href="read-later.html">Read-Later</a></li>
                           <li><a href="notifications.html">Notifications</a></li>
                           <li><a href="block-list.html">Block-list</a></li>
                           <li><a href="photos.html">Photos</a></li>
                           <li><a href="photos-2.html">Photos v2</a></li>
                           <li><a href="video.html">Videos</a></li>
                           <li><a href="block-list.html">Error (404)</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shortcodes</a></li>
                    <li><a href="#">All Elements</a></li>
                    <!-- Follow feed -->
                    <li class="notifications follow"><a class="dropdown-button" href="#!" data-activates="dropdown_s1"><i class="ion-ios-person-outline"></i><b class="n-number">7</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s1" class="dropdown-content">
                            <li class="hed_notic">Follow feed <span><i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> started following you.</p>
                                            <h6>544 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>started following you.</p>
                                            <h6>32 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect confirm"><i class="ion-android-done"></i></span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-12.jpg" alt="" class="circle responsive-img w_img">
                                        <div class="media_body">
                                            <p>You are now following <b>Mery</b></p>
                                            <h6>Check out her most recent updates.</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-2.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>started following you.</p>
                                            <h6>90 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect close_b"><i class="ion-android-close"></i></span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> started following you.</p>
                                            <h6>544 mutual</h6>
                                            <div class="btn_group">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect"><i class="ion-android-done"></i></span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-11.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Mosa</b> started following you.</p>
                                            <div class="btn_group left">
                                                <span class="waves-effect follow_b">Follow back</span>
                                                <span class="waves-effect">Block</span>
                                            </div>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="requests.html" class="waves-effect chack_all_btn">Check All Follow Requests</a></li>
                        </ul>
                    </li>
                    <!-- Messages -->
                    <li class="notifications messages"><a class="dropdown-button" href="#!" data-activates="dropdown_s2"><i class="ion-ios-chatboxes-outline"></i><b class="n-number">3</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s2" class="dropdown-content">
                            <li class="hed_notic">Messages <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-1.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Khan <small>12:40pm</small></h4>
                                            <p>Listen, I need to talk to you about this!</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-3.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Rachel <small>2 hours ago</small></h4>
                                            <p>One of the best ways to make a great vacation quickly horrible is to choose the...</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Annie  <small>3 hours ago</small></h4>
                                            <p>Hi</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-5.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Jordan <small>2 days ago</small></h4>
                                            <p>Hey Masum, I'm looking for you as a new actor for upcoming Equalizer 2 movie...</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Sam. <small>5 days ago</small></h4>
                                            <p>Hello</p>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="messages.html" class="waves-effect chack_all_btn">Check All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="notifications"><a class="dropdown-button" href="#!" data-activates="dropdown_s3"><i class="ion-ios-bell-outline"></i><b class="n-number">5</b></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s3" class="dropdown-content">
                            <li class="hed_notic">Notifications <span>Mark all as read <i class="ion-ios-gear-outline"></i></span></li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-6.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> submitted a new photo  to a <small>post</small> post you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Brittany</b>downvoted your <small>answer</small> in a post.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-8.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Megha</b> commented on your <small>photo</small>.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media">
                                        <img src="images/profile-9.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>Peter Parker</b> is now following you.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/profile-10.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra </b> submitted a new photo  to a <small>post</small> you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>
                            <li><a href="notifications.html" class="waves-effect chack_all_btn">Check All Notifications</a></li>
                        </ul>
                    </li>
                    @guest
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }} <span class="caret"></span>
                           </a>

                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                               <a class="dropdown-item" href="/edit-profile">Edit Profile</a>

                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
                    <!-- Profile -->
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s4"><img src="images/profile-pic.jpg" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" alt="" class="circle p_2"></a>
                        <!-- Dropdown Structure -->
                        <ul id="dropdown_s4" class="dropdown-content">
                            <li><a href="profile.html"><i class="ion-person"></i>My profile</a></li>
                            <li><a href="read-later.html"><i class="ion-android-folder-open"></i>Saved Articles</a></li>
                            <li class="b_t"><a href="#"><i class="ion-android-notifications"></i>Notification settings</a></li>
                            <li class="b_b"><a href="#"><i class="ion-ios-locked"></i>Change Password</a></li>
                            <li><a href="#"><i class="ion-gear-b"></i>Settings</a></li>
                            <li><a href="#"><i class="ion-ios-flag"></i>Privacy Policy</a></li>
                            <li><a href="#"><i class="ion-podium"></i>FAQ</a></li>
                            <li><a href="#"><i class="ion-power"></i>Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End  Header_Area -->
    <main class="py-4">
         @yield('content')
    </main>
    <!-- Footer area -->
    <footer class="footer_area">
        <div class="footer_row row">
            <div class="col l3 m6 footer_col">
                <div class="popular_posts">
                    <h3 class="categories_tittle">Popular Posts</h3>
                    <div class="row valign-wrapper popular_item">
                        <div class="col s3 p_img">
                           <a href="#">
                                <img src="images/recent-post-1.jpg" alt="" class="circle responsive-img">
                           </a>
                        </div>
                        <div class="col s9 p_content">
                           <a href="#">Poster can be one of the <br> effective marketing and </a>
                            <span class="black_text">2 days ago</span>
                        </div>
                    </div>
                    <div class="row valign-wrapper popular_item">
                        <div class="col s3 p_img">
                           <a href="#">
                                <img src="images/recent-post-2.jpg" alt="" class="circle responsive-img">
                           </a>
                        </div>
                        <div class="col s9 p_content">
                           <a href="#">Color is so powerful that it can persuade, motivate, inspire</a>
                            <span class="black_text">3 days ago</span>
                        </div>
                    </div>
                    <div class="row valign-wrapper popular_item">
                        <div class="col s3 p_img">
                           <a href="#">
                                <img src="images/recent-post-3.jpg" alt="" class="circle responsive-img">
                           </a>
                        </div>
                        <div class="col s9 p_content">
                           <a href="#">What makes one logo better than another?</a>
                            <span class="black_text">4 days ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l3 m6 footer_col footer_trending">
                <h3 class="categories_tittle">Trending</h3>
                <div class="trending_area">
                    <ul class="collapsible trending_collaps" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="ion-chevron-right"></i>Healthy Environment For Self Esteem</div>
                            <div class="collapsible-body">
                                <div class="row collaps_wrpper">
                                    <div class="col s1 media_l">
                                        <b>1</b>
                                        <i class="ion-android-arrow-dropup-circle"></i>
                                    </div>
                                    <div class="col s11 media_b">
                                        <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                        <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem</p>
                                        <h6>By <a href="#">Ace</a></h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="ion-chevron-right"></i>Burn The Ships</div>
                            <div class="collapsible-body">
                                <div class="row collaps_wrpper">
                                    <div class="col s1 media_l">
                                        <b>1</b>
                                        <i class="ion-android-arrow-dropup-circle"></i>
                                    </div>
                                    <div class="col s11 media_b">
                                        <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                        <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem</p>
                                        <h6>By <a href="#">Ace</a></h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header active"><i class="ion-chevron-right"></i>Harness The Power Of Your Dreams</div>
                            <div class="collapsible-body">
                                <div class="row collaps_wrpper">
                                    <div class="col s1 media_l">
                                        <b>1</b>
                                        <i class="ion-android-arrow-dropup-circle"></i>
                                    </div>
                                    <div class="col s11 media_b">
                                        <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                        <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem</p>
                                        <h6>By <a href="#">Ace</a></h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l3 m6 footer_col">
                <div class="badges">
                    <h3 class="categories_tittle">Badges</h3>
                    <ul class="badges_list">
                        <li><a href="#"><i class="ion-bonfire"></i><span>6</span></a></li>
                        <li><a href="#"><i class="ion-bluetooth"></i></a></li>
                        <li><a href="#"><i class="ion-coffee"></i></a></li>
                        <li><a href="#"><i class="ion-clock"></i> <span>3</span></a></li>
                        <li><a href="#"><i class="ion-camera"></i></a></li>
                        <li><a href="#"><i class="ion-ios-bell-outline"></i><span>2</span></a></li>
                        <li><a href="#"><i class="ion-bluetooth"></i></a></li>
                        <li><a href="#"><i class="ion-coffee"></i></a></li>
                        <li><a href="#"><i class="ion-clock"></i></a></li>
                    </ul>
                </div>

                <div class="social_Sharing">
                    <h3 class="categories_tittle">Social Sharing</h3>
                    <ul class="social_icon">
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#" class="tumblr"><i class="ion-social-tumblr"></i></a></li>
                        <li><a href="#" class="googleplus"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#" class="pinterest"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="#" class="facebook"><i class="ion-social-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col l3 m6 footer_col">
                <img src="images/advertis-3.jpg" alt="" class="responsive-img">
            </div>
        </div>
        <div class="copy_right">
            <a href="" target="_blank">Bushra Tweeter</a>
        </div>
    </footer>
    <!-- End Footer area -->


    <!-- Popup area -->
    <div id="modal2" class="login_popup_aera modal">
        <div class="login_popup_row">
            <img src="images/login-logo.png" alt="">
            <h4>Create a new account on TWEETER <a href="#modal1" class="modal-trigger modal-close">Sign in</a></h4>
            <form class="input_group">
                <div class="input-field">
                    <input  type="text" class="validate" placeholder="Full Name">
                    <input  type="email" class="validate" placeholder="Email">
                    <input type="password" class="validate" placeholder="Password">
                </div>
                <p>
                    <input type="checkbox" id="test" />
                    <label for="test">I accept the <a href="#">Terms and Services</a></label>
                </p>
                <button class="waves-effect">SIgn in</button>
            </form>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="ion-close-round"></i></a>
        </div>
    </div>
    <!-- Log In Popup -->
    <div id="modal1" class="login_popup_aera modal">
        <div class="login_popup_row">
            <img src="images/login-logo.png" alt="">
            <h4>Log in to Open List or <a href="#modal2" class="modal-trigger modal-close">create an account</a></h4>
            <h6>Sign in using social media</h6>
            <ul class="with_social">
                <li><a href="#" class="waves-effect"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="waves-effect facebook"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#" class="waves-effect google-plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <h6>or Sign in using email address</h6>
            <form class="input_group">
                <div class="input-field">
                    <input  type="email" class="validate" placeholder="Email">
                    <input type="password" class="validate" placeholder="Password">
                </div>
                <p>
                    <input type="checkbox" id="test2" />
                    <label for="test2">Remember me <a href="#">Forget password?</a></label>
                </p>
                <button class="waves-effect">SIgn in</button>
            </form>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"><i class="ion-close-round"></i></a>
        </div>
    </div>
    <!-- End Popup area -->

    <!-- jQuery JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>
    <!-- Calendar JS -->
    <script src="vendors/calendar/dcalendar.picker.js"></script>
    <!-- Load JS -->
    <script src="vendors/infinite-scroll/jquery.jscroll.js"></script>
    <!-- Check Button js -->
    <script src="vendors/check-button/jquery.jqflipswitch.min.js"></script>
    <!-- chart js -->
    <script src="vendors/chart/snap.svg-min.js"></script>
    <script src="vendors/chart/svg-donut-chart-framework.js"></script>
    <script src="vendors/chart/highcharts.js"></script>
    <script src="vendors/chart/graph-chart.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</div>
</body>
</html>
