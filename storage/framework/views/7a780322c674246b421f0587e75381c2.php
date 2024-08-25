    <?php echo e(Form::open(['url' => 'leavetype', 'method' => 'post'])); ?>

    <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('title', __('Leave Type'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('Enter Leave Type Name'), 'required' => 'required'])); ?>

                    <?php $__errorArgs = ['title'];
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
                    <?php echo e(Form::label('days', __('Days Per Year'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::number('days', null, ['class' => 'form-control', 'placeholder' => __('Enter Days / Year'), 'required' => 'required'])); ?>

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('min_years', __('Min Years'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::number('min_years', null, ['class' => 'form-control', 'placeholder' => __('Enter Min Years'), 'required' => 'required'])); ?>

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <?php echo e(Form::label('max_years', __('Max Years'), ['class' => 'form-label'])); ?>

                    <?php echo e(Form::number('max_years', null, ['class' => 'form-control', 'placeholder' => __('Enter Max Year'), 'required' => 'required'])); ?>

                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <input type="button" value="<?php echo e(__('Cancel')); ?>" class="btn  btn-light" data-bs-dismiss="modal">
        <input type="submit" value="<?php echo e(__('Create')); ?>" class="btn  btn-primary">
    </div>
    <?php echo e(Form::close()); ?>

<?php /**PATH C:\xampp\htdocs\erp\resources\views/leavetype/create.blade.php ENDPATH**/ ?>