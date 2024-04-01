
<?php $__env->startSection('title', 'Adoption Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(route('dashboard')); ?>">
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
    <h1>Module Adoptions</h1>
    <table>
        <tbody class='adoptions'>
        <?php $__currentLoopData = $adops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img src="<?php echo e(asset('images/'.$adop->user->photo)); ?>" alt="User">
                    <img src="<?php echo e(asset('images/'.$adop->pet->photo)); ?>" alt="User">
                </td>
                <td>
                    <span><?php echo e($adop->user->fullname); ?></span>
                    <span><?php echo e($adop->pet->name); ?></span>
                    <span><?php echo e($adop->created_at->diffforhumans()); ?></span>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php echo e($adops->links('layouts.paginator')); ?>

                </td>
            </tr>
        </tfoot>
    </table>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/adoptions/index.blade.php ENDPATH**/ ?>