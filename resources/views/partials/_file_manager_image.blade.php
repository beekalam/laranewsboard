<div id="image_file_manager" class="modal fade modal-file-manager" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('messages.file_manager'); ?></h4>
            </div>
            <div class="modal-body">

                <div class="file-manager">
                    <div class="file-manager-left">
                        <form action="/admin/" method="post" enctype="multipart/form-data" 
                                id='form_image_file_manager'>
                            @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <a id="btn_img_upload" class='btn btn-md bg-purple btn-upload'>
                                    <i class="fa fa-image"></i>&nbsp;&nbsp;
                                    <span>@lang('messages.add_image'); ?></span>
                                    <input type="file" id="Multifileupload" name="files[]" class="upload-file-input img_file_manager_input" accept=".png, .jpg, .jpeg, .gif" multiple="multiple">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="MultidvPreview" class="multi-preview-container"></div>
                            </div>
                            <div class="col-sm-12">
                                <button type="button" id="btn_file_manager_image_upload" class="btn btn-md btn-block bg-purple btn-file-manager-image-upload">
                                    <i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;
                                    @lang('messages.upload'); ?>
                                </button>
                            </div>
                        </div>
                    </form>
                        <div class="row">
                            <div class="col-sm-12 m-t-5">
                                <div class="loader-file-manager">
                                    <div class="sk-fading-circle">
                                        <div class="sk-circle1 sk-circle"></div>
                                        <div class="sk-circle2 sk-circle"></div>
                                        <div class="sk-circle3 sk-circle"></div>
                                        <div class="sk-circle4 sk-circle"></div>
                                        <div class="sk-circle5 sk-circle"></div>
                                        <div class="sk-circle6 sk-circle"></div>
                                        <div class="sk-circle7 sk-circle"></div>
                                        <div class="sk-circle8 sk-circle"></div>
                                        <div class="sk-circle9 sk-circle"></div>
                                        <div class="sk-circle10 sk-circle"></div>
                                        <div class="sk-circle11 sk-circle"></div>
                                        <div class="sk-circle12 sk-circle"></div>
                                    </div>
                                    <p class="file-manager-uploading-text"><?php echo trans("uploading"); ?></p>
                                </div>
                            </div>
                        </div>
                        <p class="file-manager-upload-error"></p>
                    </div>

                    <div class="file-manager-right">
                        <div class="file-manager-content">
                            <div id="image_file_upload_response">
                                <?php foreach ($images as $image): ?>
                                    <div class="col-file-manager" id="img_col_id_<?php echo $image->id; ?>">
                                        <div class="file-box" data-file-id="<?php echo $image->id; ?>">
                                            <div class="image-container">
                                                <img src="<?php echo base_url() . $image->image_mid; ?>" alt="" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="selected_img_file_id">
                </div>

            </div>

            <div class="modal-footer">
                <div class="file-manager-footer">
                    <button type="button" id="btn_img_delete" class="btn btn-danger pull-left btn-file-delete"><i class="fa fa-trash"></i>&nbsp;&nbsp;@lang('messages.delete'); ?></button>
                    <button type="button" id="btn_img_select" class="btn bg-olive btn-file-select"><i class="fa fa-check"></i>&nbsp;&nbsp;@lang('messages.select_image'); ?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('messages.close'); ?></button>
                </div>
            </div>

        </div>

    </div>
</div>