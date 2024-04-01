<?php $__env->startSection('title', 'Welcome Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
</header>
<section>
    <img class="slide" src="<?php echo e(asset('images/family.png')); ?>" alt="slide">
    <a class="bottom" href="<?php echo e(url('login/')); ?>">Enter</a>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\vvr-2770672\04-laravel\larapp\resources\views/welcome.blade.php ENDPATH**/ ?>