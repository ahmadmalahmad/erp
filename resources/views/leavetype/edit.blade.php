    {{ Form::model($leavetype, ['route' => ['leavetype.update', $leavetype->id], 'method' => 'PUT']) }}
    <div class="modal-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('title', __('Leave Type'), ['class' => 'form-label']) }}
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => __('Enter Leave Type Name'), 'required' => 'required']) }}
                    @error('title')
                        <span class="invalid-name" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('days', __('Days Per Year'), ['class' => 'form-label']) }}
                    {{ Form::number('days', null, ['class' => 'form-control', 'placeholder' => __('Enter Days / Year'), 'required' => 'required']) }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('min_years', __('Min Years'), ['class' => 'form-label']) }}
                    {{ Form::number('min_years', null, ['class' => 'form-control', 'placeholder' => __('Enter Min Years'), 'required' => 'required']) }}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('max_years', __('Max Years'), ['class' => 'form-label']) }}
                    {{ Form::number('max_years', null, ['class' => 'form-control', 'placeholder' => __('Enter Max Year'), 'required' => 'required']) }}
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <input type="button" value="{{ __('Cancel') }}" class="btn btn-light" data-bs-dismiss="modal">
        <input type="submit" value="{{ __('Update') }}" class="btn btn-primary">
    </div>

    {{ Form::close() }}
