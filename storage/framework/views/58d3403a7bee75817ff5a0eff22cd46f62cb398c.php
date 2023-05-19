<div>
   <div class="col-md-8 mt-5 m-auto">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">sr</th>
            <th scope="col">Name</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($student->id); ?></th>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->created_at); ?></td>
            <td>
                <a href="<?php echo e(route('edit', ['id' => $student->id])); ?>"
                    class="btn btn-sm btn-info">Edit</a>
            </td>
          </tr>
              
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
      </table>
   </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\new9lv\resources\views/livewire/home-component.blade.php ENDPATH**/ ?>