

<?php $__env->startSection('title'); ?>
Edit-Registered  |funda of web SE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h3> Edit Roles for Registered User</h3>
</div>
<div class="card-body">

<div class="row">
<div class="col-md-6">
<form action="/role-register-update/<?php echo e($users->id); ?>" method="POST">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PUT')); ?>

<div class="form-group">
    <label  class="form-label">Name</label>
    <input type="text" name="username" value="<?php echo e($users->name); ?>" class="form-control" >

  </div>
  <div class="form-group">
    <label  class="form-label">Give role</label>
    <select name="usertype" class="form-control">
    <option value="admin">Admin</option>
    <option value="vendor">Vendor </option>
    <option value="vendor">None </option>
     </select>
  

  </div>
  <button type="submit" class="btn btn-success">Update </button>
  <a href="/role-register" type="submit" class="btn btn-danger">Cancel </a>
</form>
</div>

</div>
</div>

</div>

</div>

</div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/register-edit.blade.php ENDPATH**/ ?>