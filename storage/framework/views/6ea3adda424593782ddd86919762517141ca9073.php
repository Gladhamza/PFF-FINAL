
<?php $__env->startSection('css'); ?>
    <!--- Internal Select2 css-->
    <link href="<?php echo e(URL::asset('assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="<?php echo e(URL::asset('assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')); ?>">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
 Demande Congés
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Demandes</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Demande Congés </span>
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

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo e(route('conges.store')); ?>" method="post" enctype="multipart/form-data"
                        autocomplete="off">
                        <?php echo e(csrf_field()); ?>

                        

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">Matricule </label>
                                <input type="text" class="form-control" id="employee_number" name="employee_number"
                                     required>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label">Raison de la Demande </label>
                                <input type="text" class="form-control" id="conges_reason" name="conges_reason"
                                     required>
                            </div>
                            <div class="col">
                                <label> Date de la demande</label>
                                <input class="form-control fc-datepicker" name="conges_date" id="conges_date" placeholder="YYYY-MM-DD"
                                    type="text" value="<?php echo e(date('Y-m-d')); ?>" required>
                            </div>

                            

                        </div>

                        
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">service</label>
                                <select name="leave" class="form-control SlectBox" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="leave" selected disabled>services </option>
                                    <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($leave->id); ?>"> <?php echo e($leave->leave_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Equipe</label>
                                <select id="product" name="product" class="form-control">
                                </select>
                            </div>
                            <div class="col">
                                <label for="start_date"> Date Début</label>
                                <input  type="date" id="start_date" name="start_date" class="form-control fc-datepicker"  placeholder="YYYY-MM-DD"
                                    type="text" required>
                            </div>
                            <div class="col">
                                <label for="end_date">Date fin </label>
                                <input type="date" id="end_date" name="end_date" class="form-control fc-datepicker" placeholder="YYYY-MM-DD"
                                    type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="half_day">Choix Congé</label>
                                <select class="form-control" id="half_day" name="half_day">
                                    
                                    <option value="full_day">Une journee </option>
                                    <option value="half_day_am">  Matin </option>
                                    <option value="half_day_pm">Après-midi</option>
                                </select>
                            </div>
                            
                        </div>


                        
                       
                        
                        <div class="row">
                            <div class="col">
                                <label for="result_label" class="control-label">Total jours </label>
                                <input type="text" class="form-control" id="total_days" name="total_days" readonly>

                            </div>

                            <div class="col">
                                <label for="result_label" class="control-label">solde de congé </label>
                                <input type="number" class="form-control" id="paid_days" name="paid_days"  title=" Veillez entrez votre solde de congé">

                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Votre total Congé sans solde</label>
                                <input type="text" class="form-control form-control-lg" id="unpaid_days" name="unpaid_days"
                                   
                                    
                                    readonly required >
                            </div>


                            <div class="row">
                                <div class="col">
                                    <label for="reprise_date">Date de reprise </label>
                                    <input type="date" id="reprise_date" name="reprise_date" class="form-control fc-datepicker" placeholder="YYYY-MM-DD"
                                        type="text" required>
                                </div>
    <div class="col">
                                <label for="inputName" class="control-label">Total de congés payés restant  </label>
                                <input type="text" class="form-control form-control-lg" id="remaining_days" name="remaining_days"
                                   
                                    
                                    readonly required >
                            </div>  

                        </div>

                        

                    
                        </div>

                        
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">Remarques</label>
                                <textarea class="form-control" id="exampleTextarea" name="note" rows="3"></textarea>
                            </div>
                        </div><br>

                        <p class="text-danger">* piece jointe : pdf, jpeg ,.jpg , png </p>
                        <h5 class="card-title">piece jointe </h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                        </div><br>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Valider </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <!-- Internal Select2 js-->
    <script src="<?php echo e(URL::asset('assets/plugins/select2/js/select2.min.js')); ?>"></script>
    <!--Internal Fileuploads js-->
    <script src="<?php echo e(URL::asset('assets/plugins/fileuploads/js/fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fileuploads/js/file-upload.js')); ?>"></script>
    <!--Internal Fancy uploader js-->
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')); ?>"></script>
    <!--Internal  Form-elements js-->
    <script src="<?php echo e(URL::asset('assets/js/advanced-form-elements.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/select2.js')); ?>"></script>
    <!--Internal Sumoselect js-->
    <script src="<?php echo e(URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')); ?>"></script>
    <!--Internal  Datepicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')); ?>"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="<?php echo e(URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')); ?>"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="<?php echo e(URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')); ?>"></script>
    <!-- Internal form-elements js -->
    <script src="<?php echo e(URL::asset('assets/js/form-elements.js')); ?>"></script>
 <!-- Internal jquery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();

    </script>

<script>
    $(document).ready(function() {
        $('select[name="leave"]').on('change', function() {
            var SectionId = $(this).val();
            if (SectionId) {
                $.ajax({
                    url: "<?php echo e(URL::to('leave')); ?>/" + SectionId,
                    type: "get",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="product"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="product"]').append('<option value="' +
                                value + '">' + value + '</option>');
                        });
                    },
                });

            } else {
                console.log('AJAX load did not work');
            }
        });

    });

</script>
    


<script>

$(document).ready(function() {
    // Call the calculateDays function when the start and end date inputs are changed
    $('#start_date, #end_date, #paid_days,#half_day').change(calculateDays);

    function calculateDays() {
        let start_date = $('#start_date').val();
        let end_date = $('#end_date').val();
        let paid_days = parseInt($('#paid_days').val());
        let half_day = $('#half_day').val();

        var start = new Date(start_date);
        var end = new Date(end_date);
        var workingDays = 0;
        var unpaid_days = 0;
        var remaining_days = 0;
        if(start_date != "" && end_date != ""){
            if(start_date == end_date){
                $('#half_day').prop('disabled', false);
            }else {
                $('#half_day').val("full_day");
                $('#half_day').prop('disabled', true);
            }
            for (var date = start; date <= end; date.setDate(date.getDate() + 1)) {
                if (date.getDay() != 0 && date.getDay() != 6) {
                    workingDays++;
                }
            }
             if(half_day == 'half_day_am'){
                workingDays = workingDays - 0.5;
            }else if(half_day == 'half_day_pm'){
                workingDays = workingDays - 0.5;
            }
            if(paid_days > workingDays){
                unpaid_days = 0;
                remaining_days = paid_days - workingDays;
                $('#total_days').val(workingDays);
                $('#unpaid_days').val(unpaid_days);
                $('#remaining_days').val(remaining_days);
            }else if(!isNaN(paid_days)){
                unpaid_days = workingDays - paid_days;
$('#total_days').val(workingDays);
                $('#unpaid_days').val(unpaid_days);
                $('#remaining_days').val(0);
            }else if(isNaN(paid_days)){
                $('#paid_days').addClass("is-invalid");
                $('#paid_days').attr("placeholder", "Enter valid number");
            }
            if(remaining_days == 0){
                $('#remaining_days_label').val("You have no more paid days");
            }
        }
    } 
});
 </script>


    



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\www\invoice2\resources\views/conges/add_conge.blade.php ENDPATH**/ ?>