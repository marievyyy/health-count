
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Water</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/water-menu.css">
        <link rel="stylesheet" href="../application/views/css/water.css">
        <link rel="stylesheet" href="../application/views/css/font-awesome.min.css">

        <script src="js/jquery.min.js"></script>


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

        <div class="container water-page">
            <h1>Water</h1>
            <h6>How much water you should drink?</h6>

            <div class="row">
                <div class="col-md-4 urine" align="center">
                    <h3 class="title">Color of Urine</h3>
                    <div class="button-list">
                        <div class="row">
                            <div class="col-md-4">
                                <button class="one"></button>
                                <button class="four"></button>
                                <button class="seven"></button>
                            </div>
                            <div class="col-md-4">
                                <button class="two"></button>
                                <button class="five"></button>
                            </div>
                            <div class="col-md-4">
                                <button class="three"></button>
                                <button class="six"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 glass" align="center">
                    <h3 class="title">Number of Glasses</h3>
                    <img src="../application/views/img/glass2.png">

                    <div class="center">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" align="center">
                    <h3 class="title">Ideal Hydration Amount</h3>
                    <h4>1.20</h4>
                    <h5>Liters</h5>
                </div>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/jquery.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/water.js"></script>


    </body>
</html>
