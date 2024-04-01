
<?php $__env->startSection('title', 'Adoption Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url('myadoptions')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
    <a href=""> 
        
    </a>
    <a href="" class="mburguer">
        <img src="<?php echo e(asset('images/mburguer.svg')); ?>" alt="">
    </a>
        
</header>
<section class="module">
    <h1 class="mod-h1">ADOPTIONS</h1>
            <div class="pets">
                <?php $__empty_1 = true; $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <article>
                    <header>
                        <img src="<?php echo e(asset('images/' . $pet->photo)); ?>" alt="Pet">
                        <p>
                            <span>
                                <?php echo e($pet->name); ?>

                            </span>
                            <span><?php echo e($pet->kind); ?></span>
                        </p>

                    </header>
                    <footer>
                        <a href="<?php echo e(url('myadoptions/add/' . $pet->id)); ?>">View</a>

                    </footer> 
                    
                </article>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
                
            
            </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/adoptions/create.blade.php ENDPATH**/ ?>