<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
       
    </head>
    <body class="bg-gray-100">
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\Users\Tom\Desktop\laravel-login\resources\views/layouts/app.blade.php ENDPATH**/ ?>