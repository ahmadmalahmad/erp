<?php echo e(Form::model($unit,array('route' => array('section.update', $section->id), 'method' => 'PUT'))); ?>

<div class="modal-body">

    <div class="row ">
        <div class="col-12">
            <div class="form-group">
                <?php echo e(Form::label('branch_id',__('Branch'))); ?>

                <?php echo e(Form::select('branch_id',$branch,null,array('class'=>'form-control select','placeholder'=>__('select Branch'),'required'=> 'required'))); ?>

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <?php echo e(Form::label('department_id',__('Department'))); ?>

                <?php echo e(Form::select('department_id',$department,null,array('class'=>'form-control select','placeholder'=>__('select Department'),'required'=> 'required'))); ?>

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <?php echo e(Form::label('unit_id',__('Unit'))); ?>

                <?php echo e(Form::select('unit_id',$unit,null,array('class'=>'form-control select','placeholder'=>__('select Section'),'required'=> 'required'))); ?>

            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <?php echo e(Form::label('name',__('Name'))); ?>

                <?php echo e(Form::text('name',null,array('class'=>'form-control','placeholder'=>__('Enter Unit Name'),'required'=> 'required'))); ?>

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-name" role="alert">
                    <strong class="text-danger"><?php echo e($message); ?></strong>
                </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn  btn-primary">
</div>
<?php echo e(Form::close()); ?>

<?php /**PATH C:\xampp\htdocs\erp\resources\views/section/edit.blade.php ENDPATH**/ ?>