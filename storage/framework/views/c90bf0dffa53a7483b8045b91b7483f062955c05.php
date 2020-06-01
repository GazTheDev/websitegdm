<?php $__env->startSection('content'); ?>

<div class="container">
<h1>Contact Me</h1>

<?php if(Session::has('success')): ?>
   <div class="alert alert-success">
     <?php echo e(Session::get('success')); ?>

   </div>
<?php endif; ?>

<?php echo Form::open(['route'=>'contact.store']); ?>


<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <?php echo Form::label('Name:'); ?>

    <?php echo Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Name']); ?>

<span class="text-danger"><?php echo e($errors->first('name')); ?></span>
</div>

<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <?php echo Form::label('Email:'); ?>

    <?php echo Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']); ?>

<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
</div>

<div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
    <?php echo Form::label('Message:'); ?>

    <?php echo Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']); ?>

<span class="text-danger"><?php echo e($errors->first('message')); ?></span>
</div>

<div class="form-group">
<button onclick="window.location.href = 'https://garethdaviesmedia.tech';"  class="btn btn-success">Send mail</button>
</div>

<?php echo Form::close(); ?>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/contact.blade.php ENDPATH**/ ?>