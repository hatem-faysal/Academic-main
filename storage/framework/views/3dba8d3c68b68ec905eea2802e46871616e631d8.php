<div class="dropdown bootstrap-select default-select form-control wide">
    <select id="inputState" name="<?php echo e($name??'status'); ?>" class="default-select form-control wide">
        <option selected="" disabled><?php echo e(('Choose...')); ?></option>
        <?php $__currentLoopData = $foreach??App\Models\StaticConst::STATUS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(isset($model)): ?>
        
        <option value="<?php echo e($item); ?>" <?php echo e($item==$model->$name ?'selected':''); ?>><?php echo e($item); ?></option>
        <?php else: ?>
        
        <option value="<?php echo e($item); ?>" <?php if(old($name??'status')==$item): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($item); ?></option>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div><?php /**PATH /home/hatem/Desktop/Academic/resources/views/components/admin/form/state.blade.php ENDPATH**/ ?>