
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
    <h1>MY ADOPTIONS</h1>
    <a href="<?php echo e(url('adoptions/create')); ?>"  class="add">
        <img src="<?php echo e(asset('images/ico-add.svg')); ?>" width="30px" alt="">
        Add Adoption
    </a>
    <table>
        <tbody class='adoptions'>
        <?php $__empty_1 = true; $__currentLoopData = $adps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td>
                    <img src="<?php echo e(asset('images/'.$adp->user->photo)); ?>" alt="User">
                    <img src="<?php echo e(asset('images/'.$adp->pet->photo)); ?>" alt="User">
                </td>
                <td>
                    <span><?php echo e($adp->user->fullname); ?></span>
                    <span><?php echo e($adp->pet->name); ?></span>
                    <span><?php echo e($adp->created_at->diffforhumans()); ?></span>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p class="no-adoptions">Adoptions no yet... <br>
                Please adopt a pet :)</p>
            
            <?php endif; ?>
        </tbody>
        
    </table>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <?php if(session('message')): ?>
        <script>
        $(document).ready(function () {
            Swal.fire({
                position: "top-end",
                title: "Great job!",
                text: "<?php echo e(session('message')); ?>",
                icon: "success",
                showConfirmButton: false,
                timer: 5000
            })
        })
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/adoptions/myadoptions.blade.php ENDPATH**/ ?>