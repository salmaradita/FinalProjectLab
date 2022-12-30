<?php $__env->startSection('container'); ?>
<style>
    .card{
        background-color: pink;
    }
    body{
        background-color: grey;
    }
    .card-header{
        text-align: center;
    }
    .Register{
        text-align: center;
    }
</style>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h4>Sign In</h4></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="E-Mail Access">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-10 offset-md-1">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="Password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e(5-20); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid gap-5">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Login')); ?>

                                </button>
                               
                                <?php if(Route::has('password.request')): ?> 
                                
                                 <div class="Register"><span>Forgot Password?</span>
                                      <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                     <?php echo e(__('Click Here')); ?>

                                        </a>
                                    </div>
                                   
                                
                                    
                                <?php endif; ?>
                                <br><br><br><br><br>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\FinalProjectLab-main\resources\views/auth/login.blade.php ENDPATH**/ ?>