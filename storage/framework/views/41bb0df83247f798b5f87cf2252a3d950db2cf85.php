<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                  <h2>  Welcome staff! </h2>
                  <a href="available" class="button">View adoption requests</a><br>
                  <a href="animals" class="button">View all animals</a><br>
                  <a href="animals/create" class="button">Add an animal</a><br>



                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/sanctuary/resources/views/staffhome.blade.php ENDPATH**/ ?>