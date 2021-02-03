@extends('web.master')

@section('content')

    <div class="content-wrapper">
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
                                </div>


                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>title</th>
                                            <th>category</th>
                                            <th class="text-center">created_at</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($articles as $article)
                                            @include('web.articles._rows')
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
