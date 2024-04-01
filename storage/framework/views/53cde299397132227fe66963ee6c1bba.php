
<?php $__env->startSection('title', 'Edit User Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url('users')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo">
    <a href=""> 
        
    </a>
    <a href="javascript:;" class="mburguer">
        <img src="<?php echo e(asset('images/mburguer.svg')); ?>" alt="">
    </a>
        
</header>
<section class="edit">
    <h1>Edit User</h1>
    <form action="<?php echo e(url('users/'.$user->id)); ?>" class="form_add" method="post" enctype="multipart/form-data"  aria-required="">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <input type="hidden" name="photoactual" value="<?php echo e($user->photo); ?>">
            <img src="<?php echo e(asset('images/'.$user->photo)); ?>" alt="" id="upload" width="200px">
            <input type="file" name="photo" id="photo" accept="image/*" >
            <p class="role"><?php echo e($user->role); ?></p>
            <input type="number" name="document" placeholder="Document"  value="<?php echo e(old('document', $user->document)); ?>">
            <input type="text" name="fullname" placeholder="Full Name" value="<?php echo e(old('fullname', $user->fullname)); ?>" >
            <select name="gender" id=""  class="select_register">
                <option value="">SELECT GENDER...</option>
                <option value="Female" <?php if(old('gender') == 'Female'): ?> selected <?php endif; ?>>Female</option>
                <option value="Male" <?php if(old('gender') == 'Male'): ?> selected <?php endif; ?>>Male</option>
            </select>
            <input type="date" name="birthdate" placeholder="birthdate" value="<?php echo e(old('birthdate', $user->birthdate)); ?>">
            <input type="text" name="phone" placeholder="Phone Number" value="<?php echo e(old('phone', $user->phone)); ?>" >
            <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email', $user->email)); ?>" >
        

            <button type="submit">UPDATE</button>


    </form>
    
            
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script>
        $(document).ready(function () {
            $('#upload').click(function (e) {
                e.preventDefault();
                $('#photo').click();
            });
    
            $('#photo').change(function (e) {
                e.preventDefault();
                let reader = new FileReader();
                reader.onload = function (event) {
                    $('#upload').attr('src', event.target.result); // Utilizar event.target.result en lugar de readAsBinaryString
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
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
     



    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/users/edit.blade.php ENDPATH**/ ?>