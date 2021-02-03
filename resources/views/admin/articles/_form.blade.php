<div class="card card-primary card-outline">
    <div class="card-body">
        <br>
        <div class="form-group">
            {!! Form::label('title', 'title') !!}
            {!! Form::text('title', null, ['required', "class" => "form-control"]) !!}
        </div>
                                        
        <div class="form-group">
            {!! Form::label('category_id', 'category') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
                                        
		<div class="form-group">
			{!! Form::label('content', 'content') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control textarea']) !!}
        </div>

		<div class="form-group">
            {!! Form::checkbox('is_active', (empty($article) ? true : ($article->is_active ==1)), ['class'=>'form-check-input']) !!}
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
