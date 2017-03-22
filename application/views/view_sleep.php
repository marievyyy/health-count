
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Sleep</title>


        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/sleep-menu.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/sleep.css');?>">
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

        <div class="container sleep-page" align="center">
            <h1>Sleep</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="clock">
                        <div class="hour"></div>
                        <div class="minute"></div>
                  </div> 
                </div>

                <div class="col-md-4 middle">
                    <form id="sleepForm" method="post">
                        <h3 class="start">Start of Sleep Time:</h3>
                        <input class="work" type="time" name="startSleep" id="distance" placeholder="">
                        <h3 class="last">End of Sleep Time:</h3>
                        <input class="work" type="time" name="endSleep" id="distance" placeholder="">
                        <br>
                        <input type="submit" name="submitted" value="Submit">
                    </form>
                </div>

                <div class="col-md-4">
                    <h4 class="sleepStatus" id="sleepStat"></h4>
                    <h4 class="sleepDesc">Sleep for:<span id="sleepVal">0.0 hrs</span></h4>
                    <!-- Over Slept // Normal // Lack of Sleep -->
                    <h4 class="desc">Total Burn Calories: <span id="calburn">0.0</span></h4>
                </div>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src='<?php echo base_url('assets/js/moment.min.js');?>'></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/sleep.js');?>"></script>
    <script src="<?php echo base_url('assets/js/sleep-api.js');?>"></script>

    </body>
</html>
