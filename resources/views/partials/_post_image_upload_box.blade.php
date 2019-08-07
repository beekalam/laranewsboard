<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title"><?php echo __('messages.image'); ?></h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">

        <div class="form-group m0">
            <label class="control-label"><?php echo __('messages.main_image'); ?></label>
            <input type="hidden" id="selected_image_type" value="image">

            <div class="row">
                <div class="col-sm-12">
                    <a class='btn btn-sm bg-purple' data-toggle="modal" data-target="#image_file_manager"
                       onclick="$('#selected_image_type').val('image');">
                        <?php echo __('messages.select_image'); ?>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 m-t-15">
                    <img id="selected_image_file" name=""
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt=""
                         class="img-responsive"/>
                    <input type="hidden" name="post_image_id">
                </div>
            </div>
            <div class="row m-t-15">
                <div class="col-sm-12 m-b-10">
                    <label><?php echo __('messages.or'); ?>&nbsp;<?php echo __('messages.add_image_url'); ?></label>
                </div>
                <div class="col-sm-12 m-b-5">
                    <input type="text" class="form-control" name="image_url" id="video_thumbnail_url"
                           placeholder="<?php echo __('messages.add_image_url'); ?>">
                </div>
            </div>
            <div class="row row-image-description">
                <div class="col-sm-12 m-t-15">
                    <label class="control-label"><?php echo __('messages.image_description'); ?></label>
                    <input type="text" class="form-control" name="image_description"
                           placeholder="<?php echo __('messages.image_description'); ?>"
                           value="" >
                </div>
            </div>
        </div>
    </div>
</div>





