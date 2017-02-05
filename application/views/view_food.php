
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Food</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/food-menu.css">
        <link rel="stylesheet" href="../application/views/css/food.css">
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
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>

        <div class="container food-page">
            <h1>Food</h1>
            <h4><span>0 kcal </span>/2150 daily calories</h4>

            <div class="row main">
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/breakfast.png">
                        <h6>Breakfast</h6>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/lunch.png">
                        <h6>Lunch</h6>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/dinner.png">
                        <h6>Dinner</h6>
                    </a>    
                </div>
            </div>

            <div class="row snack">
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/morning snack.png">
                        <h6>Morning Snack</h6>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/afternoon snack.png">
                        <h6>Afternoon Snack</h6>
                    </a> 
                </div>
                <div class="col-md-4 col-sm-4" align="center">
                    <a href="">
                        <img src="../application/views/img/dinner snack.png">
                        <h6>Dinner Snack</h6>
                    </a>
                </div>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/main.js"></script>


    </body>
</html>
