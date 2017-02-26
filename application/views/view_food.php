
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Food</title>


        <link rel="shortcut icon" href="../application/views/img/favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../application/views/css/bootstrap.min.css"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="../application/views/css/food-menu.css">
        <link rel="stylesheet" href="../application/views/css/food.css">
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

        <div class="container food-page">
            <h1>Food</h1>
            <h4><span>0 kcal </span>/2150 daily calories</h4>

            <div class="col-md-6 foodChain">
                <form id="activityRun" method="post">
                    <h3 class="foodtitle">Choose for the following</h3>
                    <div class="row">
                        <input type="radio" name="food" id="jollibee" value="jollibee">
                        <label for="jollibee" class="jollibee"><span>Jollibee</span></label>

                        <input type="radio" name="food" id="mcdo" value="mcdo">
                        <label for="mcdo" class="mcdo"><span>McDonalds</span></label>

                        <input type="radio" name="food" id="kfc" value="kfc">
                        <label for="kfc" class="kfc"><span>Kentucky Fried Chicken</span></label>

                        <input type="radio" name="food" id="chowking" value="chowking">
                        <label for="chowking" class="chowking"><span>Chowking</span></label>

                        <input type="radio" name="food" id="kenny" value="kenny">
                        <label for="kenny" class="kenny"><span>Kenny Roger Roasters</span></label>

                        <input type="radio" name="food" id="greenwich" value="greenwich">
                        <label for="greenwich" class="greenwich"><span>Greenwich</span></label>

                        <input type="radio" name="food" id="pizzahut" value="pizzahut">
                        <label for="pizzahut" class="pizzahut"><span>Pizza Hut</span></label>

                        <input type="radio" name="food" id="cuisine" value="cuisine">
                        <label for="cuisine" class="cuisine"><span>Other Cuisine</span></label>
                    </div>
                </form>
            </div>

            <div class="col-md-6 foodmenu">
                <form method="post" align="center">
                    <input  type="text" name="foodlist" id="foodlist" value=""
                    placeholder="Search for Food">

                    <div class="wrap">
                        <div class="wrap-list">
                            <ol class="list">
                                <li>
                                    <input type="checkbox" id="check-1">
                                    <label for="check-1">Halo-Halo</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check-2">
                                    <label for="check-2">Spicy-Leg</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check-3">
                                    <label for="check-3">Spicy Breast</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check-4">
                                    <label for="check-4">Yumburger</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check-5">
                                    <label for="check-5">Mashed Potato With Gravy (Regular) </label>
                                </li>
                            </ol>
                        </div>

                        <div class="page">
                          <nav class="pagination" role="navigation">
                            <a class="prev" href="#">< Previous</a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a class="active" href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a class="next" href="#">Next ></a>
                          </nav>
                        </div>
                    </div>

                    <input type="submit" id="submitted" name="submitted" value="Submit">
                </form>        

            </div>


        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../application/views/js/jquery.min.js"</script>
    <script src="../application/views/js/bootstrap.min.js"></script>
    <script src="../application/views/js/smoothscroll.js"></script>
    <script src="../application/views/js/main.js"></script>


    </body>
</html>
