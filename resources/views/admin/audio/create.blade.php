@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <!-- form start -->
            <form action="/admin/audio" class="" enctype="multipart/form-data" method="post">
                @csrf
                <input name="post_type" type="hidden" value="audio">
                <div class="row">
                    <div class="col-sm-12 form-header">
                        <h1 class="form-title"> @lang('messages.add_audio') </h1>
                        <a class="btn btn-success btn-add-new pull-right" href="admin/posts?lang_id=">
                            <i class="fa fa-bars"> </i> @lang('messages.posts')
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
                                        @include('partials._post_image_upload_box')
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-header with-border">
                                                <div class="left">
                                                    <h3 class="box-title">
                                                        @lang('messages.audios')
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label class="control-label">
                                                        @lang('messages.audio_file')
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-sm-12 m-b-10">
                                                            <a class="btn btn-sm bg-purple"
                                                               data-target="#audio_file_manager" data-toggle="modal">
                                                                @lang('messages.select_file')
                                                            </a>
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
                                                    <h3 class="box-title">
                                                        @lang('messages.play_list')
                                                    </h3>
                                                </div>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="audio-list">
                                                                <span class="play-list-empty">
                                                                    @lang('messages.play_list_empty')
                                                                </span>
                                                            </div>
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
                                        @include('partials._post_publish_box', ['post_type' => 'audio'])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </input>
            </form>
        </div>
    </div>
    @include('partials._file_manager_image',['images' => []])
    @include('partials._file_manager_ckeditor',['images' => []])
    @include('partials._file_manager_audio',['audios' => []])

@endsection
