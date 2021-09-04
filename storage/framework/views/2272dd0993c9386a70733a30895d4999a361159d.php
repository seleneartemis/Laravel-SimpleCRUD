
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>NotePad</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="<?php echo e(route('notes.create')); ?>" style="background-color: #3F9E29">Create New Note</a>
        </div>
    </div>
</div>

<?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

<table class="table table-striped" style=" background-color: #8FFF75">
    <tr>
        <th>Title</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($note->title); ?></td>
        <td>
            <a class="btn btn-warning" href="<?php echo e(route('notes.show',$note->id)); ?>" style=" background-color: #3F9E29">Show</a>
            <a class="btn btn-secondary" href="<?php echo e(route('notes.edit',$note->id)); ?>" style=" background-color: #9E197F">Edit</a>
            <form action="<?php echo e(route('notes.destroy',$note->id)); ?>" method="POST">

                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\noteCrud\resources\views/notes/index.blade.php ENDPATH**/ ?>