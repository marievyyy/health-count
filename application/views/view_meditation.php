
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Meditation</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/meditation-menu.css">
        <link rel="stylesheet" href="../application/views/css/meditation.css">
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

        <div class="container page" align="center">
            <h1>Meditation</h1>
            <h2>Whatever your personal situation right now, <br> meditation can help you to feel greater calm and inner peace. </h2>
        </div>
        <div class="container">
            <div class="column add-bottom">
                <div id="mainwrap">
                    <div id="nowPlay">
                        <span class="left" id="npAction">Paused...</span>
                        <span class="right" id="npTitle"></span>
                    </div>
                    <div id="audiowrap">
                        <div id="audio0">
                            <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                        </div>
                        <div id="tracks">
                            <a id="btnPrev">&laquo;</a>
                            <a id="btnNext">&raquo;</a>
                        </div>
                    </div>
                    <div id="plwrap">
                        <ul id="plList"></ul>
                    </div>
                </div>
            </div>
 
          </div>


    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/html5media.min.js"></script>
    <script src="../application/views/js/main.js"></script>
     <script src="../application/views/js/media.js"></script>


    </body>
</html>
