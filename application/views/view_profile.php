
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Profile</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/homepage.css">
        <link rel="stylesheet" href="../application/views/css/profile.css">
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

        <div class="container-fluid profile-page" align="center">
            <div class="col-sm-3" id="left">
                <h3 id="pname" ></h3>
                <button class="personal"><a href="#">Personal Information</a></button><br>
                <button><a href="">Health Status</a></button>
            </div>

            <div class="col-sm-9" id="right" align="center">
                <div class="personal-info">
                    <div class="row">
                        <div class="col-md-6" id="box">
                            <h4>Age</h4>
                            <h5 id="age"> <span>yrs</span></h5>
                        </div>
                        <div class="col-md-6" id="box">
                            <h4>Gender</h4>
                            <h5><p id="gender"></p></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" id="box">
                            <h4>Weight</h4>
                            <h5 id="weight"> <span>kgs</span></h5>
                        </div>
                        <div class="col-md-6" id="box">
                            <h4>Height</h4>
                            <h5 id="height"> <span>cm</span></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" id="box">
                            <h4>BMI</h4>
                            <h5 id="bmi"><span id="bmi_status"> </span></h5>
                        </div>
                        <div class="col-md-6" id="box">
                            <h4>Birthdate</h4>
                            <h6 id="birthdate"></h6>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>



    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/profile-api.js"></script>

    </body>
</html>
