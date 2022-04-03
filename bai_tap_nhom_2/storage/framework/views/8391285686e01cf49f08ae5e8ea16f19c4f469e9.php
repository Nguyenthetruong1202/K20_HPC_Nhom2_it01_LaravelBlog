
<?php $__env->startSection('content'); ?>
<h3>Thêm người dùng</h3>

<form method="post" action="<?php echo e(route('admin.postAdd')); ?>">
      <?php $__errorArgs = ['msg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="alert alert-danger text-center">
            <?php echo e($message); ?>

      </div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


      <div class="mb-3">
            <label for="">Họ và Tên </label>
            <input name="fullname" type="text" class="form-control" value="<?php echo e(old('fullname')); ?>"
                  placeholder="nhập họ và tên ...">
            
            <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: red "><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>


      <div class="mb-3">
            <label for="">địa chỉ</label>
            <input name="address" type="text" class="form-control" value="<?php echo e(old('address')); ?>"
                  placeholder="nhập họ và tên ...">
            
            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: red "><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>


      <div class="mb-3">
            <label for="">email</label>
            <input name="email" type="text" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="email...">
            
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: red "><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="mb-3">
            <label for="">Số điện thoại</label>
            <input name="phone" type="int" class="form-control" value="<?php echo e(old('phone')); ?>"
                  placeholder="nhập họ và tên ...">
            
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: red "><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


      </div>


      <button type="submit" class="btn btn-primary">Thêm mới</button>


      <a href="<?php echo e(route('admin.index')); ?>" class="btn btn-danger"> Quay lại</a>
      <?php echo csrf_field(); ?>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\lam_viec_nhom\bai_tap_nhom_2\resources\views/admin/add.blade.php ENDPATH**/ ?>