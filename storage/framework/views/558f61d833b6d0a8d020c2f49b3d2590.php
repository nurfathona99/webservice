<?php $__env->startSection('title', 'course'); ?>

<?php $__env->startSection('isi'); ?>
 <div class="alert alert-info">Course</div>

 <a href="<?php echo e(route('jurnal.create')); ?>" class=" btn btn-info float-end mt-2">Tambah Data</a>

 <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Institution</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($d->name); ?></td>
            <td><?php echo e($d->description); ?></td>
            <td><?php echo e($d->price); ?></td>
            <td><?php echo e($d->institution_id); ?></td>
            <td><a href="<?php echo e(route('jurnal.edit', $d->id)); ?>" class = "btn btn-warning"> Edit </a>
            </td>
        </td>
        <td>
            <form action="<?php echo e(route('course.delete', ['id' => 1])); ?>">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
 </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webservice23\resources\views/index.blade.php ENDPATH**/ ?>