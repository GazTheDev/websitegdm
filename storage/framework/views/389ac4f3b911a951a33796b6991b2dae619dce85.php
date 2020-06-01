<?php $__env->startSection('content'); ?>


 <div class="container">

    <div class="row">
        <div class="col-md-8">

                <h1 class="mt-4"><?php echo e($downloads->title); ?></h1>
                <p class="lead">


                      </p>

				<img class="img-fluid rounded"src="<?php echo e(Voyager::image( $downloads->image )); ?>" style="width:100%">
                <p class="lead"><?php echo $downloads->about; ?></p>

                <div class="btn btn-succsess">

                <a href="<?php echo e($downloads->download_link); ?>">Download Today</a>
                </div>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_email"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
            </div>

        </div>
        <br />


    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/downloads/download_single.blade.php ENDPATH**/ ?>