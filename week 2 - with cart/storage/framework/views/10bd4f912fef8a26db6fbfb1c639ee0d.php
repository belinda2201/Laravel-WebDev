<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show m-5" role="alert">
    <div>
        <?php echo e(session()->get('success')); ?>

    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<?php if($errors->any()): ?>

<div class="alert alert-danger alert-dismissible fade show m-5" role="alert">
    <div>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($e); ?> <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp8\htdocs\commerce\resources\views/template/alert.blade.php ENDPATH**/ ?>