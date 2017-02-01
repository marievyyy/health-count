
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Coffee</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/coffee-menu.css">
        <link rel="stylesheet" href="../application/views/css/coffee.css">
        <link rel="stylesheet" href="../application/views/css/font-awesome.min.css">

        <script src="js/jquery.min.js"></script>
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
                <a href="/health/main/sleep" class="smoothScroll">Sleep</a>
                <a href="/health/main/meditation" class="smoothScroll">Meditation</a>
                <a href="/health/main/about" class="smoothScroll">About-Us</a>
                <a href="/health/main/profile" class="smoothScroll">Profile</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>

        <div class="container coffee-page">
            <h1>Coffee</h1>
        </div>

        <!-- Registration -->
                <!-- multistep form -->
                <div class="registration-container">
                    <form id="msform" method="post">
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Type of Coffee</h2>

                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <button class="img">
                                       <img src="../application/views/img/expresso.png">
                                        <h6>Espresso</h6> 
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/cappuccino.png">
                                        <h6>Cappuccino</h6>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/americano.png">
                                        <h6>Americano</h6>
                                    </button> 
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/latte.png">
                                        <h6>Caffe Latte</h6>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                       <img src="../application/views/img/mocha.png">
                                        <h6>Mocha Cappuccino</h6> 
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <button class="img">
                                        <img src="../application/views/img/caf au lait.png">
                                        <h6>Caf Au Lait</h6>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/caramel.png">
                                        <h6>Caramel Macchiato</h6>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/frappe.png">
                                        <h6>Frappe</h6>
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button class="img">
                                        <img src="../application/views/img/instant coffee.png">
                                        <h6>Instant Coffee</h6>
                                    </button>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button" id="next1" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Number of Cups</h2>
                            
                            <div>
                                <img class="cup" src="../application/views/img/americano.png">
                            </div>

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
                            
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Results" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Results</h2>
                            <div>
                                <h3>High Amount of Caffeine!</h3>
                                <img class="cup" src="../application/views/img/mocha.png">
                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                        </fieldset>
                    </form>
                </div> 
            <!-- End of Registration -->

    <!-- Bootstrap core JavaScript -->
    <script src='../application/views/js/jquery.js'></script>
    <script src='../application/views/js/jquery.easing.1.3.min.js'></script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/registration.js"></script>
    <script src="../application/views/js/water.js"></script>


    </body>
</html>
