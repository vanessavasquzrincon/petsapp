<?php $__env->startSection('title', 'Login Page - PetsApp'); ?>
<?php $__env->startSection('content'); ?>
    <header>
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
    </header>
    <section class="login">
        <menu>
            <a href="javascript:;">Login</a>
            <a href="<?php echo e(url('register/')); ?>">Register</a>
        </menu>
        
        <form action="<?php echo e(route('login')); ?>" class="form_login" method="post">
            <?php echo csrf_field(); ?>
            <input type="email" name="email" placeholder="Email" >
            <input type="password" name="password" placeholder="Password" >
            <button type="submit">Login</button>
        </form>
     
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(count($errors->all()) > 0): ?>
    <?php $error = '' ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $error .= '<li>' . $message . '</li>' ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    position: "top-end",
                    title: "Ops!",
                    html: `<?php echo $error ?>`,
                    text: "<?php echo e($error); ?>",
                    icon: "error",
                    showConfirmButton: false,
                    timer: 5000
                })
            })
        </script>
        
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/auth/login.blade.php ENDPATH**/ ?>