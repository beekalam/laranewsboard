@extends('admin.layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-5 col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Category</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form action="/admin/categories" method="post" accept-charset="utf-8">
                    @csrf

                    <input type="hidden" name="parent_id" value="0">

                    <div class="box-body">

                        <!-- include message block -->

                        <!--print error messages-->

                        <!--print custom error message-->

                        <!--print custom success message-->

                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Language</label>--}}
                        {{--                            <select name="lang_id" class="form-control">--}}
                        {{--                                <option value="1" selected="">English</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}
                        <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Category Name" value=""
                                   maxlength="200" required="">
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Slug
                                <small>(If you leave it blank, it will be generated automatically.)</small>
                            </label>
                            <input type="text" class="form-control" name="name_slug" placeholder="Slug" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Description (Meta Tag)</label>
                            <input type="text" class="form-control" name="description"
                                   placeholder="Description (Meta Tag)" value="">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Keywords (Meta Tag)</label>
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords (Meta Tag)"
                                   value="">
                        </div>

                        <!-- Color Picker -->
                        <div class="form-group" {{ $errors->has('color')? 'has-error':'' }}>
                            <label>Color</label>
                            <div class="input-group my-colorpicker colorpicker-element">
                                <input type="text" class="form-control" name="color" maxlength="200" placeholder="Color"
                                       required="">
                                <div class="input-group-addon">
                                    <i style="background-color: rgb(0, 0, 0);"></i>
                                </div>
                            </div><!-- /.input group -->

                            @if($errors->has('color'))
                                <span class="help-block">{{ $errors->first('color') }}</span>
                            @endif
                        </div><!-- /.form group -->

                        <div class="form-group">
                            <label>Menu Order</label>
                            <input type="number" class="form-control" name="category_order" placeholder="Menu Order"
                                   value="1" min="1" required="">
                        </div>

                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                    </div>
                    <!-- /.box-footer -->
                </form><!-- form end -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection