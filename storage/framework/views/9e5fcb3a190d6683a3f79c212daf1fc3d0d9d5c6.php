<?php $__env->startSection('content'); ?>


 <div class="container">

    <div   data-aos="flip-up" class="row">
        <div class="col-md-8">

                <h1 class="mt-4"><?php echo e($post->title); ?></h1>
                <p class="lead">

                    Published - <?php echo e($post->created_at->format('D d M')); ?>


                      </p>

				<img class="img-fluid rounded"src="<?php echo e(Voyager::image( $post->image )); ?>" style="width:100%">
				<p class="lead"><?php echo $post->body; ?></p>
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
        <h3 class="lead">Comments</h3><hr />
        <?php echo $__env->make('comments::components.comments', ['model' => $post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/posts/post_single.blade.php ENDPATH**/ ?>