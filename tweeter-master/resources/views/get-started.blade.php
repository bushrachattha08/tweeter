<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Let’s hear what people are talking about. Join Tweeter today.">
    <meta name="author" content="Bushra">
    <meta name="Distribution" content="Tweeter - See what’s happening in the world right now" />
    <meta name="Copyright" content="Copyright Bushra 2019." />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>tweeter</title>
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
    <!-- Calendar CSS-->
    <link rel="stylesheet" href="vendors/calendar/dcalendar.picker.css">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" href="css/style.css" media="all" />


</head>
<body>

    <!-- Header_Area -->
    <nav class="header_area header_2">
        <div class="nav-wrapper">

             <a href="" class="brand-logo"><img src="https://pinksaltire.com/wp-content/uploads/2018/08/Twitter-GIF.gif" alt="" style="max-width: 200px; max-height: 200px;"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="#modal1" class="waves-effect btn post_btn sm_post_btn modal-trigger">Get started</a>
            <ul class="left_menu hide-on-med-and-down">
                <li><a href="#">About membership</a></li>
            </ul>
            <ul class="right right_menu hide-on-med-and-down">
                <li class="search_min">
                   <div class="search_from">
                        <input placeholder="Search Here" type="text">
                        <a href="#" class="search_icon"><i class="ion-ios-search"></i></a>
                   </div>
                </li>
                <li><a href="#modal1" class="waves-effect btn post_btn modal-trigger">Get started</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li class="search_min">
                   <div class="search_from">
                        <input placeholder="Search Here" type="text">
                        <a href="#" class="search_icon"><i class="ion-ios-search"></i></a>
                   </div>
                </li>
                <li><a href="#">About membership</a></li>
            </ul>
        </div>
    </nav>
    <!-- End  Header_Area -->

    <!-- Tranding-select and banner Area -->
    <ul class="tranding_select">
        <li><a href="#" class="waves-effect btn">Latest</a></li>
        <li><a href="#" class="waves-effect btn">Trending</a></li>
        <li><a href="#" class="waves-effect btn">Featured</a></li>
    </ul>

    <div class="banner_area" >
        <div class="header">
            <div class="info">
                <h2>I'm Bushra</h2>
                <h1> I made a
                    <span class="type" data-wait="3000" data-words=
                    '[
                    "TWEETER",
                    "better Version of Twitter"
                    ]'>
                </span>
            </h1>
        </div>
        <div class="container">

        </div>
    </div>
