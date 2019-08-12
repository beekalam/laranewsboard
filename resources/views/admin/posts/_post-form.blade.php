<div class="row">
    <div class="col-sm-12">
        <div class="form-post">
            <div class="form-post-left">
                @include('partials._form_post_left',['show_content_field' => true,'post' => $post])
            </div>
            <div class="form-post-right">
                <div class="row">
                    <div class="col-sm-12">
                        @include('partials._post_image_upload_box',['images' => []])
                    </div>
                    <div class="col-sm-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="left">
                                    <h3 class="box-title">@lang('messages.additional_images')</h3>
                                </div>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <div class="form-group m0">
                                    <label class="control-label">@lang('messages.additional_images')</label>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class='btn btn-sm bg-purple' data-toggle="modal"
                                               data-target="#image_file_manager"
                                               onclick="$('#selected_image_type').val('additional_image');">
                                                @lang('messages.select_image')
                                            </a>
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
                        @include('partials._sidebar_language_categories')
                    </div>
                    <div class="col-sm-12">
                        @include('partials._post_publish_box',['post_type' => 'article'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>