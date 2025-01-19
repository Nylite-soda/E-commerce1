<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', system-ui, -apple-system, sans-serif; background: #f5f7fa; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div style="width: 100%; max-width: 450px; padding: 20px;">
        <div style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
            <h1 style="color: #333; text-align: center; margin-bottom: 30px; font-size: 28px; font-weight: 600;">Create Account</h1>
            <form method="POST" action="<?php echo e(route('register')); ?>" style="display: flex; flex-direction: column; gap: 20px;">
                <?php echo csrf_field(); ?>
                <!-- First Name -->
                <div style="position: relative;">
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php echo e(old('firstname')); ?>" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-size: 14px; margin-top: 5px;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Last Name -->
                <div style="position: relative;">
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo e(old('lastname')); ?>" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-size: 14px; margin-top: 5px;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Phone -->
                <div style="position: relative;">
                    <input type="tel" name="phone" id="phone" placeholder="+23400-0000-0000" value="<?php echo e(old('phone')); ?>" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-size: 14px; margin-top: 5px;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Email -->
                <div style="position: relative;">
                    <input type="email" name="email" id="email" placeholder="E-mail" value="<?php echo e(old('email')); ?>" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-size: 14px; margin-top: 5px;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Password -->
                <div style="position: relative;">
                    <input type="password" name="password" id="password" placeholder="Password" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span style="color: red; font-size: 14px; margin-top: 5px;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Confirm Password -->
                <div style="position: relative;">
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        style="background: #4a90e2; color: white; padding: 15px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: transform 0.2s ease, background-color 0.2s ease;"
                        onmouseover="this.style.background='#357abd'; this.style.transform='translateY(-1px)'"
                        onmouseout="this.style.background='#4a90e2'; this.style.transform='translateY(0)'">
                    Register
                </button>
            </form>

        </div>
    </div>
</body>
</html><?php /**PATH C:\Users\owner\Desktop\Bukola\sodaStore\sodastore-laravel\resources\views/auth/register.blade.php ENDPATH**/ ?>