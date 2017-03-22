
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Home</title>


        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/loginhome.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu">

    <!-- Menu -->
        <nav class="menu" id="theMenu">
            <div class="menu-wrap">
                <h1 class="logo"><a href="<?php echo base_url();?>main/">Health Count</a></h1>
                <!-- <i class="icon-remove menu-close"></i> -->
                <a href="<?php echo base_url();?>main/food" class="smoothScroll">Food</a>
                <a href="<?php echo base_url();?>main/water" class="smoothScroll">Water</a>
                <a href="<?php echo base_url();?>main/coffee" class="smoothScroll">Coffee</a>
                <a href="<?php echo base_url();?>main/activity" class="smoothScroll">Activities</a>
                <a href="<?php echo base_url();?>main/sleep" class="smoothScroll">Sleep</a>
                <a href="<?php echo base_url();?>main/meditation" class="smoothScroll">Meditation</a>
                <a href="<?php echo base_url();?>main/about" class="smoothScroll">About-Us</a>
                <a href="<?php echo base_url();?>main/profile" class="smoothScroll">Profile</a>
                <a href="<?php echo base_url();?>main/logout" class="logout">Log Out</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>

        <section id="home">
            <div class="container-fluid home-page" align="center">
                <h1>Health Status</h1>
                <div class="row first">
                    <div class="col-md-12">
                        <div id="container-calories" class="boxLong gain">
                            <h2>Total Gain/Burned Calorie</h2>
                        </div>
                    </div>
                </div>

                <div class="row first water">
                    <div class="col-md-6">
                        <div id="container-water" class="box watergraph">
                            <h2>Water</h2>
                        </div>
                    </div>
                    <div class="col-md-6 water">
                        <div class="box dehy">
                            <h2>Dehydration</h2>
                            <p class="newColor"><span id="dehydrate">Highly Dehydrated</span></p>
                            <h3 class="title">Ideal Hydration Amount: <span id="liters">16.9</span> L</h3>
                        </div>
                    </div>
                </div>

                <div class="row first">
                    <div class="col-md-6 coffee">
                        <div id="container-coffee" class="box coffee">
                            <h2>Caffeine</h2>
                        </div>
                    </div>

                    <div class="col-md-6 coffee">
                        <div class="box sleep">
                            <h2>Body Caffeine Status</h2>
                            <h3 id="caffeineStatus">High Amount of Caffeine</h3>
                            <p>Today's Caffeine: <span id="caffeineTotal">116</span> mg.</p>
                        </div>
                    </div>
                </div>

                <div class="row last">
                    <div class="col-md-6">
                        <div id="container-activity" class="box activity">
                            <h2>Activity</h2>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="container-sleep" class="box sleep">
                            <h2>Sleep</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer align="center">
            <h4>All Rights Slightly Reserved | © RARIN 2017</h4>
        </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highcharts.js');?>"></script>
    <script src="<?php echo base_url('assets/js/exporting.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highcharts-more.js');?>"></script>
    <script src="<?php echo base_url('assets/js/solid-gauge.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highchart-calories.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highchart-water.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highchart-coffee.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highchart-activity.js');?>"></script>
    <script src="<?php echo base_url('assets/js/highchart-sleep.js');?>"></script>
    <script src="<?php echo base_url('assets/js/water-dehydrated.js');?>"></script>
    <script src="<?php echo base_url('assets/js/coffee-status.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>


    </body>
</html>
