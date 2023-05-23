

<?php $__env->startSection('content'); ?>
    <div class="w-full rounded-md p-3 shadow-md">
        Welcome <?php echo e(Auth::user()->username); ?>

        <a href="<?php echo e(route('logout')); ?>" class="text-blue-500">Logout</a>
    <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\laravel-login\resources\views/home.blade.php ENDPATH**/ ?>