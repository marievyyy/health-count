
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>


        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="css/registration.css">
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <script src="js/jquery.min.js"></script>


    </head>

    <body>

        <!-- Menu -->
        <nav class="menu" id="theMenu">
            <div class="menu-wrap">
                <h1 class="logo"><a href="homepage.html">Health Count</a></h1>
                <!-- <i class="icon-remove menu-close"></i> -->
                <a href="food.html" class="smoothScroll">Food</a>
                <a href="water.html" class="smoothScroll">Water</a>
                <a href="coffee.html" class="smoothScroll">Coffee</a>
                <a href="sleep.html" class="smoothScroll">Sleep</a>
                <a href="meditation.html" class="smoothScroll">Meditation</a>
                <a href="about.html" class="smoothScroll">About-Us</a>
                <a href="profile.html" class="smoothScroll">Profile</a>
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
                            <input type="text" name="username" placeholder="Name" />
                            <input type="password" name="pass" placeholder="Password" />
                            <input type="password" name="cpass" placeholder="Confirm Password" />
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Personal Info</h2>
                            <h6>Birthday</h6>
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
                            <input type="text" name="height" placeholder="Height in Feet" />
                            <input type="text" name="weight" placeholder="Weight in Lbs" />
                            <input type="button" name="previous" class="previous action-button" value="Previous" />
                            <input type="submit" name="submit" class="submit action-button" value="Submit" />
                        </fieldset>
                    </form>
                </div> 
            <!-- End of Registration -->
        </div>


    <!-- Bootstrap core JavaScript -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/registration.js"></script>


    </body>
</html>
