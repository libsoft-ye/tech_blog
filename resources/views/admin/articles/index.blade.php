@extends('admin.master')

@section('content')

    <div class="content-wrapper">
        <section class="content-header clearfix">
            <div class="row">
                <div class="col-sm-6">
                    <h1>
                        <i class="fas fa-book"></i> articles
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> home</a>
                        </li>
                        <li class="breadcrumb-item active">articles</li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Articles
                                    </h3>
                                    <a href="{{ route('articles.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
                                </div>


                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>title</th>
                                            <th>category</th>
                                            <th>is active</th>
                                            <th class="text-center">created_at</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($articles as $article)
                                            @include('admin.articles._rows')
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- end of box body -->
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
