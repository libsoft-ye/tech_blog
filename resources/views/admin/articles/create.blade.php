@extends('admin.master')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="fas fa-book"></i> Articles
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('articles.index') }}"> articles</a>
                            </li>
                            <li class="breadcrumb-item active">add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => ['articles.store'], 'role'=>"form", 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                        @include('admin.articles._form', ['submitButton' => '<i class="fa fa-plus"></i> Add'])
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection
