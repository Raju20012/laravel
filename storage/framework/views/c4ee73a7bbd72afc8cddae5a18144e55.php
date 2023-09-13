<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="<?php echo e($product['gallery']); ?>" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>Name : <?php echo e($product['name']); ?></h2>
                <h3>Price : <?php echo e($product['price']); ?></h3>
                <h4>Category : <?php echo e($product['category']); ?></h4>
                <h4>Description : <?php echo e($product['description']); ?></h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-success">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-primary">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raju/ecommerce/resources/views/detail.blade.php ENDPATH**/ ?>