<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(View::make('footer')); ?>

</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    .slider-img {
        /* background-size: 100px 100px; */
        height: 400px !important;
    }

    .custom-product {
        height: 600px;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .tranding-wrapper{
        margin: 20px;
    }
    /* detail view */
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
</style>

</html>
<?php /**PATH /home/raju/ecommerce/resources/views/master.blade.php ENDPATH**/ ?>