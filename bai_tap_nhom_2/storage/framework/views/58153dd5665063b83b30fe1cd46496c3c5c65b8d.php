


<?php $__env->startSection('content'); ?>

<a class="btn btn-dark" href="<?php echo e(route('admin.add')); ?>">Thêm người dùng</a>

<?php if(session('msg')): ?>
<div>
      <div class="alert alert-success "><?php echo e(session('msg')); ?></div>
</div>
<?php endif; ?>


<table class="table table-bordered">
      <thead>
            <tr>
                  <th width="5%">STT</th>
                  <th>Tên</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th width="20%">Thời gian</th>
                  <th width="5%">Sửa</th>
                  <th width="5%">Xóa</th>


            </tr>
      </thead>


      <tbody>
            <?php $__currentLoopData = $usersList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                  <td><?php echo e($item ->id); ?></td>
                  <td><?php echo e($item ->fullname); ?></td>
                  <td><?php echo e($item ->address); ?></td>
                  <td><?php echo e($item ->email); ?></td>
                  <td><?php echo e($item ->phone); ?></td>
                  <td><?php echo e($item ->create_at); ?></td>

                  <td><a class="btn btn-danger " href="<?php echo e(route('admin.edit',['id'=>$item->id])); ?>">Sửa</a></td>
                  <td><a onclick="return  confirm('bạn có chắc chắn muốn xóa')" class="btn btn-warning "
                              href="<?php echo e(route('admin.delete',['id'=>$item->id])); ?>">Xóa</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\lam_viec_nhom\bai_tap_nhom_2\resources\views\admin\home.blade.php ENDPATH**/ ?>