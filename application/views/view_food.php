
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Health Count | Food</title>


        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
        <!-- Custom style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/food-menu.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/food.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/loading.css');?>">
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

        <div class="container food-page">
            <h1>Food</h1>
            <h4><span id="totalcal">0 </span><span> cal</span></span>/2150 daily calories</h4>

            <div class="col-md-6 foodChain">
                <form id="foodsearch" method="post">
                    <h3 class="foodtitle">Choose for the following</h3>
                    <div class="row">
                        <input type="radio" name="foodcat" id="jollibee" value="jollibee">
                        <label for="jollibee" class="jollibee"><span>Jollibee</span></label>

                        <input type="radio" name="foodcat" id="mcdo" value="mcdonalds">
                        <label for="mcdo" class="mcdo"><span>McDonalds</span></label>

                        <input type="radio" name="foodcat" id="kfc" value="kfc">
                        <label for="kfc" class="kfc"><span>Kentucky Fried Chicken</span></label>

                        <input type="radio" name="foodcat" id="chowking" value="chowking">
                        <label for="chowking" class="chowking"><span>Chowking</span></label>

                        <input type="radio" name="foodcat" id="kenny" value="kenny">
                        <label for="kenny" class="kenny"><span>Kenny Roger Roasters</span></label>

                        <input type="radio" name="foodcat" id="greenwich" value="greenwich">
                        <label for="greenwich" class="greenwich"><span>Greenwich</span></label>

                        <input type="radio" name="foodcat" id="pizzahut" value="pizzahut">
                        <label for="pizzahut" class="pizzahut"><span>Pizza Hut</span></label>

                        <input type="radio" name="foodcat" id="cuisine" value="cuisine">
                        <label for="cuisine" class="cuisine"><span>Other Cuisine</span></label>

                         <input type="radio" name="foodcat" id="listAll" value="listAll">
                        <label for="listAll" class="listAll"><span>List All</span></label>
                    </div>
                </form>
            </div>

            <div class="col-md-6 foodmenu">
                <form method="post" align="center" id="formfood">
                    <input  type="text" name="foodlist" id="foodlist" value=""
                    placeholder="Search for Food">

                    <div class="wrap">
                        <div class="wrap-list">
                            <ol class="list" id="fooditem">
                            </ol>
                        </div>

                        <div class="page">
                            <div class="row" id="pageNum">
    
                            </div>
                        </div>
                    </div>

                    <input type="submit" id="submitted" name="submitted" value="Submit">
                </form>        

            </div>


        </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/smoothscroll.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url('assets/js/food-apiv2.js');?>"></script>

    </body>
</html>
