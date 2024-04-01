<?php $__env->startSection('title', 'Dashboard Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.menuburger', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/master.css')); ?>">



<header class="nav level-0">
    <a href="">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="<?php echo e(asset('images/mburguer.svg')); ?>" alt="Menu Burger">
    </a>
</header>


<section class="dashboard">
    <h1>Dashboard</h1>
    <menu>
        <ul>
            <li>
                <a href="<?php echo e(url('users')); ?>">
                    <img src="<?php echo e(asset('images/ico-users.svg')); ?>" alt="Users">
                    <span>Module User</span>    
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('pets')); ?>">
                    <img src="<?php echo e(asset('images/ico-pets.svg')); ?>" alt="Pets">
                    <span>Module Pets</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('adoptions')); ?>">
                    <img src="<?php echo e(asset('images/ico-adoptions.svg')); ?>" alt="Adoptions">
                    <span>Module Adoptions</span>
                </a>
            </li>
        </ul>
    </menu>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        $('body').on('click', '.mburger',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\vvr-2770672\04-laravel\larapp\resources\views/dashboard-admin.blade.php ENDPATH**/ ?>