<?php $__env->startSection('content'); ?>
    <div  data-aos="fade-up"
    data-aos-duration="2000" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">

                        <?php if($errors): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e($error); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <?php echo Form::model($user, ['route' => ['user.update'], 'method' => 'POST']); ?>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('name', null, ['class' => 'form-control', 'id' => 'name']); ?>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <?php echo Form::text('email', null, ['class' => 'form-control', 'id' => 'email']); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>

                            </div>

                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/user.blade.php ENDPATH**/ ?>