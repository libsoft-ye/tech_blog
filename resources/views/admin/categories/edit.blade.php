@extends('admin.master')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="fas fa-book"></i> Categories
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('categories.index') }}"> categories</a>
                            </li>
                            <li class="breadcrumb-item active">edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Edit</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'role'=>"form", 'method' => 'PATCH', 'enctype'=>'multipart/form-data']) !!}
                        @include('admin.categories._form', ['submitButton' => '<i class="fa fa-edit"></i> Edit'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </section>


    </div><!-- end of content wrapper -->

@endsection
