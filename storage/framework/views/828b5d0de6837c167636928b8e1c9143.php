<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>">
</head>
<body>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="<?php echo e(asset('js/sweetalert2.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.7.1.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html><?php /**PATH C:\Users\AUTOCAD\Desktop\vvr-2770672\04-laravel\larapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>