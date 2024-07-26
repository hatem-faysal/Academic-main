<!doctype html>
<html lang="en" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon-32x32.png')); ?>" type="image/png" />
    <!--plugins-->
    
    <link href="<?php echo e(asset('assets/plugins/notifications/css/lobibox.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/metismenu/css/metisMenu.min.css')); ?>" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo e(asset('assets/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('assets/js/pace.min.js')); ?>"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dark-theme.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/semi-dark.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header-colors.css')); ?>" />
    
    <link href="<?php echo e(asset('assets/css/toastr/toastr.min.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.css')); ?>" >
    <?php echo $__env->yieldContent('css'); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>

</head>

<body>

<div class="wrapper">

    <?php echo $__env->make('partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-wrapper">
        <div class="page-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <div class="overlay toggle-icon"></div>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</div>

<script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/simplebar/js/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/plugins/metismenu/js/metisMenu.min.js')); ?>"></script>


<script src="<?php echo e(asset('assets/js/all.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/toastr/toastr.min.js')); ?>"></script>
<?php echo $__env->make('layout.Validation.errorValidation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH /home/hatem/Desktop/Academic/resources/views/layout/app.blade.php ENDPATH**/ ?>