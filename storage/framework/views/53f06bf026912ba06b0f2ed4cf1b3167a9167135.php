
<?php $__env->startSection('content'); ?>

<div class="row">
    <div>
        <div>
            <h2>Edit Post</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="<?php echo e(route('notes.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('notes.update',$note->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <?php echo method_field('PUT'); ?>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" value="<?php echo e($note->title); ?>" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info:</strong>
                <textarea class="form-control" style="height:150px" name="details" placeholder="Description"><?php echo e($note->details); ?></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\noteCrud\resources\views/notes/edit.blade.php ENDPATH**/ ?>