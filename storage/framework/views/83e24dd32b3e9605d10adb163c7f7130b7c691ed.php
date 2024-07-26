<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="<?php echo e(asset('assets/images/logo-icon.png')); ?>" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
            <ul>
                <li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
                </li>
                <li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_admin')): ?>
                <li> <a href="<?php echo e(route('admin.admins.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Admin</a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_teacher')): ?>
                <li> <a href="<?php echo e(route('admin.teacher.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Teacher</a>
                </li>
                <?php endif; ?>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_student')): ?>
                <li> <a href="<?php echo e(route('admin.student.index')); ?>"><i class="bx bx-right-arrow-alt"></i>Student</a>
                </li>
                <?php endif; ?>
            </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('all_role')): ?>
        <li>
            <a href="<?php echo e(route('admin.roles.index')); ?>">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Roles</div>
            </a>
        </li>
        <?php endif; ?>

    </ul>
    <!--end navigation-->
</div>
<?php /**PATH /home/hatem/Desktop/Academic/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>