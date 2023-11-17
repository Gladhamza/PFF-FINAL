<?php $__env->startSection('title'); ?>
login Votre espace gestion - Infopro Digital
<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
<!-- Sidemenu-respoansive-tabs css -->
<link href="<?php echo e(URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
		<div class="container-fluid">
			<div class="row no-gutter">
				<!-- The image half -->
				<!-- The content half -->
				<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
							<div class="row">
								<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
									<div class="card-sigin">
										<div class="mb-5 d-flex"> <a href="<?php echo e(url('/' . $page='Home')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/logo-ipda.png')); ?>" class="sign-favicon ht-60" alt="logo"></a>  </h3></div>
										<div class="card-sigin">
											<div class="main-signup-header">
												<h2>Bienvenu</h2>
												
                                                <form method="POST" action="<?php echo e(route('login')); ?>">
                                                 <?php echo csrf_field(); ?>
													<div class="form-group">
													<label>Votre Email </label>
                                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                     <span class="invalid-feedback" role="alert">
                                                     <strong><?php echo e($message); ?></strong>
                                                     </span>
                                                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
													</div>

												 <div class="form-group">
											 	 <label> Votre mot de passe </label> 
                                                
                                                  <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong><?php echo e($message); ?></strong>
                                                  </span>
												  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                  <div class="form-group row">
                                                      <div class="col-md-6 offset-md-4">
                                                           <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <label class="form-check-label" for="remember">
                                                                       <?php echo e(__('souviens-toi de moi')); ?>

                                                                </label>
                                                           </div>
                                                       </div>
                                                   </div>
												  </div>
                                                    <button type="submit" class="btn btn-main-primary btn-block">
                                                    <?php echo e(__('Se connecter')); ?>

                                                    </button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->

                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
					<div class="row wd-100p mx-auto text-center">
						<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
							<video width="900" height="600" controls>
							<source src="<?php echo e(URL::asset('assets/img/media/Corporate_RH_Slideshow_rectif.mp4')); ?>" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto"  type="video/mp4">
								Your browser does not support the video tag.
							</video>
							</div>
					</div>
				</div>

			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\h.ayari\backup Corporate Rh 12_02_2023 TO SEND\resources\views/auth/login.blade.php ENDPATH**/ ?>