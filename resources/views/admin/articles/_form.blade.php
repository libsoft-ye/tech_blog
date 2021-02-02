<div class="card card-primary card-outline">
    <div class="card-body">
        <br>
        <div class="form-group">
            {!! Form::label('title', 'title') !!}
            {!! Form::text('title', null, ['required', "class" => "form-control"]) !!}
        </div>
                                        
        <div class="form-group">
            {!! Form::label('cat_id', 'category') !!}
            {!! Form::select('cat_id', $categories, null, ['class' => 'form-control']) !!}
        </div>
                                        
		<div class="form-group">
			{!! Form::label('content', __('site.page_content') . ' *') !!}
            {!! Form::textarea('content', $content, ['class'=>'form-control textarea']) !!}
        </div>
    </div>
</div>

            
<div class="text-left">
	<button type="submit" class="btn btn-primary">
		<h5 class="mb-0">
			@lang('site.save')
			<i class="fas fa-save"></i>
		</h5>
    </button>
</div>
