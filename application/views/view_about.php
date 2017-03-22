
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | About Us</title>


        <link rel="shortcut icon" href="<?php echo base_url('assets/css/favicon.ico');?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/homepage.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/aboutus.css');?>">
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

        <div class="container page">
            <h1>About Us</h1>
            <div class="row first">
                <div class="col-md-6" align="center">
                <h2 class="content"><span class="name">Health Count</span> aims to help people to track down and give details about their health condition in a way by mainly giving information of their daily and weekly status of their activities, nutrient consumption and hydration status.</h2>
                </div>
                <div class="col-md-6">
                    <img src="../application/views/img/about.jpeg">
                </div>
            </div>
            <div class="row second">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/about1.jpeg');?>">
                </div>
                <div class="col-md-6" align="left">
                    <h2 class="aims">
                        o   Health count aims to provide calculation of loss and gained calories, intake of caffeine and hydration level.
                        <br><br>
                        o   Health count aims to present a daily and weekly report of activities, water intake, caffeine intake and calorie gained and loss.
                        <br><br>
                        o   Health count meets a friendly user interface to be able to serve to most of the people.
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 team">
                   <h1>The Team</h1> 
                </div>
            </div>
                
            <div class="row us" align="center">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/bunquin.jpg');?>">
                    <h2>Ryan Grabriel S. Bunquin</h2>
                    <h3>Lead Back End Developer</h3>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/malto.jpg');?>">
                    <h2>Allison Dwight R. Malto</h2>
                    <h3>Back End Developer Assitant</h3>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/lapitan.jpg');?>">
                    <h2>Rose Suzette M. Lapitan</h2>
                    <h3>Documentation</h3>
                </div>
            </div>

            <div class="row us" align="center">
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/porras.jpg');?>">
                    <h2>Ivy Marie G. Porras</h2>
                    <h3>Lead Front End Developer</h3>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo base_url('assets/img/palambiano.jpg');?>">
                    <h2>Niña Geralyn R. Palambiano</h2>
                    <h3>Front End Developer Assistant</h3>
                </div>
            </div>
                
        </div>

        <footer align="center">
            <h4>All Rights Slightly Reserved | © RARIN 2017</h4>
        </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>


    </body>
</html>
