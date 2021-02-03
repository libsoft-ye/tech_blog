<div class="card card-primary card-outline">
    <div class="card-body">
        <br>
        <div class="form-group">
            {!! Form::label('name', 'name') !!}
            {!! Form::text('name', null, ['required', "class" => "form-control"]) !!}
        </div>
                                        
        <div class="form-group">
            {!! Form::label('parent', 'parent') !!}
            {!! Form::select('parent', ['0'=>'is parent'] + $parents, null, ['required', 'class' => 'form-control']) !!}
        </div>
		<div class="form-group">
            {!! Form::checkbox('is_active', (empty($category) ? true : ($category->is_active ==1)), ['class'=>'form-check-input']) !!}
            {!! Form::label('is_active', 'is active') !!}
        </div>
    </div>
</div>

            
<div class="text-left">
	<button type="submit" class="btn btn-primary">
		<h5 class="mb-0">
			Save
			<i class="fas fa-save"></i>
		</h5>
    </button>
</div>
