<?php $__env->startSection('content'); ?>


    <div class="card-harder">
        <h2> Tambah Data</h2>
        <a href="<?php echo e(route('index')); ?>" class=" btn btn-warning float-end mt-2">Kembali</a>
    </div>


        <!-- /resources/views/post/create.blade.php -->

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card-body">

        <!-- Create Post Form -->

        <form action="<?php echo e(route('course.store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">Institution</label>
                <input type="text" class="form-control" name="institution_id">
            </div>
            <div class="card-harder">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-harder">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\xampp\htdocs\webservice23\resources\views/formcourse.blade.php ENDPATH**/ ?>