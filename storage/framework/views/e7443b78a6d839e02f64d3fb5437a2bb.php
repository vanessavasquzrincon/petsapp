
<?php $__env->startSection('title', 'Show User Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(route('dashboard')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
    <a href=""> 
        
    </a>
    <a href="javascript:;" class="mburguer">
        <img src="<?php echo e(asset('images/mburguer.svg')); ?>" alt="">
    </a>
        
</header>

<section class="show">
    <h1>My Data</h1>
    <img class="photo" src="<?php echo e(asset('images/'.$user->photo)); ?>"  alt="" width="250px">
    <p class="role"><?php echo e($user->role); ?></p>
    <div class="info">
        <p><?php echo e($user->document); ?></p>
        <p><?php echo e($user->fullname); ?></p>
        <p><?php echo e($user->email); ?></p>
        <p><?php echo e($user->phone); ?></p>
        <p><?php echo e($user->gender); ?></p>
        <p><?php echo e(Carbon\Carbon::parse($user->birthdate)->diffforhumans()); ?></p>
    </div>
    
            
</section>


<?php $__env->stopSection(); ?>
            

        
        
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/users/mydata.blade.php ENDPATH**/ ?>