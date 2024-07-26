<?php $__env->startSection('contentauth'); ?>
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="<?php echo e(asset('assets/images/logo-img.png')); ?>" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in Admin</h3>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
												class="d-flex justify-content-center align-items-center">
												<img class="me-2" src="<?php echo e(asset('assets/images/icons/search.svg')); ?>"
													width="16" alt="Image Description">
												<span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i
												class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
						                <form method="POST" class="row g-3" action="<?php echo e(route('admin.auth.login.store')); ?>">
						                    <?php echo csrf_field(); ?>
						                    <?php echo method_field('POST'); ?>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" value="<?php echo e(old('email')); ?>" required class="form-control" id=""
													placeholder="Email Address">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter
													Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" required name="password" class="form-control border-end-0"
														id="" value=""
														placeholder="Enter Password"> <a href="javascript:;"
														class="input-group-text bg-transparent"><i
															class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked" checked>
													<label class="form-check-label"
														for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i
															class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsauth'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hatem/Desktop/Academic/resources/views/auth/admin/login.blade.php ENDPATH**/ ?>