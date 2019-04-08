<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>twitter</title>

    <!-- Favicon -->
        <link rel="mask-icon" sizes="any" href="https://abs.twimg.com/a/1548278062/icons/favicon.svg" color="#1da1f2">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <!-- Tooltip CSS -->
    <link rel="stylesheet" href="vendors/tooltip/balloon.min.css">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/ionicons/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Calendar CSS-->
    <link rel="stylesheet" href="vendors/calendar/dcalendar.picker.css">

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
                    <li><a href="index-2.html">Home</a></li>
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown6">All Pages</a>
                        <div id="dropdown6" class="dropdown-content submenu row">
                           <div class="col m4 menu_column">
                               <ul>
                                   <li><a href="get-started.html">Get started</a></li>
                                   <li><a href="dashboard.html">Dashboard</a></li>
                                   <li><a href="details.html">Post details</a></li>
                                   <li><a href="details-2.html">Post details 2</a></li>
                                   <li><a href="profile.html" class="active">Profile</a></li>
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
                               </ul>
                           </div>

                        </div>
                    </li>
                    <li><a href="profile.html" class="active">Profile</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
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
                       <div class="search_from">
                            <input placeholder="Search Here" type="text">
                            <a href="#" class="search_icon"><i class="ion-ios-search"></i></a>
                       </div>
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
                                        <img src="images/profile-7.jpg" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <h4>Mosa <small>5 days ago</small></h4>
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
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown1"><img src="images/profile-pic.jpg" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="" height="50" width="50" alt="" class="circle p_2"></a>
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
                                            <p>Hey Masum, I’m looking for you as a new actor for upcoming “Equalizer 2” movie...</p>
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
                                        <img src="images/cute.jpg" style="height:30px; width:30px;" alt="" class="circle responsive-img">
                                        <div class="media_body">
                                            <p><b>bushra</b> submitted a new photo  to a <small>post</small> post you are following.</p>
                                            <h6>5 Minute ago</h6>
                                        </div>
                                   </div>
                               </a>
                            </li>

                            <li>
                               <a href="#">
                                   <div class="media seen">
                                        <img src="images/cute.jpg" style="height:30px; width:30px;" alt="" class="circle responsive-img">
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

                            <li><a href="notifications.html" class="waves-effect chack_all_btn">Check All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- Profile -->
                    <li class="user_dropdown"><a class="dropdown-button" href="#!" data-activates="dropdown_s4"><img src="images/profile-pic.jpg" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;" style="height:50px; width:50px;"alt="" class="circle p_2"></a>
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

    <!-- Tranding-select and banner Area -->
    <div class="banner_area banner_2">
        <img src="images/banner-2.jpg" alt="" class="banner_img">
        <div class="media profile_picture">
            <a href="profile.html"><img src="images/profile-hed-1.jpg"  style="" height="150" width="150" alt="" class="circle"></a>
            <div class="media_body">
                <a href="profile.html">Bushra</a>
                <h6>Edmonton</h6>
            </div>
        </div>
    </div>
    <section class="author_profile">
        <div class="row author_profile_row">
            <div class="col l4 m6">
                <ul class="profile_menu">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">Videos</a></li>
                    <li class="post_d"><a class="dropdown-button" href="#!" data-activates="dro_pm">...</a>
                        <!-- Dropdown Structure -->
                        <ul id="dro_pm" class="dropdown-content">
                            <li><a href="#">Popular Post</a></li>
                            <li><a href="#">Save Post</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col l4 m6">
                <ul class="post_follow">
                    <li>Posts <b>102</b></li>
                    <li>Followers <b>389</b></li>
                    <li>Following <b>51</b></li>
                </ul>
            </div>
            <div class="col l4 m6">
                <ul class="follow_messages">
                    <li><a href="#" class="waves-effect">Follow</a></li>
                    <li><a href="#" class="waves-effect">Messages</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Tranding Area -->

    <!-- Min Container area -->
    <section class="min_container profile_pages">
        <div class="section_row">
            <div class="middle_section col">
               <!-- Post -->


               <!-- Post -->
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="images/post-5.jpg" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/cute.jpg" style="height:30px; width:30px;" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Rachel</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 btn_floating">
                                <a class="btn-floating waves-effect"><i class="ion-navicon-round"></i></a>
                            </div>
                            <div class="col s4 like_user">
                                <ul class="like_img">
                                    <li><a href="#" class="single_l_1"><img src="images/like-client-1.png" alt=""></a></li>
                                    <li><a href="#" class="single_l"><img src="images/like-client-2.png" alt=""></a></li>
                                    <li><a href="#" class="single_l"><img src="images/like-client-3.png" alt=""></a></li>
                                    <li><a href="#" class="single_l"><img src="images/like-client-4.png" alt=""></a></li>
                                    <li><a href="#" class="mor_like">+8 more</a></li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_5"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_5" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding">Get Around Easily With A New York Limousine Service</a>
                        <p>In the last 10 years Americans have seen a boom in local food markets and for good reason. While Americans continue to buy more fast food, they still expect perfect ingredients and they are finding them.</p>
                   </div>

                    <div class="like_comment_area row">
                        <div class="col s4 btn_floating">
                            <a class="btn-floating waves-effect"><i class="ion-android-share-alt"></i></a>
                            <h6>128k</h6>
                        </div>
                        <div class="col s4 updown_btn">
                            <a href="#"><i class="ion-android-arrow-dropdown-circle"></i></a>
                            <a href="#"><i class="ion-android-arrow-dropup-circle"></i></a>
                            <a href="#" class="count_n">483</a>
                        </div>
                        <div class="col s4 updown_btn comment_c">
                            <a href="#"><i class="ion-ios-chatboxes-outline"></i></a>
                            <a href="#" class="count_n">14</a>
                        </div>
                    </div>
                    <a href="#" class="submit_open_list">tweet</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="pagination_area">
                    <ul class="pagination">
                        <li class="disabled"><a href="#!"><i class="ion-chevron-left"></i></a></li>
                        <li class="active"><a href="#!" class="waves-effect">1</a></li>
                        <li><a href="#!" class="waves-effect">2</a></li>
                        <li><a href="#!" class="waves-effect">3</a></li>
                        <li><a href="#!" class="waves-effect">4</a></li>
                        <li><a href="#!" class="waves-effect">...</a></li>
                        <li><a href="#!" class="waves-effect">20</a></li>
                        <li><a href="#!" class="waves-effect"><i class="ion-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- left side bar -->
            <div class="col">
                <div class="left_side_bar">
                    <div class="categories">
                        <h3 class="categories_tittle me_tittle">About Me</h3>
                        <p>I focus a lot on helping the first time or inexperienced traveler head out prepared and confident in themselves. Starting out as a old traveler can be intimidating. <br> How do you jump into the gigantic travel fray and survive? How can you learn to love delays and long lines?</p>
                    </div>
                    <div class="interests">
                        <h3 class="categories_tittle">Your Interests <span>Edit</span></h3>
                        <ul class="interests_list">
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Arts</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Beauty</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Entertainment</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Travel</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Personal</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Politics</a></li>
                            <li><a href="#"><i class="ion-android-radio-button-off"></i>Space Science</a></li>
                        </ul>
                    </div>
                    <div class="profile">
                        <h3 class="categories_tittle">Profile <span>Edit</span></h3>
                        <ul class="profile_pic">
                            <li><a href="#"><img src="images/profile-1.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-2.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-3.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-4.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-5.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-6.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-7.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-8.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-9.jpg" alt="" class="circle"></a></li>
                            <li><a href="#"><img src="images/profile-10.jpg" alt="" class="circle"></a></li>
                        </ul>
                    </div>
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
                    <div class="calendar_widget">
                        <h3 class="categories_tittle">Calendar</h3>
                        <table class="calendar"></table>
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
                    <div class="advertis">
                        <a href="#"><img src="images/advertis.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <!-- Right side bar -->
            <div class="right_side_bar col">
                <div class="right_sidebar_iner">
                    <div class="popular_posts popular_fast">
                        <h3 class="categories_tittle">My Submisstion</h3>
                        <div class="row valign-wrapper popular_item">
                            <div class="col s3 p_img">
                               <a href="#">
                                    <img src="images/recent-post-1.jpg" alt="" class="circle responsive-img">
                               </a>
                            </div>
                            <div class="col s9 p_content">
                               <a href="#">You submitted a new photo  to <span>How To Talk With Girls</span></a>
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
                               <a href="#">You contributed a new paragraph to <span>10 Ways To Make Easy Suicide</span></a>
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
                               <a href="#">You submitted 10 photos  to <span>Best Photos of The Tech Giants</span></a>
                                <span class="black_text">4 days ago</span>
                            </div>
                        </div>
                        <div class="row valign-wrapper popular_item">
                            <div class="col s3 p_img">
                               <a href="#">
                                    <img src="images/recent-post-4.jpg" alt="" class="circle responsive-img">
                               </a>
                            </div>
                            <div class="col s9 p_content">
                               <a href="#">You submitted a new photo  to <span>How To Talk With Girls</span></a>
                                <span class="black_text">5 days ago</span>
                            </div>
                        </div>
                        <div class="row valign-wrapper popular_item">
                            <div class="col s3 p_img">
                               <a href="#">
                                    <img src="images/recent-post-5.jpg" alt="" class="circle responsive-img">
                               </a>
                            </div>
                            <div class="col s9 p_content">
                               <a href="#">You contributed a new paragraph to <span>10 Ways To Make Easy Suicide</span></a>
                                <span class="black_text">10 days ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="popular_gallery row">
                        <h3 class="categories_tittle">Images</h3>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-1.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-2.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-3.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-4.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-5.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-6.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-7.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-8.jpg" alt=""></a></div>
                        <div class="col s4 p_img"><a href="#"><img src="images/gallery/gallry-s-9.jpg" alt=""></a></div>
                    </div>
                    <div class="trending_area">
                        <h3 class="categories_tittle">Trending</h3>
                        <ul class="collapsible trending_collaps" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="ion-chevron-right"></i>Healthy Environment For Self Esteem</div>
                                <div class="collapsible-body">
                                    <div class="row collaps_wrpper">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem knowing what to pack, but instead have</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                    <div class="row collaps_wrpper collaps_2">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>The Emerald Buddha is a figurine of a sitting Budha, that is the is the palladium</p>
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
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem knowing what to pack, but instead have</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                    <div class="row collaps_wrpper collaps_2">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>The Emerald Buddha is a figurine of a sitting Budha, that is the is the palladium</p>
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
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem knowing what to pack, but instead have</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                    <div class="row collaps_wrpper collaps_2">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>The Emerald Buddha is a figurine of a sitting Budha, that is the is the palladium</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="ion-chevron-right"></i>Don T Let The Outtakes Take You Out</div>
                                <div class="collapsible-body">
                                    <div class="row collaps_wrpper">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>If you will be traveling for a ski vacation, it is often difficult to know what to pack. You may not even have a problem knowing what to pack, but instead have</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                    <div class="row collaps_wrpper collaps_2">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>The Emerald Buddha is a figurine of a sitting Budha, that is the is the palladium</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="ion-chevron-right"></i>Helen Keller A Teller And A Seller</div>
                                <div class="collapsible-body">
                                    <div class="row collaps_wrpper collaps_2">
                                        <div class="col s1 media_l">
                                            <b>1</b>
                                            <i class="ion-android-arrow-dropdown-circle"></i>
                                        </div>
                                        <div class="col s11 media_b">
                                            <a href="#" class="close_btn"><i class="ion-close-round"></i></a>
                                            <p>The Emerald Buddha is a figurine of a sitting Budha, that is the is the palladium</p>
                                            <h6>By <a href="#">Ace</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Min Container area -->

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
            <a href="https://www.templatespoint.net" target="_blank">Bushra Tweeter</a>
        </div>
    </footer>
    <!-- End Footer area -->

    <!--ADD TWEET poup area -->
    <div id="post_modal" class="add_post modal">
        <h2>Create A New Tweet</h2>
        <form class="input_group">
            <div class="input-field">
                <input  type="text" class="validate" placeholder="Add a tittle">
                <textarea class="textarea" placeholder="Add some description"></textarea>
            </div>
            <div class="upload_photo row">
                <ul class="tabs tab_nav">
                    <li class="tab col s6"><a href="#photo"><i class="ion-ios-camera"></i>Add Photo</a></li>
                    <li class="tab col s6"><a class="" href="#video"><i class="ion-ios-videocam"></i>Add video</a></li>
                </ul>
                <div id="photo" class="col s12 tabs_content">
                    <div class="photo_u">
                        <img src="images/upload.png" alt="">
                        <h4>Select files to upload <small>or drag &amp; drop files</small></h4>
                    </div>
                </div>
                <div id="video" class="col s12 tabs_content">
                    <div class="photo_u">
                        <img src="images/upload.png" alt="">
                        <h4>Select files to upload <small>or drag &amp; drop files</small></h4>
                    </div>
                </div>
            </div>
            <div class="input-field col s12 select_option">
                <select>
                    <option value="" disabled selected>Choose a category</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="2">Option 2</option>
                    <option value="2">Option 2</option>
                </select>

                <div class="chips chips-placeholder" data-index="0" data-initialized="true">
                    <input class="input" placeholder="Enter a tag">
                </div>
            </div>
            <div class="input-field add_link">
                <input  type="text" class="validate" placeholder="Add a link">
                <span>optional</span>
            </div>
            <div class="yes_no">
                <h4>Anyone can submit?</h4>
                <div class="flipswitch"></div>
            </div>
            <div class="row submit_btn_area">
               <div class="col s6">
                    <button class="waves-effect"><i class="ion-folder"></i>Save draft</button>
               </div>
               <div class="col s6">
                    <button class="waves-effect col s6"><i class="ion-eye"></i>Preview post</button>
               </div>
               <div class="col s12">
                    <button class="waves-effect publish">Publish</button>
               </div>
            </div>
        </form>
    </div>
    <!-- EndADD TWEET poup area -->

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
    <script src="vendors/check-button/jquery.jqflipswitch.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>