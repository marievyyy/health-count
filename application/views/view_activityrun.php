
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Activity</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/activity-menu.css">
        <link rel="stylesheet" href="../application/views/css/activity.css">
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

        <div class="container act-page" align="center">
            <h1>Activities</h1>
            <div class="col-md-3">
                <a href="">
                    <img src="../application/views/img/bike.png">
                </a>
            </div>
            <div class="col-md-6" align="center">
                <form id="activityRun" method="post">
                    <h3 class="start">Choose your activity</h3>
                    <div class="row">
                        <input type="radio" name="activityrun" id="run" value="run">
                        <label for="run" class="run"><span>Run</span></label>

                        <input type="radio" name="activityrun" id="walk" value="walk">
                        <label for="walk" class="walk"><span>Walk</span></label>

                        <input type="radio" name="activityrun" id="jog" value="jog">
                        <label for="jog" class="jog"><span>Jog</span></label>

                        <input type="radio" name="activityrun" id="cycling" value="cycling">
                        <label for="cycling" class="cycling"><span>Cycling</span></label>
                    </div>
                    <br>
                    <h3>Distance Travel</h3>
                    <input type="text" name="distance" id="distance" placeholder="Distance in meters">
                </form>
            </div>

                
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/main.js"></script>


    </body>
</html>
