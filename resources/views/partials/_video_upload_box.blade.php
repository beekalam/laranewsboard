<div class="row">
    <div class="col-md-12">

        <!-- form start -->
        <form class="" action="/admin/" enctype="multipart/form-data">
            @csrf
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom video-upload-tab">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">
                    @lang('messages.upload_video')
                        <small>&nbsp;(mp4,webm)</small>
                    </a></li>
                <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">
                @lang('messages.get_video_from_url')</a></li>
            </ul>
            <div class="tab-content settings-tab-content">

                <div class="tab-pane active" id="tab_1">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <a class='btn btn-sm bg-purple' data-toggle="modal" data-target="#video_file_manager">
                                    @lang('messages.select_file')
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div id="post_selected_video" class="col-sm-12">

                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="tab_2">

                    <div class="form-group">
                        <label class="control-label">@lang('messages.video_url') 
                            <small>(Youtube, Vimeo, Dailymotion, Facebook)</small>
                        </label>
                        <input type="text" class="form-control" 
                                id="video_url" placeholder="@lang('messages.video_url')">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info pull-right btn-get-embed" onclick="get_video_from_url();">@lang('messages.get_video')</a>
                    </div>

                    <div class="form-group">
                        <label class="control-label video-embed-lbl">@lang('messages.video_embed_code')</label>
                        <textarea class="form-control text-embed"
                                  name="video_embed_code" id="video_embed_code" placeholder="@lang('messages.video_embed_code'); ?>" >{{ old('video_embed_code') }}</textarea>
                    </div>

                    <iframe src="" id="video_embed_preview" frameborder="0" allow="encrypted-media" allowfullscreen class="video-embed-preview"></iframe>

                </div>


            </div><!-- /.tab-content -->


        </div><!-- nav-tabs-custom -->

       </form> 
    </div><!-- /.col -->
</div>
