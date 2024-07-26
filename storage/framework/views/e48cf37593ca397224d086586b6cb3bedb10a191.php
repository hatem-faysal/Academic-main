    <?php if($status=='Active'): ?>
    <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i
    class='bx bxs-circle me-1'></i><?php echo e(App\Models\StaticConst::STATUS[0]); ?></div>
    <?php else: ?>
        <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i><?php echo e(App\Models\StaticConst::STATUS[1]); ?></div>
    <?php endif; ?><?php /**PATH /home/hatem/Desktop/Academic/resources/views/components/admin/status.blade.php ENDPATH**/ ?>