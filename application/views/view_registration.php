
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/registration.css">
        <link rel="stylesheet" href="../application/views/css/homepage.css">
        <link rel="stylesheet" href="../application/views/css/responsive.css">
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
                <a href="/health/main/sleep" class="smoothScroll">Sleep</a>
                <a href="/health/main/meditation" class="smoothScroll">Meditation</a>
                <a href="/health/main/about" class="smoothScroll">About-Us</a>
                <a href="/health/main/profile" class="smoothScroll">Profile</a>
            </div>
            
            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>
        <!-- End of Menu -->

        <div>
            <!-- For the banner section -->
            <div>
                <figure>
                    <div class="main-banner">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner two">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner three">
                    </div>
                </figure>
                <figure>
                    <div class="main-banner four">
                    </div>
                </figure>
            </div>
            <!-- End of the banner section -->


            <!-- Registration -->
                <!-- multistep form -->
                <div class="registration-container">
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Account Setup</li>
                            <li>Personal Profiles</li>
                            <li>Body Details</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Registration</h2>
                            <!-- <h6 class="error">Input a valid name!</h6> -->
                            <input type="text" name="username" placeholder="Name" />
                            <!-- <h6 class="error">Input atleast 5 characters!</h6> -->
                            <input type="password" name="pass" placeholder="Password" />
                            <!-- <h6 class="error">Input atleast 5 characters!</h6> -->
                            <input type="password" name="cpass" placeholder="Confirm Password" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Personal Info</h2>
                            <h6>Birthday</h6>
                            <!-- <h6 class="error">Input your birthday!</h6> -->
                            <input type="date" name="birthday" placeholder="Birthday" />
                            <h6>Gender</h6>
                            <select id="gender" name="gender" value="">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option> 
                            </select>
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Body Details</h2>
                            <!-- <h6 class="error">Input your height!</h6> -->
                            <input type="text" name="height" placeholder="Height in Feet" />
                            <!-- <h6 class="error">Input your weight!</h6> -->
                            <input type="text" name="weight" placeholder="Weight in Lbs" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                    </form>
                </div> 
            <!-- End of Registration -->
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src='../application/views/js/jquery.js'></script>
    <script src='../application/views/js/jquery.easing.1.3.min.js'></script>

    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/main.js"></script>
    <script src="../application/views/js/registration.js"></script>


    </body>
</html>
