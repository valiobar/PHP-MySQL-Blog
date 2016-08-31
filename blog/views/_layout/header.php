<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="<?=APP_ROOT?>/content/images/favicon.ico" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/bootstrap.min.css">
    <link rel="stylesheet" href="<?=APP_ROOT?>/content/styles.css" />
    <script src="<?=APP_ROOT?>/content/scripts/jquery-3.0.0.min.js"></script>
    <script src="<?=APP_ROOT?>/content/scripts/blog-scripts.js"></script>
    <script src="<?=APP_ROOT?>/content/bootstrap.min.css"></script>
    <title><?php if (isset($this->title)) echo htmlspecialchars($this->title) ?></title>
</head>

<body>
<header>

<div style="min-height: 150px" class="tashak col-md-12">
    </div>
<div class="headerHome col-md-12">
    <nav class=" navbar navbar-inverse navbar-fixed-top sticky col-md-12" >

            <div class="  navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand " href="#">WebSiteName</a>

            </div>
            <div class=" collapse navbar-collapse col-md-12" id="myNavbar">

                <ul class="homeNav nav navbar-nav col-md-10">
                    <li class="active"><a href="<?=APP_ROOT?>/">Home</a></li>
                    <?php if ($this->isLoggedIn) : ?>
                    <li> <a href="<?=APP_ROOT?>/posts">Posts</a></li>
                    <li> <a href="<?=APP_ROOT?>/posts/create">Create Post</a></li>
                    <li>  <a href="<?=APP_ROOT?>/users">Users</a></li>

                    <div class=" home dropdown col-md-3">
                       <div class="col-md-4">
                        <a class= "dropdown-toggle" data-toggle="dropdown" href="#">

                     <?php if (isset($_SESSION['picture'])){
                         $image = IMAGE_ROOT.$_SESSION['picture'];

                       echo '<img class="avatar" src="',$image, '" alt="', $image, '" />';
                     } else {
                         $avatar = IMAGE_ROOT.'avatar.png';
                         echo '<img class="avatar" src="',$avatar, '" alt="', $avatar, '" />';
                     }
                     ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=APP_ROOT?>/users/logout">Logout</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </div>
                        <div class="hello col-md-8 ">
                            <span>Hello, <b><?=htmlspecialchars($_SESSION['username'])?></b></span>
                        </div>
              </div  >

                <?php else: ?>
                </ul>

                <ul style="margin-right: 5px" class=" nav navbar-nav navbar-right">
                    <li><a href="<?=APP_ROOT?>/users/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="<?=APP_ROOT?>/users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php endif; ?>
                </ul>

            </div>

    </nav>
</div>
</header>

<?php require_once('show-notify-messages.php'); ?>
