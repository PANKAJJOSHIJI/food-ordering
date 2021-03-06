<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add Food </title>

    <!-- Icons font CSS-->
    <link href="<?php echo e(asset('food_asset/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('food_asset/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('food_asset/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('food_asset/vendor/datepicker/daterangepicker.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('food_asset/css/main.css')); ?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Add Food</h2>
                    <form method="get" action="/private_pages/cart_details">
                        
                     
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="food">
                                            <option disabled="disabled" selected="selected">Food</option>
                                            <option>Egg Roll</option>
                                            <option>Aalu Paratha</option>
                                            <option>Snacks</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="p-t-30">
                              <input type="submit" class="btn btn--radius btn--green" value="Add to Cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo e(asset('food_asset/vendor/jquery/jquery.min.js')); ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo e(asset('food_asset/vendor/select2/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('food_asset/vendor/datepicker/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('food_asset/vendor/datepicker/daterangepicker.js')); ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo e(asset('food_asset/js/global.js')); ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->