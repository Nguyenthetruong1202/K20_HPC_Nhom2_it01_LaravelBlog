<!doctype html>
<html lang="en">

<head>
      <?php echo $__env->make('head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
      <!-- navbar start -->
      <?php echo $__env->make('heade', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH E:\lam_viec_nhom\bai_tap_nhom_2\resources\views\blog\home.blade.php ENDPATH**/ ?>