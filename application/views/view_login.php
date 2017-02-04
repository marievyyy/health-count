
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Log In</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
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
                <h1 class="logo"><a href="/health/main/">Health Count</a></h1>
                <!-- <i class="icon-remove menu-close"></i> -->
                <a href="/health/main/food" class="smoothScroll">Food</a>
                <a href="/health/main/water" class="smoothScroll">Water</a>
                <a href="/health/main/coffee" class="smoothScroll">Coffee</a>
                <a href="/health/main/sleep" class="smoothScroll">Sleep</a>
                <a href="/health/main/meditation" class="smoothScroll">Meditation</a>
                <a href="/health/main/about" class="smoothScroll">About-Us</a>
                <a href="/health/main/profile" class="smoothScroll">Profile</a>
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
                    <form id="formlogin" method="post">
                        <div class="login-block">
                          <h1>Login</h1>
                          <p class="error" id="error"></p>
                          <input type="text" value="" name="username" placeholder="Username" id="username" />
                          <input type="password" name="password" value="" placeholder="Password" id="password" />
                          <input type="submit" name="submit" class="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Log In -->
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/validate-login.js"></script>

    </body>
</html>
