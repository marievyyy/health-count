
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

        <div class="container water-page">
            <h1>Water</h1>
            <h6>How much water you should drink?</h6>

            <div class="row" id="urine-list">
                <div class="col-md-4 urine" align="center">
                    <h3 class="title">Color of Urine</h3>
                    <div class="row" id="color-list">
                        <div class="col-md-4">
                            <input type="radio" name="urine_color" id="urine-one" value="urine-one">
                             <label for="urine-one" class="urine-one"></label>
                             <input type="radio" name="urine_color" id="urine-four" value="urine-four">
                             <label for="urine-four" class="urine-four"></label>
                             <input type="radio" name="urine_color" id="urine-seven" value="urine-seven">
                             <label for="urine-seven" class="urine-seven"></label>
                        </div>
                        <div class="col-md-4">
                            <input type="radio" name="urine_color" id="urine-two" value="urine-two">
                            <label for="urine-two" class="urine-two"></label>
                             <input type="radio" name="urine_color" id="urine-five" value="urine-five">
                             <label for="urine-five" class="urine-five"></label>
                        </div>
                        <div class="col-md-4">
                             <input type="radio" name="urine_color" id="urine-three" value="urine-three">
                             <label for="urine-three" class="urine-three"></label>
                             <input type="radio" name="urine_color" id="urine-six" value="urine-six">
                             <label for="urine-six" class="urine-six"></label>
                        </div>    
                    </div>
                </div>
                <div class="col-md-4 glass" align="center">
                    <h3 class="title">Number of Glasses</h3>
                    <img src="../application/views/img/glass2.png">

                    <div class="center">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" id="water-minus">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="100" id="glassVal">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]" id="water-add">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" align="center">
                    <h3 class="title">Ideal Hydration Amount</h3>
                    <h4 id="waterVal" class="newColor">0.00</h4>
                    <h5 id="normal" class="newColor">Liters</h5>
                    <p class="newColor">Hydration Level: </p>
                    <!-- <p id="high"><span>High Water Intake</span></p> -->
                    <!-- <p id="medium"><span>Medium Water Intake</span></p> -->
                    <!-- <p id="normal"><span>Normal Water Intake</span></p> -->
                    <p class="newColor"><span id="dehydrate">Can't Determine</span></p>
                </div>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/water.js"></script>
    <script src="../application/views/js/water-api.js"></script>

    </body>
</html>
