 <?php $__env->startSection('content'); ?>
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8 ">
       <div class="card">
         <div class="card-header">Display all animals</div>

         <div class="card-body">
           <table class="table table-striped">
             <thead>
               <tr>

                 <th>name</th>
                 <th>type</th>
                 <th>dob</th>
                 <th>description</th>
                 <th>state</th>
                 <th colspan="3">Action</th>
               </tr>
             </thead>
             <tbody>
               <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $animal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

               <tr>
                 
                 <td><?php echo e($animal['name']); ?></td>
                 <td><?php echo e($animal['type']); ?></td>
                 <td><?php echo e($animal['dob']); ?></td>
                 <td><?php echo e($animal['description']); ?></td>
                 <td><?php echo e($animal['state']); ?></td>

                 <td><a href="<?php echo e(action('AnimalController@show', $animal['id'])); ?>" class="btn
                    btn-primary">Details</a></td>
                    <td><a href="<?php echo e(action('AnimalController@edit', $animal['id'])); ?>" class="btn
                       btn-warning">Edit</a></td>
                       <td>
                         <form action="<?php echo e(action('AnimalController@destroy', $animal['id'])); ?>"
                          method="post"> <?php echo csrf_field(); ?>
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger" type="submit"> Delete</button>
                        </form>
                      </td>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /users/1/180201314/www/sanctuary/resources/views/animals/index.blade.php ENDPATH**/ ?>