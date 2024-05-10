<?php $__env->startSection('title', 'List Contact Us'); ?>
<?php $__env->startSection('body'); ?>
<div class="row d-flex justify-content-center m-5">

  <!-- Contact Form Block -->
  <div class="col-xl-6">
    <h2 class="pb-4">List of Contact</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($d->name); ?></td>
                <td><?php echo e($d->email); ?></td>
                <td><?php echo e($d->phone); ?></td>
                <td><?php echo e($d->message); ?></td>
                <td>
                    <form method="POST">
                        <?php echo csrf_field(); ?>
                        
                        <input type="hidden" name="index" value="<?php echo e($k); ?>">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(count($data) <= 0): ?>
            <tr>
                <td colspan="3" class="text-center">No Data</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp8\htdocs\commerce\resources\views/contact-list.blade.php ENDPATH**/ ?>