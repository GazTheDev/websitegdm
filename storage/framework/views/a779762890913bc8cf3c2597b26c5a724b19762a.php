<?php $__env->startSection('content'); ?>
<?php $__env->startSection('pageTitle', 'News'); ?>

<div class=" container">

        <div  >

          <!-- Blog Entries Column -->
          <div class="col-md-8">
                <div class="card mb-4">
                        <section class="jumbotron text-center">
                                <div class="container">
                                  <h1 class="jumbotron-heading">News Section</h1>
                                  <p class="lead text-muted">Check Out my latest new below</p>

                                </div>
                            </div>

                              </section>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <!-- Blog Post -->
        <div class="card mb-4">
        <img class="card-img-top" src="<?php echo e(Voyager::image( $post->image )); ?>" alt="Card image cap">
                <div class="card-body">
                <h2 class="card-title"><?php echo e($post->title); ?></h2>
                    <p class="card-tex"><?php echo e($post->excerpt); ?></p>
                            <a href="/posts/<?php echo e($post->slug); ?>"
                                class="btn btn-primary">
                                Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                  <?php echo e($post->created_at); ?>

                  <a href="https://twitter.com/garethmedia"> By Gaz</a>
                </div>
            </div>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\voyager\new\resources\views/posts/post_index.blade.php ENDPATH**/ ?>