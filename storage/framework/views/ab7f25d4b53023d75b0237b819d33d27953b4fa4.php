
<?php $__env->startSection('title'); ?>
Services
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Internal Data table css -->
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto ">Paramètres de gestion</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  Services</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
				<!-- row -->
				<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session()->has('Add')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session()->get('Add')); ?></strong>
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

<?php if(session()->has('edit')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><?php echo e(session()->get('edit')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Ajout service')): ?>
									<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Ajout Service</a>
									<?php endif; ?>
								</div>
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">Services</th>
												<th class="border-bottom-0">description</th>
												<th class="border-bottom-0">Action</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $i=0 ?>
												<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php $i++ ?>
												<tr>
												<td>   <?php echo e($i); ?> </td>
                                                <td>   <?php echo e($x->leave_name); ?> </td>
												<td>   <?php echo e($x->description); ?> </td>     
												<td>
													<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Editer service')): ?>
														<a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
															data-id="<?php echo e($x->id); ?>" data-leave_name="<?php echo e($x->leave_name); ?>"
															data-description="<?php echo e($x->description); ?>" data-toggle="modal"
															href="#exampleModal2" title="Editer"><i class="las la-pen"></i></a>
													<?php endif; ?>
			
													<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Supprimer service')): ?>
														<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
															data-id="<?php echo e($x->id); ?>" data-leave_name="<?php echo e($x->leave_name); ?>"
															data-toggle="modal" href="#modaldemo9" title="Supprimer"><i
																class="las la-trash"></i></a>
													<?php endif; ?>
												</td>
											
												</tr>
													
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												
												
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
											<!-- Basic modal -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					
					<div class="modal-header">
					
						<h6 class="modal-title">Ajout service</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						
					</div>
					
				<div class="modal-body">
                    <form action="<?php echo e(route('leaves.store')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label for="exampleInputEmail1"> Titre</label>
                            <input type="text" class="form-control" id="leave_name" name="leave_name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Remarques</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
				 <!-- edit -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
	 <div class="modal-content">
		 <div class="modal-header">
			 <h5 class="modal-title" id="exampleModalLabel"> Editer service</h5>
			 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 <span aria-hidden="true">&times;</span>
			 </button>
		 </div>
		 <div class="modal-body">

			 <form action="leaves/update" method="post" autocomplete="off">
				 <?php echo e(method_field('patch')); ?>

				 <?php echo e(csrf_field()); ?>

				 <div class="form-group">
					 <input type="hidden" name="id" id="id" value="">
					 <label for="recipient-name" class="col-form-label">Titre service :</label>
					 <input class="form-control" name="leave_name" id="leave_name" type="text">
				 </div>
				 <div class="form-group">
					 <label for="message-text" class="col-form-label">Remarques</label>
					 <textarea class="form-control" id="description" name="description"></textarea>
				 </div>
		 </div>
		 <div class="modal-footer">
			 <button type="submit" class="btn btn-primary">confirmer</button>
			 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
		 </div>
		 </form>
	 </div>
 </div>
</div>
<!-- delete -->
<div class="modal" id="modaldemo9">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header">
				<h6 class="modal-title"> Supprimer service</h6><button aria-label="Close" class="close" data-dismiss="modal"
					type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<form action="leaves/destroy" method="post">
				<?php echo e(method_field('delete')); ?>

				<?php echo e(csrf_field()); ?>

				<div class="modal-body">
					<p> !! êtes-vous sûr de vouloir supprimer      </p><br>
					<input type="hidden" name="id" id="id" value="">
					<input class="form-control" name="leave_name" id="leave_name" type="text" readonly>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
					<button type="submit" class="btn btn-danger">Valider</button>
				</div>
		</div>
		</form>
	</div>
</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
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
<!-- Internal Modal js-->
<script src="<?php echo e(URL::asset('assets/js/modal.js')); ?>"></script>

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var leave_name = button.data('leave_name')
        var description = button.data('description')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #leave_name').val(leave_name);
        modal.find('.modal-body #description').val(description);
    })

</script>

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var leave_name = button.data('leave_name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #leave_name').val(leave_name);
    })

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\h.ayari\backup Corporate Rh 12_02_2023 TO SEND\resources\views/leaves/leaves.blade.php ENDPATH**/ ?>