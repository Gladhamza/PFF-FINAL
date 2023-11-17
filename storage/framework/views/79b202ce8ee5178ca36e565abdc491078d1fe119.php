
<?php $__env->startSection('title'); ?>
Etat des Demandes Congés
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- Internal Data table css -->
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
 <!--Internal   Notify -->
 <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Congés</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/liste des Congés</span>
						</div>
					</div>
		
				</div>
				<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(session()->has('delete_conge')): ?>
        <script>
            window.onload = function() {
                notif({
                    msg: "Succes Suppression ! ",
                    type: "success"
                })
            }

        </script>
    <?php endif; ?>
	<?php if(session()->has('status_update')): ?>
	<script>
		window.onload = function() {
			notif({
				msg: "  Succes Changement Statut  ",
				type: "success"
			})
		}

	</script>
<?php endif; ?>
				<!-- row opened -->
				<div class="row row-sm">
									
			
				
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
									<a href="conges/create" class="btn btn-success btn-with-icon btn-block" style="color:white"><i
										class="typcn typcn-edit"></i>&nbsp; Ajout Demande </a>
								</div>
								<div class="d-flex justify-content-between">
									
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap" >
										<thead>
											<tr>
												<th class="border-bottom-0">#</th>
												<th class="border-bottom-0">Matricule </th>
												<th class="border-bottom-0">Date demande</th>
												<th class="border-bottom-0">Service</th>
												<th class="border-bottom-0">Equipe</th>
												<th class="border-bottom-0">Raison</th>
												<th class="border-bottom-0">Date debut</th>
												<th class="border-bottom-0">Date fin</th>
												<th class="border-bottom-0">total jrs </th>
												<th class="border-bottom-0">jours css </th>
												<th class="border-bottom-0">full / half </th>
												<th class="border-bottom-0">Date reprise</th>
												<th class="border-bottom-0">statut</th>
												<th class="border-bottom-0">user</th>
												<th class="border-bottom-0">note</th>
												<th class="border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i=0;
												?>
											<?php $__currentLoopData = $conges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conge): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php
											$i++
											?>
											<tr>
												<td><a href="<?php echo e(url('CongesDetails')); ?>/<?php echo e($conge->id); ?>"><?php echo e($i); ?></a></td>
													
												<td><?php echo e($conge->employee_number); ?></td>
												<td><?php echo e($conge->conges_date); ?></td>
												
												<td><?php echo e($conge->leavelists->leave_name); ?></td>
												<td><?php echo e($conge->products); ?></td>
												<td><?php echo e($conge->reason); ?></td>
												<td><?php echo e($conge->start_date); ?> </td>
												
												<td><?php echo e($conge->end_date); ?> </td>
												<td><?php echo e($conge->total_days); ?></td>
												<td><?php echo e($conge->unpaid_days); ?></td>
												<td><?php echo e($conge->half_day); ?></td>
												<td><?php echo e($conge->reprise_date); ?></td>
												<td>
													<?php if($conge->value_status == 1): ?>
														<span class="text-success"><?php echo e($conge->status); ?></span>
													<?php elseif($conge->value_status == 2): ?>
														<span class="text-warning"><?php echo e($conge->status); ?></span>
													<?php else: ?>  
														<span class="text-danger"><?php echo e($conge->status); ?></span>
													<?php endif; ?>
		
												</td>
												<td><?php echo e($conge->user); ?></td>
												<td><?php echo e($conge->note); ?></td>
												<td>
													<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
														<div class="dropdown dropleft">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle"
															data-toggle="dropdown" id="dropleftMenuButton" type="button">Select</button>
															<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
																<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Demande Congé')): ?>
															<a class="dropdown-item" href="<?php echo e(url('edit_conge')); ?>/<?php echo e($conge->id); ?>">Edit Demande Congé</a>
															<?php endif; ?>

															<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Suppr Congé')): ?>

															<a class="dropdown-item" href="#" data-conge_id="<?php echo e($conge->id); ?>"
																data-toggle="modal" data-target="#delete_conge"><i
																	class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;
																Suppr Congé</a>
																<?php endif; ?>
																<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Changement Statut')): ?>
																 
																<a class="dropdown-item"
																	href="<?php echo e(URL::route('status_show', [$conge->id])); ?>"><i
																		class=" text-success fa fa-money-bill"></i>&nbsp;&nbsp;
																			Changement Statut
																	</a>
																	<?php endif; ?>
		
																
														</div>
													</div>
													
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
<!-- Supprime Demande  -->
<div class="modal fade" id="delete_conge" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel"> Supp. Demande</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form action="<?php echo e(route('conges.destroy', 'test')); ?>" method="post">
				<?php echo e(method_field('delete')); ?>

                        <?php echo e(csrf_field()); ?>

		</div>
		<div class="modal-body">
			Etes Vous sure de vouloir Seupprimer ?       
			<input type="hidden" name="conge_id" id="conge_id" value="">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Annul</button>
			<button type="submit" class="btn btn-danger">Confirm</button>
		</div>
		</form>
	</div>
</div>
</div>

					
				</div>
				<!-- /row -->
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
 <!--Internal  Notify js -->
 <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
 <script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifit-custom.js')); ?>"></script>


<script>
	$('#delete_conge').on('show.bs.modal', function(event) {
		var button = $(event.relatedTarget)
		var conge_id = button.data('conge_id')
		var modal = $(this)
		modal.find('.modal-body #conge_id').val(conge_id);
	})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\h.ayari\backup Corporate Rh 12_02_2023 TO SEND\resources\views/conges/conges.blade.php ENDPATH**/ ?>