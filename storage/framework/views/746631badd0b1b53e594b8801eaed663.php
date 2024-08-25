    <?php echo e(Form::model($paysliptype, ['route' => ['paysliptype.update', $paysliptype->id], 'method' => 'PUT'])); ?>

    <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('name', __('Name'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter Department Name'), 'required' => 'required'])); ?>

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
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('unit', __('Unit'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('unit', null, ['class' => 'form-control', 'placeholder' => __('Enter Unit'), 'required' => 'required'])); ?>

                    <?php $__errorArgs = ['unit'];
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
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('number', __('number'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::number('number', null, ['class' => 'form-control', 'placeholder' => __('Enter number'), 'required' => 'required'])); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn btn-light" data-bs-dismiss="modal">
        <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn btn-primary">
    </div>
    <?php echo e(Form::close()); ?>

<?php /**PATH C:\xampp\htdocs\erp\resources\views/paysliptype/edit.blade.php ENDPATH**/ ?>