<?php $__env->startSection('content'); ?>
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h2>Cart List</h2>
                <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/<?php echo e($item->id); ?>">
                                <img class="trending-img" src="<?php echo e($item->gallery); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h3><?php echo e($item->name); ?></h3>
                                <h5><?php echo e($item->description); ?></h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/<?php echo e($item->card_id); ?>" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <a class="btn btn-success" href="/ordernow">Order Now</a> <br> <br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raju/ecommerce/resources/views/cardlist.blade.php ENDPATH**/ ?>