<?php $__env->startSection('css'); ?>
    <!--Internal   Notify -->
    <link href="<?php echo e(URL::asset('assets/plugins/notify/css/notifIt.css')); ?>" rel="stylesheet" />
<?php $__env->startSection('title'); ?>
Permissions Des Utilsateurs 

<?php $__env->stopSection(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Les Utilisateurs</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /
                Roles Des Utilisateurs </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php if(session()->has('Add')): ?>
    <script>
        window.onload = function() {
            notif({
                msg: " success d'ajout Permission  ",
                type: "success"
            });
        }

    </script>
<?php endif; ?>

<?php if(session()->has('edit')): ?>
    <script>
        window.onload = function() {
            notif({
                msg: " Success De Modification     ",
                type: "success"
            });
        }

    </script>
<?php endif; ?>

<?php if(session()->has('delete')): ?>
    <script>
        window.onload = function() {
            notif({
                msg: "  Success de suppression   ",
                type: "error"
            });
        }

    </script>
<?php endif; ?>

<!-- row -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                             <!-- ('Ajout Permission ') -->
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('roles.create')); ?>">Ajout Role</a>
                           
                        </div>
                    </div>
                    <br>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mg-b-0 text-md-nowrap table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($role->name); ?></td>
                                    <td>
                                       <!--('View Permissions ')-->
                                            <a class="btn btn-success btn-sm"
                                                href="<?php echo e(route('roles.show', $role->id)); ?>">View role</a>
                                        
                                        <!--('Edit Permissions ')-->
                                        
                                            <a class="btn btn-primary btn-sm"
                                                href="<?php echo e(route('roles.edit', $role->id)); ?>">Edit role</a>
                                        

                                        <?php if($role->name !== 'owner'): ?>
                                           <!--('Suppr. Permissions ') -->
                                                <?php echo Form::open(['method' => 'DELETE', 'route' => ['roles.destroy',
                                                $role->id], 'style' => 'display:inline']); ?>

                                                <?php echo Form::submit('Suppr', ['class' => 'btn btn-danger btn-sm']); ?>

                                                <?php echo Form::close(); ?>

                                            
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
    <!--/div-->
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!--Internal  Notify js -->
<script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifIt.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/plugins/notify/js/notifit-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\h.ayari\backup Corporate Rh 12_02_2023 TO SEND\resources\views/roles/index.blade.php ENDPATH**/ ?>