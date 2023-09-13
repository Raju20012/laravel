<?php $__env->startSection('content'); ?>
    <div class="custom-product">
        <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td><?php echo e($total); ?> Taka</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0 Taka</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>100</td>
                    </tr>
                    <tr>

                        <td>Total Amount</td>
                        <td><?php echo e($total + 100); ?></td>
                    </tr>
                </tbody>
            </table>

            <form method="POST" action="orderplace">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <textarea placeholder="Enter Your Address" name="address" class="form-control"> </textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p><input type="radio" value="cash" name="payment"> <span>Online Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>Bkash Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span></p>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/raju/ecommerce/resources/views/ordernow.blade.php ENDPATH**/ ?>