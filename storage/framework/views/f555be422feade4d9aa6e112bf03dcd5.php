

<?php $__env->startSection('content'); ?>
    <div class="grid h-screen place-items-center">
        <div class="grid rounded-md w-[500px] shadow-md bg-white p-3">
            <form action="<?php echo e(route('login')); ?>" method="POST" class="grid gap-4">
                <?php echo csrf_field(); ?>
                <span class="text-xl">
                    Login
                </span>
                <?php if(session()->has('status')): ?>
                    <div class="p-3 2-full rounded-md text-white bg-blue-100 font-bold">
                        <?php echo e(session()->get('status')); ?>

                    </div>
                <?php endif; ?>    
                <div class="grid gap-3">
                    <label for="Username" class="text-lg font-bold">Username</label>
                    <input type="text" name="username"  id="" class="border-2 p-2 rounded-md outline-gray-3000" value="<?php echo e(old('username')); ?>"/>
                    <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-500"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="grid gap-3">
                    <label for="Password" class="text-lg font-bold">Password</label>
                    <input type="password" name="password"  id="" class="border-2 p-2 rounded-md outline-gray-3000"/>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red-500"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white p-3 rounded-md">Login</button>
                </div>
            </form>
            
        </div>
    <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tom\Desktop\laravel-login\resources\views/auth/login.blade.php ENDPATH**/ ?>