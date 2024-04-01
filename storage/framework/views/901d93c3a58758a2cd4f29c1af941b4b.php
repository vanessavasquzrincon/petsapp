
<?php $__env->startSection('title', 'Users Page - PetsApp'); ?>

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
<section class="dashboard">
    <h1>MODULE USERS</h1>
    <a href="<?php echo e(url('users/create')); ?>"  class="add">
        <img src="<?php echo e(asset('images/ico-add.svg')); ?>" width="30px" alt="">
        Add Users
    </a>
 
</section>
<table>
    <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><img src="<?php echo e(asset('images/'. $user->photo)); ?>" alt=""></td>
                        <td>
                            <span><?php echo e($user->fullname); ?></span>
                            <span><?php echo e($user->role); ?></span>
                        </td> 
                        <td>
                            <a href="<?php echo e(route('users.show', $user->id)); ?>" class="show">
                                <img src="<?php echo e(asset('images/ico-view.svg')); ?>" alt="Show">
                            </a>
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="edit">
                                <img src="<?php echo e(asset('images/ico-edit.svg')); ?>" alt="Edit">
                            </a>
                            <form action="<?php echo e(url('users/'.$user->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="button" class="btn-delete">
                            <img src="<?php echo e(asset('images/ico-delete.svg')); ?>" alt="Delete">
                        </button>
                    </form>
                        </td>
                    </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
                    
            

        
        
        
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"> <?php echo e($users->links('layouts.paginator')); ?> </td>
        </tr>
    </tfoot>
</table>
</main> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(session('message')): ?>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    position: "top-end",
                    title: "Great Job!",
                    text: "<?php echo e(session('message')); ?>",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 5000
                })
            })
        </script>
        
    <?php endif; ?>

    <script>
        $(document).ready(function () {
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f7a8c",
                    cancelButtonColor: "#1f7a8c",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                })
            })
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/users/index.blade.php ENDPATH**/ ?>