

<?php $__env->startSection('title'); ?>
Vos Equipes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Internal Data table css -->
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<!---Internal Owl Carousel css-->
<link href="<?php echo e(URL::asset('assets/plugins/owl-carousel/owl.carousel.css')); ?>" rel="stylesheet">
<!---Internal  Multislider css-->
<link href="<?php echo e(URL::asset('assets/plugins/multislider/multislider.css')); ?>" rel="stylesheet">
<!--- Select2 css -->
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Paramétres de gestion</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  Equipes</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								
								
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if(session()->has('Add')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session()->get('Add')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>


    <?php if(session()->has('Edit')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo e(session()->get('Edit')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>


    <?php if(session()->has('delete')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo e(session()->get('delete')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if(session()->has('Error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo e(session()->get('Error')); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

								<!-- row opened -->
								<div class="row row-sm">
									
				
									
				
									<!--div-->
									<div class="col-xl-12">
										<div class="card mg-b-20">
											<div class="card-header pb-0">
												<div class="d-flex justify-content-between">
													<h4 class="card-title mg-b-0"></h4>
													<i class="mdi mdi-dots-horizontal text-gray"></i>
												</div>
												<div class="d-flex justify-content-between">
													<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Ajout Equipe')): ?>
													<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Ajout Equipe</a>
													<?php endif; ?>
												</div>
											</div>
											<div class="card-body">
												<div class="table-responsive">
													<table id="example1" class="table key-buttons text-md-nowrap" >
														<thead>
															<tr>
																<th class="border-bottom-0">#</th>
																<th class="border-bottom-0"> Equipes </th>
																<th class="border-bottom-0"> Services <Section></Section></th>
																<th class="border-bottom-0">Remarques</th><!------>
																<th class="border-bottom-0">Action</th><!------>
																
																
															</tr>
														</thead>
														<tbody>
															<?php $i = 0; ?>
															<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php $i++; ?>
															<tr>
																<td><?php echo e($i); ?></td>
																<td><?php echo e($product->product_name); ?></td>
																<td><?php echo e($product->leavelists->leave_name); ?></td>
																<td><?php echo e($product->description); ?></td>
																<td>
																	
																	<button class="btn btn-outline-success btn-sm"
																	data-name="<?php echo e($product->product_name); ?>" data-pro_id="<?php echo e($product->id); ?>"
																	data-leave_name="<?php echo e($product->leavelists->leave_name); ?>"
																	data-description="<?php echo e($product->description); ?>" data-toggle="modal"
																	data-target="#edit_product">Editer Equipes</button>
																	

																	
					
																<button class="btn btn-outline-danger btn-sm " data-pro_id="<?php echo e($product->id); ?>"
																	data-product_name="<?php echo e($product->product_name); ?>" data-toggle="modal"
																	data-target="#modaldemo9">Supprimer Equipes</button>
																	
															</td>
																
																
															</tr>
															<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</tbody>
													</table>
												</div>
											</div>
										
										</div>
										
									</div>
									<!--/div-->
										<!-- Basic modal -->
									
										<div class="modal" id="modaldemo8">
											<div class="modal-dialog" role="document">
												<div class="modal-content modal-content-demo">
													<div class="modal-header">
														
														<h6 class="modal-title">Ajout Equipe</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
													
													</div>
												<div class="modal-body">
													
													<form action="<?php echo e(route('products.store')); ?>" method="post">
														<?php echo e(csrf_field()); ?>

														<div class="modal-body">
															<div class="form-group">
																<label for="exampleInputEmail1"> Equipes </label>
																<input type="text" class="form-control" id="product_name" name="product_name" required>
															</div>
								
															<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Services</label>
															<select name="leavelists_id" id="leavelists_id" class="form-control" required>
																<option value="" selected disabled> --Select Section --</option>
																<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<option value="<?php echo e($leave->id); ?>"><?php echo e($leave->leave_name); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select>
								
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Remarques</label>
																<textarea class="form-control" id="description" name="description" rows="3"></textarea>
															</div>
								
														</div>
														<div class="modal-footer">
															<button type="submit" class="btn btn-success">confirmer</button>
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
														</div>
													</form>
												</div>
											</div>
										</div>
	<!-- End Basic modal -->
									
								</div>

								<!-- /row -->
								 <!-- edit -->
        <div class="modal fade" id="edit_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editer Equipes </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action='products/update' method="post">
					<?php echo e(method_field('patch')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="modal-body">

						<div class="form-group">
							<label for="title">Titre Demande </label>

							<input type="hidden" class="form-control" name="pro_id" id="pro_id" value="">

							<input type="text" class="form-control" name="product_name" id="product_name">
						</div>

						<label class="my-1 mr-2" for="inlineFormCustomSelectPref">Services</label>
						<select name="leave_name" id="leave_name" class="custom-select my-1 mr-sm-2" required>
							<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option><?php echo e($leave->leave_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>

						<div class="form-group">
							<label for="des">Remarques </label>
							<textarea name="description" cols="20" rows="5" id='description'
								class="form-control"></textarea>
						</div>

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Edit info </button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- delete -->
	<div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Supprimer Equipes </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="products/destroy" method="post">
					<?php echo e(method_field('delete')); ?>

					<?php echo e(csrf_field()); ?>

					<div class="modal-body">
						<p> ? Voullez vous supprimer</p><br>
						<input type="hidden" name="pro_id" id="pro_id" value="">
						<input class="form-control" name="product_name" id="product_name" type="text" readonly>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-danger">Confirmer</button>
					</div>
				</form>
			</div>
		</div>
	</div>
			</div>
			<!-- Container closed -->
		</div>
	</div>
		<!-- main-content closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- Internal Data tables -->
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')); ?>"></script>
<!--Internal  Datatable js -->
<script src="<?php echo e(URL::asset('assets/js/table-data.js')); ?>"></script>
<!--Internal  Datepicker js -->
<script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>
<!-- Internal Select2 js-->
<script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
<!-- Internal Modal js-->
<script src="<?php echo e(URL::asset('assets/js/modal.js')); ?>"></script>

<script>
	$('#edit_product').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var product_name = button.data('name')
		var leave_name = button.data('leave_name')
		var pro_id = button.data('pro_id')
		var description = button.data('description')
		var modal = $(this)
		modal.find('.modal-body #product_name').val(product_name);
		modal.find('.modal-body #leave_name').val(leave_name);
		modal.find('.modal-body #description').val(description);
		modal.find('.modal-body #pro_id').val(pro_id);
	})


	$('#modaldemo9').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var pro_id = button.data('pro_id')
		var product_name = button.data('product_name')
		var modal = $(this)

		modal.find('.modal-body #pro_id').val(pro_id);
		modal.find('.modal-body #product_name').val(product_name);
	})

</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\h.ayari\backup Corporate Rh 12_02_2023 TO SEND\resources\views/products/products.blade.php ENDPATH**/ ?>