<?php $__env->startSection('content'); ?>
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="tranding-wrapper">
                <h2>Orders List</h2>
                <div class="">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/<?php echo e($item->id); ?>">
                                <img class="trending-img" src="<?php echo e($item->gallery); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h3><?php echo e($item->name); ?></h3>
                                <h5>Delivery Status :<?php echo e($item->status); ?></h5>
                                <h5>Payment Status :<?php echo e($item->payment_status); ?></h5>
                                <h5>Payment Method :<?php echo e($item->payment_method); ?></h5>
                                <h5>Delivery Address :<?php echo e($item->address); ?></h5>
                                <h5>Price :<?php echo e($item->price); ?></h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raju/ecommerce/resources/views/myorder.blade.php ENDPATH**/ ?>