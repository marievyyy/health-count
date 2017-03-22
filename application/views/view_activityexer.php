
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

        <div class="container act-page" align="center">
            <h1>Activities</h1>
            <form id="activityExer" method="post">
            <div class="col-md-4 workout1">
                <img src="<?php echo base_url('assets/img/weightlifting.png');?>">
                <h3 class="duration">Duration:</h3>
                <br>
                <input class="work" type="text" name="duration" id="distance" placeholder="Exercise duration in seconds">
            </div>
            <div class="col-md-4 workout2" align="center">
                <h3 class="start">Choose your activity</h3>
                    <div class="row">
                        <input type="radio" name="activityrun" id="pushUp" value="pushUp">
                        <label for="pushUp" class="pushUp"><span>Push Up</span></label>

                        <input type="radio" name="activityrun" id="sitUp" value="sitUp">
                        <label for="sitUp" class="sitUp"><span>Sit Up</span></label>

                        <input type="radio" name="activityrun" id="pullUp" value="pullUp">
                        <label for="pullUp" class="pullUp"><span>Pull Up</span></label>

                        <input type="radio" name="activityrun" id="jumping" value="jumping">
                        <label for="jumping" class="jumping"><span>Jumping Jack</span></label>

                        <input type="radio" name="activityrun" id="vigor" value="vigor">
                        <label for="vigor" class="vigor"><span>Vigor</span></label>

                        <input type="radio" name="activityrun" id="calisthenics" value="calisthenics">
                        <label for="calisthenics" class="calisthenics"><span>Calisthenics</span></label>

                        <input type="radio" name="activityrun" id="building" value="building">
                        <label for="building" class="building"><span>Body Building</span></label>

                        <input type="radio" name="activityrun" id="home" value="home">
                        <label for="home" class="home"><span>Home Exercise</span></label>

                        <input type="radio" name="activityrun" id="aero" value="aero">
                        <label for="aero" class="aero"><span>Aerobics</span></label>
                    </div>
                    <br>
                    <div class="col-md-12" align="center">
                        <input type="submit" id="submitted" name="submitted" value="Submit">
                    </div>  
                </form>
            </div>
            <div class="col-md-4" align="center">
                <h4 class="burnCal" id="output">0.0</h4>
                <h4 class="desc">Total Burn Calories</h4>
            </div>

        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/activitytwo-api.js');?>"></script>

    </body>
</html>
