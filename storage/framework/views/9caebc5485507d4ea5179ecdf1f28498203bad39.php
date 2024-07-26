

    <div class="position-relative">
        <form action="<?php echo e($route??''); ?>" method="get">
            <input type="text" name="name" value="<?php echo e(Request()->query('name')??''); ?>" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
        </form>
    </div>
                    
                    
                    <?php /**PATH /home/hatem/Desktop/Academic/resources/views/components/admin/search.blade.php ENDPATH**/ ?>