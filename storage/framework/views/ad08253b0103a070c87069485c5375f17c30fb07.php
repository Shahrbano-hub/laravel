
<?php $__env->startSection('title'); ?>
Dashboard |funda of web SE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Salary</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rice</td>
                            <td>Rice</td>
                            <td>Rice</td>
                            <td>Rice</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>