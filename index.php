<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Life +</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>



<!-------------------------------------------------------------------------------------------------------------------------------------------->
<script src="./locationDetect.js"></script>
<script src="./fbSdk.js"></script>
<script src="./fbLogin.js"></script>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>

<div class="fb-like" data-href="https://www.facebook.com/Life-435580486652462/" data-width="100" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

<body>
<!--    <script>< div id = "fb-root" > < /div>
                < script > (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.5&appId=750598631739997";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script></script>-->

    <div id="status"></div>

    <?php
    if (isset($_SESSION['username'])) {
        echo '<span class=asd><span class=logout>' . $_SESSION['username'] . '</span> <a class=logout href="?logout">Logout</a></span>';
    } else {
        echo '<span class=asd><a class=loginregister href="?register">Register</a>
            <a class=loginregister href="?login">Login</a></span>';
    }
    if (isset($_GET['register'])) {
        include './registerLogin/registerForm.php';
    }
    ?>
    <!------------------------------------------------------------------------------------------------------------------------------------------>

    <header>
        <div class="container over-nav">
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
        </div>
        <button onclick="getLocation()">GetLocation</button>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>			
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="profile/index.php">Profile</a></li>
                        <li><a href="#">Messages</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav main-menu ale">
                        <li><a class="notific" href="#"><i class="fa fa-bell"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="top-ava dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img class="user-ava" src="images/sample-avatar.jpg"></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <!-- SIDEBAR -->
            <div class="col-md-3 sidebar" id="sidebar">
                <div class="side-widget gr-border widget">
                    <div class="ava-bg" style="background-image: url(images/sample-bg.jpg);"></div>
                    <div class="user-info-box">
                        <a href="profile/index.php">
                            <img class="user-avatar" src="images/sample-avatar.jpg">
                        </a>

                        <h5 class="user-name">
                            <a class="user-name" href="profile/index.html">Dave Gamache</a>
                        </h5>

                        <p class="alu">
                            This is a little about yourself.
                        </p>

                        <ul class="user-meter">
                            <li class="meter-value">
                                <a href="#" class="aku" data-toggle="modal">
                                    Health
                                    <h5 class="ali">35%</h5>
                                </a>
                            </li>

                            <li class="meter-value">
                                <a href="#" class="aku" data-toggle="modal">
                                    Reviews
                                    <h5 class="ali">5</h5>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="side-widget gr-border widget">
                    <div class="about-box">
                        <h5 class="ald">About <small>· <a href="#">Edit</a></small></h5>
                        <ul class="info-list">
                            <li>List Item 1</li>
                            <li>List Item 2</a></li>
                            <li>List Item 3</li>
                            <li>List Item 4</li>
                            <li>List Item 5</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BODY FEED -->
            <div class="col-md-9 feed" id="body-feed">
                <article class="feed-entry gr-border">
                    <!--<a class="article-img" href="#"><img class="article-img" src="/images/sample-avatar.jpg"></a>-->
                    <a class="article-img" href="#"><img class="article-img" src="./images/sample-avatar.jpg"></a>
                    <div class="article-body">
                        <div class="title">
                            <small class="time-stamp">14 min</small>
                            <h5>Title Goes Here</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse luctus nunc lorem, non gravida ligula vehicula a. Nunc laoreet tincidunt laoreet. Nam vitae efficitur nunc, facilisis commodo velit. Nam faucibus convallis semper. Quisque in auctor neque, eget tempor sem. Etiam commodo nec eros ac viverra. Morbi egestas odio elit, id tempor odio vulputate et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur at tristique est. Praesent sagittis aliquam sem nec venenatis. Nulla feugiat est vel sem tristique, et accumsan ipsum congue. Morbi consequat lorem interdum purus mollis, malesuada feugiat eros eleifend. Nam vulputate dui in quam vehicula egestas.</p>
                    </div>
                </article>
            </div>

        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>