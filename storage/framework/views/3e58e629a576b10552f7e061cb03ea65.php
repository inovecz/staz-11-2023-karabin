

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Products - <?php echo e($product->id); ?></span>
        <a href=http://127.0.0.1:8000/products/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail produktu
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            <?php echo e($product->id); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            <?php echo e($product->name); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Supplier
                        </div>
                        <div class="col-6">
                            <?php echo e($product->supplier); ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            Cost
                        </div>
                        <div class="col-6">
                            <?php echo e($product->cost); ?>

                        </div>
                    </div>
                    <div class="col-6">
                            Category
                        </div>
                        <div class="col-6">
                            <?php echo e($product->category); ?>

                        </div>
                    </div>
                    <hr>
                    <div>
                        </br>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="<?php echo e($product->getEditLink()); ?>" class="btn btn-success btn-sm" role="button" aria-pressed="true">Edit</a>
                        </div>
                        <div class="col-6">
                        <?php echo Form::model($product, ['route' => ['products.deletePost', $product->id]]); ?>

                            <?php echo Form::hidden('id'); ?>

                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                        <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auto-diely\resources\views/products/view.blade.php ENDPATH**/ ?>