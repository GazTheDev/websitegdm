<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Download Section</h1>
		<br><br>
        <div   data-aos="flip-up" class="row">
                <?php $__currentLoopData = $downloads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3">
				<a href="/downloads/<?php echo e($download->slug); ?>">
                    <img src="<?php echo e(Voyager::image( $download->image )); ?>" style="width:100%">
                    <br />
                    <hr />
					<p><?php echo e($download->title); ?></p>
				</a>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/downloads/download_index.blade.php ENDPATH**/ ?>