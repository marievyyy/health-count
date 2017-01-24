
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log In</title>


        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/login.css">
        <link rel="stylesheet" href="../application/views/css/homepage.css">
        <link rel="stylesheet" href="../application/views/css/font-awesome.min.css">

        <script src="../application/views/js/jquery.min.js"></script>


    </head>

    <body>

        <!-- Menu -->
        <nav class="menu" id="theMenu">
            <div class="menu-wrap">
                <h1 class="logo"><a href="homepage.html">Health Count</a></h1>
                <!-- <i class="icon-remove menu-close"></i> -->
                <a href="food.html" class="smoothScroll">Food</a>
                <a href="water.html" class="smoothScroll">Water</a>
                <a href="coffee.html" class="smoothScroll">Coffee</a>
                <a href="sleep.html" class="smoothScroll">Sleep</a>
                <a href="meditation.html" class="smoothScroll">Meditation</a>
                <a href="about.html" class="smoothScroll">About-Us</a>
                <a href="profile.html" class="smoothScroll">Profile</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>
        <!-- End of Menu -->

        <div>
            <!-- For the banner section -->
            <div>
                <figure>
                    <div class="main-banner">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner two">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner three">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner four">
                    </div>
                </figure>
            </div>
            <!-- End of the banner section -->


            <!-- Log In -->
            <div>
                <div class="login-container">
                    <div class="logo">Health Count</div>
                    <div class="login-block">
                      <h1>Login</h1>
                      <input type="text" value="" placeholder="Username" id="username" />
                      <input type="password" value="" placeholder="Password" id="password" />
                      <button>Submit</button>
                    </div>
                </div>
            </div>
            <!-- End of Log In -->
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>


    </body>
</html>
