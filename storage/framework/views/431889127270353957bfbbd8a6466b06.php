
<?php $__env->startSection('title', 'Edit User Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url('pets')); ?>">
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
    <h1>Edit Pet</h1>
    <form action="<?php echo e(url('pets/'.$pet->id)); ?>" class="form_add" method="post" enctype="multipart/form-data"  aria-required="">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <input type="hidden" name="photoactual" value="<?php echo e($pet->photo); ?>">
            <img src="<?php echo e(asset('images/'.$pet->photo)); ?>" alt="" id="upload" width="200px">
            <input type="file" name="photo" id="photo" accept="image/*" >
            <input type="text" name="name" placeholder="Name" value="<?php echo e(old('name', $pet->name)); ?>" >
            <input type="text" name="kind" placeholder="Kind" value="<?php echo e(old('kind', $pet->kind)); ?>">
            <input type="number" name="weight" placeholder="Weight" value="<?php echo e(old('weight', $pet->weight)); ?>" >
            <input type="number" name="age" placeholder="Age" value="<?php echo e(old('age', $pet->age)); ?>" >
            <input type="text" name="bread" placeholder="Breed" value="<?php echo e(old('bread', $pet->bread)); ?>" >
            <input type="text" name="location" placeholder="Location" value="<?php echo e(old('location', $pet->location)); ?>" >

        

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
     



    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\vanessa\vvr-2770672\04-laravel\larapp\resources\views/pets/edit.blade.php ENDPATH**/ ?>