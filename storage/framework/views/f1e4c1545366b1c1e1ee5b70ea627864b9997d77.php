
<?php $__env->startSection('content'); ?>

<div class="row">
    <div>
        <div>
            <h2> Show Post</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="<?php echo e(route('notes.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <?php echo e($note->title); ?>

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Info:</strong>
            <?php echo e($note->details); ?>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\noteCrud\resources\views/notes/show.blade.php ENDPATH**/ ?>