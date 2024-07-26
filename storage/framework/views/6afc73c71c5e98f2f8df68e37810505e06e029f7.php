<div class="d-flex align-items-center">
    <?php if(!empty($model->getFirstMediaUrl($name))): ?>
    <img src="<?php echo e(asset($model->getFirstMediaUrl($name) )); ?>" class="rounded-lg me-2" width="24" alt="">
    <?php else: ?>
    <img src="<?php echo e(asset('admin/images/noimage.jpg')); ?>" class="rounded-lg me-2" width="24" alt="">
    <?php endif; ?>
    <span class="w-space-no"><?php echo e(Str::limit(($nameUser)??'', 10)); ?></span>

</div><?php /**PATH /home/hatem/Desktop/Academic/resources/views/components/admin/form/image-upload.blade.php ENDPATH**/ ?>