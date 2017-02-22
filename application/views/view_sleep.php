
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Sleep</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/sleep-menu.css">
        <link rel="stylesheet" href="../application/views/css/sleep.css">
        <link rel="stylesheet" href="../application/views/css/font-awesome.min.css">
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu">

    <!-- Menu -->
        <nav class="menu" id="theMenu">
            <div class="menu-wrap">
                <h1 class="logo"><a href="/health/main/">Health Count</a></h1>
                <!-- <i class="icon-remove menu-close"></i> -->
                <a href="/health/main/food" class="smoothScroll">Food</a>
                <a href="/health/main/water" class="smoothScroll">Water</a>
                <a href="/health/main/coffee" class="smoothScroll">Coffee</a>
                <a href="/health/main/activity" class="smoothScroll">Activities</a>
                <a href="/health/main/sleep" class="smoothScroll">Sleep</a>
                <a href="/health/main/meditation" class="smoothScroll">Meditation</a>
                <a href="/health/main/about" class="smoothScroll">About-Us</a>
                <a href="/health/main/profile" class="smoothScroll">Profile</a>
                <a href="/health/main/logout" class="logout">Log Out</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>

        <div class="container sleep-page" align="center">
            <h1>Sleep</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="clock">
                        <div class="hour"></div>
                        <div class="minute"></div>
                  </div> 
                </div>

                <div class="col-md-4">
                    <form id="activityRun" method="post">
                        <h3 class="start">Start of Sleep Time:</h3>
                        <input class="work" type="text" name="distance" id="distance" placeholder="">
                        <h3 class="last">End of Sleep Time:</h3>
                        <input class="work" type="text" name="distance" id="distance" placeholder="">
                    </form>
                </div>

                <div class="col-md-4">
                    <h4 class="burnCal">16.0</h4>
                    <h4 class="desc">Total Burn Calories</h4>
                </div>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src='../application/views/js/moment.min.js'></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/sleep.js"></script>


    </body>
</html>
