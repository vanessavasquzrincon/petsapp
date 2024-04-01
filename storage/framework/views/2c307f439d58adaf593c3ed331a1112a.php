
<?php $__env->startSection('title', 'Show Pet Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url('adoptions/create')); ?>">
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
    <h1>Adoption</h1>
    <img class="photo" src="<?php echo e(asset('images/'.$pet->photo)); ?>"  alt="" width="250px">
    <div class="info">
        <p><?php echo e($pet->name); ?></p>
        <p><?php echo e($pet->kind); ?></p>
        <p><?php echo e($pet->weight); ?> Kls</p>
        <p><?php echo e($pet->age); ?> Years</p>
        <p><?php echo e($pet->bread); ?></p>
        <p><?php echo e($pet->location); ?></p>
    </div>

    <form action="<?php echo e(url('myadoptions/store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
        <input type="hidden" name="pet_id" value="<?php echo e($pet->id); ?>">
        <button class="btn">Adopt Me</button>
    </form>
</section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/adoptions/add.blade.php ENDPATH**/ ?>