
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Activity</title>


        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/activity-menu.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/activity.css');?>">
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
                <a href="/health/main/activity" class="smoothScroll">Activities</a>
                <a href="<?php echo base_url();?>main/sleep" class="smoothScroll">Sleep</a>
                <a href="<?php echo base_url();?>main/meditation" class="smoothScroll">Meditation</a>
                <a href="<?php echo base_url();?>main/about" class="smoothScroll">About-Us</a>
                <a href="<?php echo base_url();?>main/profile" class="smoothScroll">Profile</a>
                <a href="<?php echo base_url();?>main/logout" class="logout">Log Out</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>

        <div class="container act-page" align="center">
            <h1>Activities</h1>
            <div class="col-md-3">
                <a href="">
                    <img src="<?php echo base_url('assets/img/bike.png');?>">
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
                    <h3>Speed Duration</h3>
                    <input class="distance" type="text" name="distance" id="distanceTrav" placeholder="Min per 1Km">
                    <h3  class="time">Total Time</h3>
                    <input class="distance" type="text" name="timedis" id="distance" placeholder="TIme in minutes">
                    <div class="col-md-12" align="center">
                        <br><br>
                        <input type="submit" id="submitbtn" name="submitted" value="Submit">
                    </div>
                </form>
            </div>
            <div class="col-md-3" align="center">
                <h4 class="burnCal" id="output">0.0</h4>
                <h4 class="desc">Total Burn Calories</h4>
            </div>
                
        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/activity-api.js');?>"></script>

    </body>
</html>
