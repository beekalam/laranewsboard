@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- form start -->
            <form action="/admin/posts" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf

                <input type="hidden" name="post_type" value="post">
                <div class="row">
                    <div class="col-sm-12 form-header">
                        <h1 class="form-title">Add Article</h1>
                        <a href=""
                           class="btn btn-success btn-add-new pull-right">
                            <i class="fa fa-bars"></i>
                            Posts
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-post">
                            <div class="form-post-left">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <div class="left">
                                            <h3 class="box-title">Post Details</h3>
                                        </div>
                                    </div><!-- /.box-header -->

                                    <div class="box-body">
                                        <!-- include message block -->

                                        <!--print error messages-->

                                        <!--print custom error message-->

                                        <!--print custom success message-->

                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title"
                                                   value="" required="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Slug
                                                <small>(If you leave it blank, it will be generated automatically.)
                                                </small>
                                            </label>
                                            <input type="text" class="form-control" name="title_slug" placeholder="Slug"
                                                   value="">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Summary &amp; Description (Meta Tag)</label>
                                            <textarea class="form-control text-area" name="summary"
                                                      placeholder="Summary &amp; Description (Meta Tag)"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label">Keywords (Meta Tag)</label>
                                            <input type="text" class="form-control" name="keywords"
                                                   placeholder="Keywords (Meta Tag)" value="">
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-12">
                                                    <label>Visibility</label>
                                                </div>
                                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                                    <div class="iradio_square-purple checked"
                                                         style="position: relative;"><input type="radio"
                                                                                            id="rb_visibility_1"
                                                                                            name="visibility" value="1"
                                                                                            class="square-purple"
                                                                                            checked=""
                                                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                    <label for="rb_visibility_1" class="cursor-pointer">Show</label>
                                                </div>
                                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                                    <div class="iradio_square-purple" style="position: relative;"><input
                                                                type="radio" id="rb_visibility_2" name="visibility"
                                                                value="0" class="square-purple"
                                                                style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                    <label for="rb_visibility_2" class="cursor-pointer">Hide</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-3 col-xs-12">
                                                    <label>Show Right Column</label>
                                                </div>
                                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                                    <div class="iradio_square-purple checked"
                                                         style="position: relative;"><input type="radio"
                                                                                            name="show_right_column"
                                                                                            value="1"
                                                                                            id="right_column_enabled"
                                                                                            class="square-purple"
                                                                                            checked=""
                                                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                    <label for="right_column_enabled" class="option-label">Yes</label>
                                                </div>
                                                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                                                    <div class="iradio_square-purple" style="position: relative;"><input
                                                                type="radio" name="show_right_column" value="0"
                                                                id="right_column_disabled" class="square-purple"
                                                                style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                    <label for="right_column_disabled" class="option-label">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Add to Featured</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="is_featured" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Add to Breaking</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="is_breaking" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Add to Slider</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="is_slider" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Add to Recommended</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="is_recommended" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Show Only to Registered Users</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="need_auth" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-12">
                                                    <label class="control-label">Send Post to All Subscribers
                                                        (Newsletter)</label>
                                                </div>
                                                <div class="col-md-9 col-sm-12">
                                                    <div class="icheckbox_square-purple" style="position: relative;">
                                                        <input type="checkbox" name="send_post_to_subscribes" value="1"
                                                               class="square-purple"
                                                               style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Tags</label>
                                                    <input id="tags_1" type="text" name="tags" class="form-control tags"
                                                           data-tagsinput-init="true" style="display: none;">
                                                    <div id="tags_1_tagsinput" class="tagsinput"
                                                         style="width: auto; min-height: 80px; height: 80px;">
                                                        <div id="tags_1_addTag"><input id="tags_1_tag" value=""
                                                                                       data-default="add a tag"
                                                                                       style="color: rgb(102, 102, 102); width: 68px;">
                                                        </div>
                                                        <div class="tags_clear"></div>
                                                    </div>
                                                    <small>(Type tag and hit enter)</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row-optional-url">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label class="control-label">Optional Url</label>
                                                    <input type="text" class="form-control" name="optional_url"
                                                           placeholder="Optional Url" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>

                            <div class="form-post-right">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="box">
                                            <div class="box-header with-border">
                                                <div class="left">
                                                    <h3 class="box-title">Image</h3>
                                                </div>
                                            </div><!-- /.box-header -->

                                            <div class="box-body">

                                                <div class="form-group m0">
                                                    <label class="control-label">Main Image</label>
                                                    <input type="hidden" id="selected_image_type" value="image">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <a class="btn btn-sm bg-purple" data-toggle="modal"
                                                               data-target="#image_file_manager"
                                                               onclick="$('#selected_image_type').val('image');">
                                                                Select Image </a>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 m-t-15">
                                                            <img id="selected_image_file" name=""
                                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                 alt="" class="img-responsive">
                                                            <input type="hidden" name="post_image_id">
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-15">
                                                        <div class="col-sm-12 m-b-10">
                                                            <label>or&nbsp;Add Image Url</label>
                                                        </div>
                                                        <div class="col-sm-12 m-b-5">
                                                            <input type="text" class="form-control" name="image_url"
                                                                   id="video_thumbnail_url" placeholder="Add Image Url">
                                                        </div>
                                                    </div>
                                                    <div class="row row-image-description">
                                                        <div class="col-sm-12 m-t-15">
                                                            <label class="control-label">Image Description</label>
                                                            <input type="text" class="form-control"
                                                                   name="image_description"
                                                                   placeholder="Image Description" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-header with-border">
                                                <div class="left">
                                                    <h3 class="box-title">Additional Images</h3>
                                                </div>
                                            </div><!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="form-group m0">
                                                    <label class="control-label">Additional Images</label>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <a class="btn btn-sm bg-purple" data-toggle="modal"
                                                               data-target="#image_file_manager"
                                                               onclick="$('#selected_image_type').val('additional_image');">
                                                                Select Image </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m0">
                                                    <div class="row">
                                                        <div class="col-sm-12 m-b-15">
                                                            <div class="additional-image-list">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-header with-border">
                                                <div class="left">
                                                    <h3 class="box-title">Category</h3>
                                                </div>
                                            </div><!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select id="categories" name="category_id" class="form-control"
                                                            onchange="get_sub_categories(this.value);" required="">
                                                        <option value="">Select a category</option>
                                                        @foreach($categories as $cat)
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Subcategory</label>
                                                    <select id="subcategories" name="subcategory_id"
                                                            class="form-control">
                                                        <option value="0">Select a category</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-header with-border">
                                                <div class="left">
                                                    <h3 class="box-title">Publish</h3>
                                                </div>
                                            </div><!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                                            <label class="control-label">Scheduled Post</label>
                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12 text-right">
                                                            <div class="icheckbox_square-purple"
                                                                 style="position: relative;"><input type="checkbox"
                                                                                                    name="scheduled_post"
                                                                                                    value="1"
                                                                                                    id="cb_scheduled"
                                                                                                    class="square-purple"
                                                                                                    style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                                <ins class="iCheck-helper"
                                                                     style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="date_published_content" class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-5 col-sm-12 col-xs-12 col-lang">
                                                            <label>Date Published</label>
                                                        </div>
                                                        <div class="col-md-7 col-sm-12 col-xs-12 col-lang">
                                                            <div class="input-group date" id="datetimepicker">
                                                                <input type="text" class="form-control"
                                                                       name="date_published" id="input_date_published"
                                                                       placeholder="Date Published">
                                                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="status" value="1"
                                                            class="btn btn-primary pull-right">Add Post
                                                    </button>
                                                    <button type="submit" name="status" value="0"
                                                            class="btn btn-warning btn-draft pull-right">Save as Draft
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form><!-- form end -->
        </div>
    </div>
@endsection