</div>

    <!-- End Tranding Area -->
    <section class="your_states">
        <div class="custom_container">
            <div class="row states_row">
               <h2>TWEETER Status</h2>
                <div class="col xl3 m6 s12">
                    <div class="post_views">
                        <h6>Post Views</h6>
                        <img src="images/icons/cercle.png" alt="">
                        <h2>1,425<small>+52%</small></h2>
                    </div>
                </div>
                <div class="col xl3 m6 s12">
                    <div class="post_views">
                        <h6>Upvotes</h6>
                        <img src="images/icons/shap.png" alt="">
                        <h2>265<small class="shap">-20%</small></h2>
                    </div>
                </div>
                <div class="col xl3 m6 s12">
                    <div class="post_views">
                        <h6>Comments</h6>
                        <img src="images/icons/shap-2.png" alt="">
                        <h2>1,425<small class="shap_2">+52%</small></h2>
                    </div>
                </div>
                <div class="col xl3 m6 s12">
                    <div class="post_views">
                        <h6>Profile views</h6>
                        <img src="images/icons/shap-3.png" alt="">
                        <h2>198<small class="shap_3"> -10%</small></h2>
                    </div>
                </div>
            </div>
            <div class="chart_area row">
                <div class="col xl4 s12">
                    <div class="cercle_chart">
                        <h6>Pie chart</h6>
                        <div class="input-field">
                            <select>
                                <option value="" disabled selected>Month</option>
                                <option value="1">Years</option>
                            </select>
                        </div>
                        <h5>All Visitors</h5>
                        <h2>20k</h2>
                        <svg id="svg"></svg>
                    </div>
                </div>
                <div class="col xl8 s12">
                   <div class="graph_chart_area">
                        <div class="graph_chart_heder">
                            <h6>Graph Chart</h6>
                            <ul class="views_month">
                                <li><a href="#">Views <i class="ion-ios-arrow-thin-up"></i></a></li>
                                <li><a href="#">Months <i class="ion-ios-arrow-thin-right"></i></a></li>
                            </ul>
                            <div class="input-field">
                                <select>
                                    <option value="" disabled selected>Month</option>
                                    <option value="1">Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="graph_chart">
                            <div id="chart">
                                <ul id="numbers">
                                    <li><span>20k</span></li>
                                    <li><span>15k</span></li>
                                    <li><span>10k</span></li>
                                    <li><span>5k</span></li>
                                    <li><span>0k</span></li>
                                </ul>

                                <ul id="bars">
                                    <li><div data-percentage="60" class="bar"></div><span>Jul 16</span></li>
                                    <li><div data-percentage="45" class="bar"></div><span></span></li>
                                    <li><div data-percentage="70" class="bar"></div><span></span></li>
                                    <li><div data-percentage="55" class="bar"></div><span>Oct 16</span></li>
                                    <li><div data-percentage="70" class="bar"></div><span></span></li>
                                    <li><div data-percentage="80" class="bar"></div><span></span></li>
                                    <li><div data-percentage="70" class="bar"></div><span>Jan</span></li>
                                    <li><div data-percentage="90" class="bar"></div><span></span></li>
                                    <li><div data-percentage="60" class="bar"></div><span></span></li>
                                    <li><div data-percentage="40" class="bar"></div><span>Apr</span></li>
                                    <li><div data-percentage="50" class="bar"></div><span></span></li>
                                    <li><div data-percentage="60" class="bar"></div><span></span></li>
                                    <li><div data-percentage="70" class="bar"></div><span>Jul</span></li>
                                    <li><div data-percentage="23" class="bar"></div><span></span></li>
                                    <li><div data-percentage="80" class="bar"></div><span>Oct</span></li>
                                    <li><div data-percentage="44" class="bar"></div><span> </span></li>
                                    <li><div data-percentage="23" class="bar"></div><span></span></li>
                                </ul>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            <div class="row user_signup_area">
                <div class="col s12 xl6">
                    <div class="user_signup">
                       <h4>User signup</h4>
                        <table class="admin_table responsive-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Time</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Isaiah Brewer</td>
                                    <td>noah_kessler@rogahn.biz</td>
                                    <td>4 min ago</td>
                                    <td><a href="#" class="waves-effect">Contributor</a></td>
                                </tr>
                                <tr>
                                    <td>Tyler Tucker</td>
                                    <td>zemlak.tate@lakin.us</td>
                                    <td>20 min ago</td>
                                    <td><a href="#" class="waves-effect active">subscriber</a></td>
                                </tr>
                                <tr>
                                    <td>Chad Peterson</td>
                                    <td>royal_turcotte@bernier.biz</td>
                                    <td>1h ago</td>
                                    <td><a href="#" class="waves-effect moderator">Moderator</a></td>
                                </tr>
                                <tr>
                                    <td>Mathilda Sutton</td>
                                    <td>kirlin.agustin@gmail.com</td>
                                    <td>2h ago</td>
                                    <td><a href="#" class="waves-effect admin">Admin</a></td>
                                </tr>
                                <tr>
                                    <td>Lucas Hampton</td>
                                    <td>labadie_maryse@dawn.org</td>
                                    <td>3h ago</td>
                                    <td><a href="#" class="waves-effect moderator">Moderator</a></td>
                                </tr>
                                <tr>
                                    <td>Harold Robbins</td>
                                    <td>labadie_maryse@dawn.org</td>
                                    <td>4h ago</td>
                                    <td><a href="#" class="waves-effect active">subscriber</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col xl6 s12">
                    <div class="progress_reaches">
                        <h4>Progress for post reaches</h4>
                        <h6>Video Posts</h6>
                        <div class="progress">
                            <div class="determinate">40%</div>
                        </div>
                        <h6>Open Lists</h6>
                        <div class="progress">
                            <div class="determinate openlist_p">90%</div>
                        </div>
                        <h6>Normal Blog Posts</h6>
                        <div class="progress">
                            <div class="determinate normal_p">70%</div>
                        </div>
                        <h6>Audio Posts</h6>
                        <div class="progress">
                            <div class="determinate audio_p">20%</div>
                        </div>
                        <h6>Images & Videos</h6>
                        <div class="progress">
                            <div class="determinate img_p">50%</div>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="graph_gradient">
                        <div class="graph_chart_heder">
                            <h4>Line Graph with gradient</h4>
                            <ul class="views_month">
                                <li><a href="#">Traffic <i class="ion-ios-arrow-thin-up"></i></a></li>
                                <li><a href="#">Minutes <i class="ion-ios-arrow-thin-right"></i></a></li>
                            </ul>
                            <ul class="day_month_btn">
                                <li><a href="#" class="waves-effect active">Daily</a></li>
                                <li><a href="#" class="waves-effect">Weekly</a></li>
                            </ul>
                        </div>
                        <div class="highcharts-container" id="purchase-graph"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Min Container area -->
    <section class="min_container min_pages">
        <div class="section_row">
            <div class="middle_section col" id="infinite_scroll">
               <!-- Post -->
               <div class="fast_post">
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="https://cdn.dribbble.com/users/220167/screenshots/2373375/resp_dribbble.gif" alt="images/post.jpg">
                            <span><i class="ion-android-radio-button-off"></i>Photography</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-2.jpg" alt="" class="circle"></div>
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
                                   <li>
                                        <ul class="hide_sm">
                                            <li><a href="#" class="single_l_1"><img src="images/like-client-1.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-2.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-3.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-4.png" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li>
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding">Let’s look at the differences between Tweeter and Twitter and see if you are missing opportunities using one network and not the other.</a>
                        <p>

Tweeter networks People while Twitter networks ideas and topics.
Tweeter allows you to write a book (not that anyone is going to read it). Twitter limits to 140 characters per tweet.
Tweeter and Twitter allow the use of hashtags to group ideas / topics. Tweeter incorporated this ideas patterned after Twitter.
You can search inside of either network for topics, people, businesses and organizations.
Tweeter allowing more options is considered more difficult to use than Twitter.
Both networks are capable of allowing some customization to include your branding.
Tweeter allows likes and friends while Twitter’s call to action is to follow.
Inside of Tweeter you will Like or Share something. Yet inside of Twitter you will ReTweet or Favorite Something.
You can find your old elementary friends or high school love interest on Tweeter. On Twitter you can find the latest topic trending – like the Oscars, News, Celebrity Stories and more.</p>
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
                </div>
               <!-- Post -->
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src=" https://static1.squarespace.com/static/504eb270e4b07d0f5698991c/t/59289db0414fb5ddd3815ccb/1540415196070/desktop_idaas_cloud_apps.gif" alt="images/post-2.jpg">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-1.jpg" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img">
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_2"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_2" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding"> Powerful That Sell Your Products Fast</a>
                        <p>While Tweeter is a great platform to use when you're reaching out to customers, it's much harder to get likes on a Tweeter page
                            than it is to earn a follower on Twitter. Companies with Tweeter accounts often must work much harder to engage their audience.</p>
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
                </div><!-- End Post -->

               <!-- Post -->
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="https://hannah-design.ca/wp-content/uploads/2018/07/Honeylemon_banner_1-1.gif" alt="images/post-3.jpg">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-2.jpg" alt="" class="circle"></div>
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
                                   <li>
                                        <ul class="hide_sm">
                                            <li><a href="#" class="single_l_1"><img src="images/like-client-1.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-2.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-3.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-4.png" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li>
                                        </ul>
                                   </li>
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_3"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_3" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding">Transparency & Personality.</a>
                        <p>
Transparency & Personality. Tweeter compare to Twitter offers much greater transparency mainly due to variety of content it is able to support on the site. Users can store and share much more information about themselves in order to show who they really are or more importantly for marketers how they want to be seen (creating needs in real time). The shared information is much more sensitive and personal. As a result, it enables the brands to build more personal and sensitive communities. As we all know social is all about sentiment and emotion.</p>
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
                    <a href="#" class="submit_open_list">Tweet</a>
                </div><!-- End Post -->
               <!-- Post -->
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="images/post-4.jpg" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Technology</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-1.jpg" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img">
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_4"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_4" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding">Innovation</a>
                        <p>  Ok people may hate changing layouts and features on Tweeter,
                            but theses slight innovations keep Tweeter fresh and new. It’s important to have that “newness” surrounding the brand as everyone want to be a part of something new. I can’t say that Twitter is not trying to keep up with Tweeter (lists, retweet, new profile view feature is coming),
                            but it seems that Tweeter’s drastic changes creates more buzz and more buzz attracts more users to Tweeter</p>
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
                </div><!-- End Post -->

               <!-- Post -->
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="images/post-5.jpg" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising </span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-1.jpg" alt="" class="circle"></div>
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
                                   <li>
                                        <ul class="hide_sm">
                                            <li><a href="#" class="single_l_1"><img src="images/like-client-1.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-2.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-3.png" alt=""></a></li>
                                            <li><a href="#" class="single_l"><img src="images/like-client-4.png" alt=""></a></li>
                                            <li><a href="#" class="mor_like">+8 more</a></li>
                                        </ul>
                                   </li>
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
                        <a href="#" class="post_heding">Revenue Streams</a>
                        <p>
Tweeter has proven that they are here to stay with the use of real revenue streams. Twitter, to date, has no way of producing money. A company that doesn’t turn a profit is risky to say the least.
Tweeter is clearly making use of it’s model and this shows users that there will still be a Tweeter for years to come.</p>
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
                <div class="post">
                   <div class="post_content">
                        <a href="#" class="post_img">
                            <img src="images/post-6.jpg" alt="">
                            <span><i class="ion-android-radio-button-off"></i>Advertising</span>
                        </a>
                        <div class="row author_area">
                            <div class="col s4 author">
                                <div class="col s4 media_left"><img src="images/author-2.jpg" alt="" class="circle"></div>
                                <div class="col s8 media_body">
                                    <a href="#">Jason</a>
                                    <span>5 Minute ago</span>
                                </div>
                            </div>
                            <div class="col s4 like_user offset-s4">
                                <ul class="like_img">
                                    <li class="post_d"><a class="dropdown-button waves-effect" href="#!" data-activates="post_dropdown_6"><i class="ion-android-more-vertical"></i></a>
                                        <!-- Dropdown Structure -->
                                        <ul id="post_dropdown_6" class="dropdown-content">
                                            <li><a href="#">Report as spam</a></li>
                                            <li><a href="#">Read later</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="post_heding"> 2. Content (Inline Media)</a>
                        <p>
Rather than just posting links, like on Twitter, Tweeter allows you to post real content to your profile.
The ability to post links with a picture attached, photos with all friends tagged and
videos with previews are just some of the ways that make viewing shared content on Tweeter easier and more interesting to user.</p>
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
                </div><!-- End Post -->
                <a href="load-mor.html" class="load-mor btn-large">Loding next</a>
            </div>
            <!-- left side bar -->
            <div class="col">
                <div class="left_side_bar">
                    <div class="categories">
                        <h3 class="categories_tittle">Post Categories</h3>
                        <ul class="categories_icon">
                            <li><a class="tooltip" data-balloon="Rate Post" data-balloon-pos="up"><i class="ion-ios-star"></i></a></li>
                            <li><a href="#" class="tooltip" data-balloon="Time Post" data-balloon-pos="up"><i class="ion-android-time"></i></a></li>
                            <li><a href="#" class="tooltip" data-balloon="Music Post" data-balloon-pos="up"><img src="images/icons/sound.png" alt=""></a></li>
                            <li><a href="#" class="tooltip" data-balloon="Images Post" data-balloon-pos="up"><i class="ion-android-image"></i></a></li>
                            <li><a href="#" class="tooltip" data-balloon="chart Post" data-balloon-pos="up"><i class="large material-icons">insert_chart</i></a></li>
                        </ul>
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
                            <li><a href="#" class="Tweeter"><i class="ion-social-Tweeter"></i></a></li>
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
                    <a href="#">
                        <img src="images/advertis-2.jpg" alt="" class="responsive-img">
                    </a>
                    <div class="popular_posts">
                        <h3 class="categories_tittle">Popular Posts</h3>
                        <div class="row valign-wrapper popular_item">
                            <div class="col s3 p_img">
                               <a href="#">
                                    <img src="images/recent-post-1.jpg" alt="" class="circle responsive-img">
                               </a>
                            </div>
                            <div class="col s9 p_content">
                               <a href="#">Poster can be one of the effective marketing and advertising materials.</a>
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
                               <a href="#">Color is so powerful that it can persuade, motivate, inspire and touch</a>
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
                        <div class="row valign-wrapper popular_item">
                            <div class="col s3 p_img">
                               <a href="#">
                                    <img src="images/recent-post-4.jpg" alt="" class="circle responsive-img">
                               </a>
                            </div>
                            <div class="col s9 p_content">
                               <a href="#">Outdoor advertising is a low budget and effective way of advertising a </a>
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
                               <a href="#">Famous is as famous does and the famous get known through publicity. </a>
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
                        <li><a href="#" class="Tweeter"><i class="ion-social-Tweeter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col l3 m6 footer_col">
                <img src="images/advertis-3.jpg" alt="" class="responsive-img">
            </div>
        </div>
        <div class="copy_right">
            <a href="welcome" target="_blank">Bushra Tweeter</a>
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
    <img src="https://pinksaltire.com/wp-content/uploads/2018/08/Twitter-GIF.gif" alt="" style="max-width: 200px; max-height: 200px;">
            <h4>Log in to Open List or <a href="#modal2" class="modal-trigger modal-close">create an account</a></h4>
            <h6>Sign in using social media</h6>
            <ul class="with_social">
                <li><a href="#" class="waves-effect"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="waves-effect Tweeter"><i class="fa fa-Tweeter-square"></i></a></li>
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
</body>
</html>
