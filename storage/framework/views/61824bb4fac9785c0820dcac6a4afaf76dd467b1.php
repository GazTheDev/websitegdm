<?php $__env->startSection('content'); ?>


 <div class="container">

    <div class="row">
        <div class="col-md-8">

                <h1 class="mt-4"><?php echo e($pages->title); ?></h1>
                <p class="lead">


                      </p>

				<p class="lead"><?php echo $pages->body; ?></p>

            </div>

        </div>
        <br />


    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/page/pages.blade.php ENDPATH**/ ?>