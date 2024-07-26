 <a href="javascript:;" class="ms-3" data-bs-toggle="modal" data-bs-target="#delete<?php echo e($id); ?>"><i class='bx bxs-trash'></i></a>
<div class="modal fade" id="delete<?php echo e($id); ?>">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel<?php echo e($id); ?>"> <?php echo e(('Delete')); ?><span style="color: #ababab"><i
                            class="fa fa-trash"></i></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <?php echo e(__('Are you sure you want to delete :name?', ['name' => $name])); ?>

                <form action="<?php echo e($route); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"><?php echo e(('Close')); ?></button>
                <button type="submit" class="btn btn-primary"><?php echo e(('Delete')); ?></button>
            </div>
            </form>
        </div>
    </div>
</div><?php /**PATH /home/hatem/Desktop/Academic/resources/views/components/admin/delete-model.blade.php ENDPATH**/ ?>