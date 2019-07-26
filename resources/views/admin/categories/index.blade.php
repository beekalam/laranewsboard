@extends('admin.layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-5 col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>
                </div>

                <form action="/admin/categories" method="post" accept-charset="utf-8">
                    @include('admin.categories._form')
                </form><!-- form end -->

            </div>
            <!-- /.box -->
        </div>

        <div class="col-lg-7 col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="pull-left">
                        <h3 class="box-title">Categories</h3>
                    </div>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <!-- include message block -->
                        <div class="col-sm-12">
                            <?php //$this->load->view('admin/includes/_messages'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            @include('admin.categories._categories-table')
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection