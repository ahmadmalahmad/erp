    {{ Form::model($paysliptype, ['route' => ['paysliptype.update', $paysliptype->id], 'method' => 'PUT']) }}
    <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('name', __('Name'), ['class' => 'form-label']) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('Enter Department Name'), 'required' => 'required']) }}
                    @error('name')
                        <span class="invalid-name" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('unit', __('Unit'), ['class' => 'form-label']) }}
                    {{ Form::text('unit', null, ['class' => 'form-control', 'placeholder' => __('Enter Unit'), 'required' => 'required']) }}
                    @error('unit')
                        <span class="invalid-name" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('number', __('number'), ['class' => 'form-label']) }}
                    {{ Form::number('number', null, ['class' => 'form-control', 'placeholder' => __('Enter number'), 'required' => 'required']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
        <input type="submit" value="{{ __('Update') }}" class="btn btn-primary">
    </div>
    {{ Form::close() }}
