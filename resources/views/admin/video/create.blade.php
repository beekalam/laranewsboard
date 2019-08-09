@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- form start -->
            
        <form class="" action="/admin/video" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12 form-header">
                    <h1 class="form-title">@lang('messages.add_video')</h1>
                    <a href="admin/posts?lang_id=" class="btn btn-success btn-add-new pull-right">
                        <i class="fa fa-bars"></i>
                        @lang('messages.posts')
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-post">
                        <div class="form-post-left">
                            @include('partials._form_post_left',['show_content_field' => true])
                        </div>
                        <div class="form-post-right">
                            <div class="row">
                                <div class="col-sm-12">
                                    @include('partials._video_upload_box')
                                </div>
                                <div class="col-sm-12">
                                    <div class="box">
                                        <div class="box-header with-border">
                                            <div class="left">
                                                <h3 class="box-title">@lang('messages.video_thumbnails')</h3>
                                            </div>
                                        </div><!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="form-group m0">
                                                <label class="control-label">@lang('messages.image_for_video')</label>
                                                <input type="hidden" id="selected_image_type" value="image">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <a class='btn btn-sm bg-purple' data-toggle="modal" data-target="#image_file_manager" onclick="$('#selected_image_type').val('image');">
                                                            @lang('messages.select_image')
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-12 m-t-15 m-b-10">
                                                        <img id="selected_image_file" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" class="img-responsive"/>
                                                        <input type="hidden" name="post_image_id">
                                                    </div>
                                                    <div class="col-sm-12 m-b-10">
                                                        <label>@lang('messagesor')<br></label>
                                                    </div>
                                                    <div class="col-sm-12 m-b-15">
                                                        <input type="text" class="form-control" name="image_url" id="video_thumbnail_url" placeholder="@lang('messagesadd_image_url')"
                                                               value="{{ old('image_url') }}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    @include('partials._sidebar_language_categories')
                                </div>
                                <div class="col-sm-12">
                                    @include('partials._post_publish_box', ['post_type' => 'video'])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form><!-- form end -->
        </div>
    </div>

    @include('partials._file_manager_image',['images' => []])
    @include('partials._file_manager_ckeditor',['images' => []])
    @include('partials._file_manager_video',['images' => []])
@endsection