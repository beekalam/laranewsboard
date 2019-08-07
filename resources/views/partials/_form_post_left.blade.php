<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title">@lang('messages.post_details')</h3>
        </div>
    </div><!-- /.box-header -->

    <div class="box-body">
        <!-- include message block -->
        <?php //$this->load->view('admin/includes/_messages'); ?>

        <div class="form-group">
            <label class="control-label">@lang('messages.title')</label>
            <input type="text" class="form-control" name="title" placeholder="@lang('messages.title')"
                   value="" required>
        </div>

        <div class="form-group">
            <label class="control-label">@lang('messages.slug')
                <small>(@lang('messages.slug_exp'))</small>
            </label>
            <input type="text" class="form-control" name="title_slug" placeholder="@lang('messages.slug')"
                   value="">
        </div>

        <div class="form-group">
            <label class="control-label">@lang('messages.summary') & @lang("messages.description")
                (@lang('messages.meta_tag'))</label>
            <textarea class="form-control text-area"
                      name="summary"
                      placeholder="@lang('messages.summary') & @lang("messages.description") (@lang('messages.meta_tag'))"></textarea>
        </div>

        <div class="form-group">
            <label class="control-label">@lang('messages.keywords') (@lang('messages.meta_tag'))</label>
            <input type="text" class="form-control" name="keywords"
                   placeholder="@lang('messages.keywords') (@lang('messages.meta_tag'))"
                   value="">
        </div>

        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <label>@lang('visibility')</label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                    <input type="radio" id="rb_visibility_1" name="visibility" value="1" class="square-purple" checked>
                    <label for="rb_visibility_1" class="cursor-pointer">@lang('show')</label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                    <input type="radio" id="rb_visibility_2" name="visibility" value="0" class="square-purple">
                    <label for="rb_visibility_2" class="cursor-pointer">@lang('hide')</label>
                </div>
            </div>
        </div>
        <?php else: ?>
        <?php if ($this->general_settings->approve_added_user_posts == 1): ?>
        <input type="hidden" name="visibility" value="0">
        <?php else: ?>
        <input type="hidden" name="visibility" value="1">
        <?php endif; ?>
        <?php endif; ?>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <label>@lang('messages.show_right_column')</label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                    <input type="radio" name="show_right_column" value="1" id="right_column_enabled"
                           class="square-purple" checked>
                    <label for="right_column_enabled" class="option-label">@lang('messages.yes')</label>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 col-option">
                    <input type="radio" name="show_right_column" value="0" id="right_column_disabled"
                           class="square-purple">
                    <label for="right_column_disabled" class="option-label">@lang('messages.no')</label>
                </div>
            </div>
        </div>

        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.add_featured')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="is_featured" value="1"
                           class="square-purple">
                </div>
            </div>
        </div>
        <?php else: ?>
        <input type="hidden" name="is_featured" value="0">
        <?php endif; ?>


        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.add_breaking')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="is_breaking" value="1"
                           class="square-purple" >
                </div>
            </div>
        </div>
        <?php else: ?>
        <input type="hidden" name="is_breaking" value="0">
        <?php endif; ?>


        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.add_slider')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="is_slider" value="1"
                           class="square-purple" >
                </div>
            </div>
        </div>
        <?php else: ?>
        <input type="hidden" name="is_slider" value="0">
        <?php endif; ?>

        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.add_recommended')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="is_recommended" value="1"
                           class="square-purple">
                </div>
            </div>
        </div>
        <?php else: ?>
        <input type="hidden" name="is_recommended" value="0">
        <?php endif; ?>


        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.show_only_registered')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="need_auth" value="1"
                           class="square-purple" >
                </div>
            </div>
        </div>

        <?php if (check_user_permission('manage_all_posts')): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <label class="control-label">@lang('messages.send_post_to_subscribes')</label>
                </div>
                <div class="col-md-9 col-sm-12">
                    <input type="checkbox" name="send_post_to_subscribes" value="1" class="square-purple">
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">@lang('messages.tags')</label>
                    <input id="tags_1" type="text" name="tags" class="form-control tags"/>
                    <small>(@lang('messages.type_tag'))</small>
                </div>
            </div>
        </div>

        <div class="form-group row-optional-url">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">@lang('messages.optional_url')</label>
                    <input type="text" class="form-control"
                           name="optional_url" placeholder="@lang('messages.optional_url')"
                           value="">
                </div>
            </div>
        </div>

        <?php //if ($show_content_field == true): ?>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-12">
                    <label class="control-label">@lang('messages.content')</label>
                    <textarea id="ckEditor" class="form-control"
                              name="content" placeholder="Content" required></textarea>
                </div>
            </div>
        </div>
        <?php //else: ?>
        <input type="hidden" name="content" value="">
        <?php ?>//endif

    </div>

</div>

