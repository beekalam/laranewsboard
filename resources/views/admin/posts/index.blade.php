@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- form start -->
            <form action="http://192.168.1.100/varient/post_controller/add_post_post" enctype="multipart/form-data"
                  method="post" accept-charset="utf-8">
                <input type="hidden" name="varient_csrf_token" value="6b52e3a911a60787afd96fb2cb892e18">
                <input type="hidden" name="post_type" value="post">
                <div class="row">
                    <div class="col-sm-12 form-header">
                        <h1 class="form-title">Add Article</h1>
                        <a href="http://192.168.1.100/varient/admin/posts?lang_id=1"
                           class="btn btn-success btn-add-new pull-right">
                            <i class="fa fa-bars"></i>
                            Posts </a>
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
                                                <div class="col-sm-12">
                                                    <label class="control-label">Content</label>
                                                    <textarea id="ckEditor" class="form-control" name="content"
                                                              placeholder="Content"
                                                              style="visibility: hidden; display: none;"></textarea>
                                                    <div id="cke_ckEditor"
                                                         class="cke_1 cke cke_reset cke_chrome cke_editor_ckEditor cke_ltr cke_browser_webkit"
                                                         dir="ltr" lang="en" role="application"
                                                         aria-labelledby="cke_ckEditor_arialbl"><span
                                                                id="cke_ckEditor_arialbl" class="cke_voice_label">Rich Text Editor, ckEditor</span>
                                                        <div class="cke_inner cke_reset" role="presentation"><span
                                                                    id="cke_1_top" class="cke_top cke_reset_all"
                                                                    role="presentation"
                                                                    style="height: auto; user-select: none;"><span
                                                                        id="cke_12" class="cke_voice_label">Editor toolbars</span><span
                                                                        id="cke_1_toolbox" class="cke_toolbox"
                                                                        role="group" aria-labelledby="cke_12"
                                                                        onmousedown="return false;"><span id="cke_16"
                                                                                                          class="cke_toolbar"
                                                                                                          aria-labelledby="cke_16_label"
                                                                                                          role="toolbar"><span
                                                                                id="cke_16_label"
                                                                                class="cke_voice_label">Document</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_17"
                                                                                                       class="cke_button cke_button__source cke_button_off"
                                                                                                       href="javascript:void('Source')"
                                                                                                       title="Source"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_17_label"
                                                                                                       aria-describedby="cke_17_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__source_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_17_label"
                                                                                        class="cke_button_label cke_button__source_label"
                                                                                        aria-hidden="false">Source</span><span
                                                                                        id="cke_17_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_18" class="cke_toolbar"
                                                                            aria-labelledby="cke_18_label"
                                                                            role="toolbar"><span id="cke_18_label"
                                                                                                 class="cke_voice_label">Clipboard/Undo</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_19"
                                                                                                       class="cke_button cke_button__cut cke_button_disabled "
                                                                                                       href="javascript:void('Cut')"
                                                                                                       title="Cut (Ctrl+X)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_19_label"
                                                                                                       aria-describedby="cke_19_description"
                                                                                                       aria-haspopup="false"
                                                                                                       aria-disabled="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__cut_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_19_label"
                                                                                        class="cke_button_label cke_button__cut_label"
                                                                                        aria-hidden="false">Cut</span><span
                                                                                        id="cke_19_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+X</span></a><a
                                                                                    id="cke_20"
                                                                                    class="cke_button cke_button__copy cke_button_disabled "
                                                                                    href="javascript:void('Copy')"
                                                                                    title="Copy (Ctrl+C)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_20_label"
                                                                                    aria-describedby="cke_20_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__copy_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_20_label"
                                                                                        class="cke_button_label cke_button__copy_label"
                                                                                        aria-hidden="false">Copy</span><span
                                                                                        id="cke_20_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+C</span></a><a
                                                                                    id="cke_21"
                                                                                    class="cke_button cke_button__paste cke_button_off"
                                                                                    href="javascript:void('Paste')"
                                                                                    title="Paste (Ctrl+V)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_21_label"
                                                                                    aria-describedby="cke_21_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__paste_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_21_label"
                                                                                        class="cke_button_label cke_button__paste_label"
                                                                                        aria-hidden="false">Paste</span><span
                                                                                        id="cke_21_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+V</span></a><a
                                                                                    id="cke_22"
                                                                                    class="cke_button cke_button__pastetext cke_button_off"
                                                                                    href="javascript:void('Paste as plain text')"
                                                                                    title="Paste as plain text (Ctrl+Shift+V)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_22_label"
                                                                                    aria-describedby="cke_22_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pastetext_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_22_label"
                                                                                        class="cke_button_label cke_button__pastetext_label"
                                                                                        aria-hidden="false">Paste as plain text</span><span
                                                                                        id="cke_22_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+Shift+V</span></a><a
                                                                                    id="cke_23"
                                                                                    class="cke_button cke_button__pastefromword cke_button_off"
                                                                                    href="javascript:void('Paste from Word')"
                                                                                    title="Paste from Word"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_23_label"
                                                                                    aria-describedby="cke_23_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pastefromword_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_23_label"
                                                                                        class="cke_button_label cke_button__pastefromword_label"
                                                                                        aria-hidden="false">Paste from Word</span><span
                                                                                        id="cke_23_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_24"
                                                                                    class="cke_button cke_button__undo cke_button_disabled "
                                                                                    href="javascript:void('Undo')"
                                                                                    title="Undo (Ctrl+Z)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_24_label"
                                                                                    aria-describedby="cke_24_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__undo_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_24_label"
                                                                                        class="cke_button_label cke_button__undo_label"
                                                                                        aria-hidden="false">Undo</span><span
                                                                                        id="cke_24_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+Z</span></a><a
                                                                                    id="cke_25"
                                                                                    class="cke_button cke_button__redo cke_button_disabled "
                                                                                    href="javascript:void('Redo')"
                                                                                    title="Redo (Ctrl+Y)" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_25_label"
                                                                                    aria-describedby="cke_25_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__redo_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_25_label"
                                                                                        class="cke_button_label cke_button__redo_label"
                                                                                        aria-hidden="false">Redo</span><span
                                                                                        id="cke_25_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+Y</span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_26" class="cke_toolbar"
                                                                            aria-labelledby="cke_26_label"
                                                                            role="toolbar"><span id="cke_26_label"
                                                                                                 class="cke_voice_label">Basic Styles</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_27"
                                                                                                       class="cke_button cke_button__bold cke_button_off"
                                                                                                       href="javascript:void('Bold')"
                                                                                                       title="Bold (Ctrl+B)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_27_label"
                                                                                                       aria-describedby="cke_27_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bold_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_27_label"
                                                                                        class="cke_button_label cke_button__bold_label"
                                                                                        aria-hidden="false">Bold</span><span
                                                                                        id="cke_27_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+B</span></a><a
                                                                                    id="cke_28"
                                                                                    class="cke_button cke_button__italic cke_button_off"
                                                                                    href="javascript:void('Italic')"
                                                                                    title="Italic (Ctrl+I)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_28_label"
                                                                                    aria-describedby="cke_28_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__italic_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_28_label"
                                                                                        class="cke_button_label cke_button__italic_label"
                                                                                        aria-hidden="false">Italic</span><span
                                                                                        id="cke_28_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+I</span></a><a
                                                                                    id="cke_29"
                                                                                    class="cke_button cke_button__underline cke_button_off"
                                                                                    href="javascript:void('Underline')"
                                                                                    title="Underline (Ctrl+U)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_29_label"
                                                                                    aria-describedby="cke_29_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__underline_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_29_label"
                                                                                        class="cke_button_label cke_button__underline_label"
                                                                                        aria-hidden="false">Underline</span><span
                                                                                        id="cke_29_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+U</span></a><a
                                                                                    id="cke_30"
                                                                                    class="cke_button cke_button__strike cke_button_off"
                                                                                    href="javascript:void('Strikethrough')"
                                                                                    title="Strikethrough" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_30_label"
                                                                                    aria-describedby="cke_30_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__strike_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_30_label"
                                                                                        class="cke_button_label cke_button__strike_label"
                                                                                        aria-hidden="false">Strikethrough</span><span
                                                                                        id="cke_30_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_31"
                                                                                    class="cke_button cke_button__subscript cke_button_off"
                                                                                    href="javascript:void('Subscript')"
                                                                                    title="Subscript" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_31_label"
                                                                                    aria-describedby="cke_31_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__subscript_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_31_label"
                                                                                        class="cke_button_label cke_button__subscript_label"
                                                                                        aria-hidden="false">Subscript</span><span
                                                                                        id="cke_31_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_32"
                                                                                    class="cke_button cke_button__superscript cke_button_off"
                                                                                    href="javascript:void('Superscript')"
                                                                                    title="Superscript" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_32_label"
                                                                                    aria-describedby="cke_32_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__superscript_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_32_label"
                                                                                        class="cke_button_label cke_button__superscript_label"
                                                                                        aria-hidden="false">Superscript</span><span
                                                                                        id="cke_32_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_33"
                                                                                    class="cke_button cke_button__copyformatting cke_button_off"
                                                                                    href="javascript:void('Copy Formatting')"
                                                                                    title="Copy Formatting (Ctrl+Shift+C)"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_33_label"
                                                                                    aria-describedby="cke_33_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__copyformatting_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_33_label"
                                                                                        class="cke_button_label cke_button__copyformatting_label"
                                                                                        aria-hidden="false">Copy Formatting</span><span
                                                                                        id="cke_33_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+Shift+C</span></a><a
                                                                                    id="cke_34"
                                                                                    class="cke_button cke_button__removeformat cke_button_off"
                                                                                    href="javascript:void('Remove Format')"
                                                                                    title="Remove Format" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_34_label"
                                                                                    aria-describedby="cke_34_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__removeformat_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_34_label"
                                                                                        class="cke_button_label cke_button__removeformat_label"
                                                                                        aria-hidden="false">Remove Format</span><span
                                                                                        id="cke_34_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_35" class="cke_toolbar"
                                                                            aria-labelledby="cke_35_label"
                                                                            role="toolbar"><span id="cke_35_label"
                                                                                                 class="cke_voice_label">Paragraph</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_36"
                                                                                                       class="cke_button cke_button__numberedlist cke_button_off"
                                                                                                       href="javascript:void('Insert/Remove Numbered List')"
                                                                                                       title="Insert/Remove Numbered List"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_36_label"
                                                                                                       aria-describedby="cke_36_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__numberedlist_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_36_label"
                                                                                        class="cke_button_label cke_button__numberedlist_label"
                                                                                        aria-hidden="false">Insert/Remove Numbered List</span><span
                                                                                        id="cke_36_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_37"
                                                                                    class="cke_button cke_button__bulletedlist cke_button_off"
                                                                                    href="javascript:void('Insert/Remove Bulleted List')"
                                                                                    title="Insert/Remove Bulleted List"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_37_label"
                                                                                    aria-describedby="cke_37_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bulletedlist_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_37_label"
                                                                                        class="cke_button_label cke_button__bulletedlist_label"
                                                                                        aria-hidden="false">Insert/Remove Bulleted List</span><span
                                                                                        id="cke_37_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_38"
                                                                                    class="cke_button cke_button__outdent cke_button_disabled "
                                                                                    href="javascript:void('Decrease Indent')"
                                                                                    title="Decrease Indent"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_38_label"
                                                                                    aria-describedby="cke_38_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__outdent_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_38_label"
                                                                                        class="cke_button_label cke_button__outdent_label"
                                                                                        aria-hidden="false">Decrease Indent</span><span
                                                                                        id="cke_38_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_39"
                                                                                    class="cke_button cke_button__indent cke_button_off"
                                                                                    href="javascript:void('Increase Indent')"
                                                                                    title="Increase Indent"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_39_label"
                                                                                    aria-describedby="cke_39_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__indent_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_39_label"
                                                                                        class="cke_button_label cke_button__indent_label"
                                                                                        aria-hidden="false">Increase Indent</span><span
                                                                                        id="cke_39_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_40"
                                                                                    class="cke_button cke_button__blockquote cke_button_off"
                                                                                    href="javascript:void('Block Quote')"
                                                                                    title="Block Quote" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_40_label"
                                                                                    aria-describedby="cke_40_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(62,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(63,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__blockquote_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_40_label"
                                                                                        class="cke_button_label cke_button__blockquote_label"
                                                                                        aria-hidden="false">Block Quote</span><span
                                                                                        id="cke_40_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><span
                                                                                    class="cke_toolbar_separator"
                                                                                    role="separator"></span><a
                                                                                    id="cke_41"
                                                                                    class="cke_button cke_button__justifyleft cke_button_off"
                                                                                    href="javascript:void('Align Left')"
                                                                                    title="Align Left" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_41_label"
                                                                                    aria-describedby="cke_41_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(65,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(66,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyleft_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_41_label"
                                                                                        class="cke_button_label cke_button__justifyleft_label"
                                                                                        aria-hidden="false">Align Left</span><span
                                                                                        id="cke_41_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_42"
                                                                                    class="cke_button cke_button__justifycenter cke_button_off"
                                                                                    href="javascript:void('Center')"
                                                                                    title="Center" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_42_label"
                                                                                    aria-describedby="cke_42_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(68,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(69,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifycenter_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_42_label"
                                                                                        class="cke_button_label cke_button__justifycenter_label"
                                                                                        aria-hidden="false">Center</span><span
                                                                                        id="cke_42_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_43"
                                                                                    class="cke_button cke_button__justifyright cke_button_off"
                                                                                    href="javascript:void('Align Right')"
                                                                                    title="Align Right" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_43_label"
                                                                                    aria-describedby="cke_43_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(71,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(72,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyright_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_43_label"
                                                                                        class="cke_button_label cke_button__justifyright_label"
                                                                                        aria-hidden="false">Align Right</span><span
                                                                                        id="cke_43_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_44"
                                                                                    class="cke_button cke_button__justifyblock cke_button_off"
                                                                                    href="javascript:void('Justify')"
                                                                                    title="Justify" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_44_label"
                                                                                    aria-describedby="cke_44_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(74,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(75,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__justifyblock_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_44_label"
                                                                                        class="cke_button_label cke_button__justifyblock_label"
                                                                                        aria-hidden="false">Justify</span><span
                                                                                        id="cke_44_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_45" class="cke_toolbar"
                                                                            aria-labelledby="cke_45_label"
                                                                            role="toolbar"><span id="cke_45_label"
                                                                                                 class="cke_voice_label">Links</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_46"
                                                                                                       class="cke_button cke_button__link cke_button_off"
                                                                                                       href="javascript:void('Link')"
                                                                                                       title="Link (Ctrl+L)"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_46_label"
                                                                                                       aria-describedby="cke_46_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(77,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(78,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__link_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_46_label"
                                                                                        class="cke_button_label cke_button__link_label"
                                                                                        aria-hidden="false">Link</span><span
                                                                                        id="cke_46_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false">Keyboard shortcut Ctrl+L</span></a><a
                                                                                    id="cke_47"
                                                                                    class="cke_button cke_button__unlink cke_button_disabled "
                                                                                    href="javascript:void('Unlink')"
                                                                                    title="Unlink" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_47_label"
                                                                                    aria-describedby="cke_47_description"
                                                                                    aria-haspopup="false"
                                                                                    aria-disabled="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(80,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(81,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__unlink_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_47_label"
                                                                                        class="cke_button_label cke_button__unlink_label"
                                                                                        aria-hidden="false">Unlink</span><span
                                                                                        id="cke_47_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_48" class="cke_toolbar"
                                                                            aria-labelledby="cke_48_label"
                                                                            role="toolbar"><span id="cke_48_label"
                                                                                                 class="cke_voice_label">Insert</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_49"
                                                                                                       class="cke_button cke_button__image cke_button_off"
                                                                                                       href="javascript:void('Image')"
                                                                                                       title="Image"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_49_label"
                                                                                                       aria-describedby="cke_49_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(83,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(84,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__image_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_49_label"
                                                                                        class="cke_button_label cke_button__image_label"
                                                                                        aria-hidden="false">Image</span><span
                                                                                        id="cke_49_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_50"
                                                                                    class="cke_button cke_button__flash cke_button_off"
                                                                                    href="javascript:void('Flash')"
                                                                                    title="Flash" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_50_label"
                                                                                    aria-describedby="cke_50_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(86,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(87,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__flash_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_50_label"
                                                                                        class="cke_button_label cke_button__flash_label"
                                                                                        aria-hidden="false">Flash</span><span
                                                                                        id="cke_50_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_51"
                                                                                    class="cke_button cke_button__table cke_button_off"
                                                                                    href="javascript:void('Table')"
                                                                                    title="Table" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_51_label"
                                                                                    aria-describedby="cke_51_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(89,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(90,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__table_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_51_label"
                                                                                        class="cke_button_label cke_button__table_label"
                                                                                        aria-hidden="false">Table</span><span
                                                                                        id="cke_51_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_52"
                                                                                    class="cke_button cke_button__horizontalrule cke_button_off"
                                                                                    href="javascript:void('Insert Horizontal Line')"
                                                                                    title="Insert Horizontal Line"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_52_label"
                                                                                    aria-describedby="cke_52_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(92,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(93,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__horizontalrule_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_52_label"
                                                                                        class="cke_button_label cke_button__horizontalrule_label"
                                                                                        aria-hidden="false">Insert Horizontal Line</span><span
                                                                                        id="cke_52_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_53"
                                                                                    class="cke_button cke_button__smiley cke_button_off"
                                                                                    href="javascript:void('Smiley')"
                                                                                    title="Smiley" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_53_label"
                                                                                    aria-describedby="cke_53_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(95,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(96,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__smiley_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_53_label"
                                                                                        class="cke_button_label cke_button__smiley_label"
                                                                                        aria-hidden="false">Smiley</span><span
                                                                                        id="cke_53_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_54"
                                                                                    class="cke_button cke_button__specialchar cke_button_off"
                                                                                    href="javascript:void('Insert Special Character')"
                                                                                    title="Insert Special Character"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_54_label"
                                                                                    aria-describedby="cke_54_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(98,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(99,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__specialchar_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_54_label"
                                                                                        class="cke_button_label cke_button__specialchar_label"
                                                                                        aria-hidden="false">Insert Special Character</span><span
                                                                                        id="cke_54_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_55"
                                                                                    class="cke_button cke_button__pagebreak cke_button_off"
                                                                                    href="javascript:void('Insert Page Break for Printing')"
                                                                                    title="Insert Page Break for Printing"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_55_label"
                                                                                    aria-describedby="cke_55_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(101,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(102,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__pagebreak_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_55_label"
                                                                                        class="cke_button_label cke_button__pagebreak_label"
                                                                                        aria-hidden="false">Insert Page Break for Printing</span><span
                                                                                        id="cke_55_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a><a
                                                                                    id="cke_56"
                                                                                    class="cke_button cke_button__iframe cke_button_off"
                                                                                    href="javascript:void('IFrame')"
                                                                                    title="IFrame" tabindex="-1"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_56_label"
                                                                                    aria-describedby="cke_56_description"
                                                                                    aria-haspopup="false"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(104,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(105,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__iframe_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_56_label"
                                                                                        class="cke_button_label cke_button__iframe_label"
                                                                                        aria-hidden="false">IFrame</span><span
                                                                                        id="cke_56_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_57" class="cke_toolbar"
                                                                            aria-labelledby="cke_57_label"
                                                                            role="toolbar"><span id="cke_57_label"
                                                                                                 class="cke_voice_label">Styles</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                id="cke_13"
                                                                                class="cke_combo cke_combo__styles cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_13_label"
                                                                                    class="cke_combo_label">Styles</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Formatting Styles"
                                                                                    tabindex="-1"
                                                                                    href="javascript:void('Formatting Styles')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_13_label"
                                                                                    aria-haspopup="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(108,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(109,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(107,this);return false;"><span
                                                                                        id="cke_13_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Styles</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_14"
                                                                                class="cke_combo cke_combo__format cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_14_label"
                                                                                    class="cke_combo_label">Format</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Paragraph Format"
                                                                                    tabindex="-1"
                                                                                    href="javascript:void('Paragraph Format')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_14_label"
                                                                                    aria-haspopup="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(111,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(112,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(110,this);return false;"><span
                                                                                        id="cke_14_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Format</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                id="cke_15"
                                                                                class="cke_combo cke_combo__fontsize cke_combo_off"
                                                                                role="presentation"><span
                                                                                    id="cke_15_label"
                                                                                    class="cke_combo_label">Size</span><a
                                                                                    class="cke_combo_button"
                                                                                    title="Font Size" tabindex="-1"
                                                                                    href="javascript:void('Font Size')"
                                                                                    hidefocus="true" role="button"
                                                                                    aria-labelledby="cke_15_label"
                                                                                    aria-haspopup="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(114,event,this);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(115,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(113,this);return false;"><span
                                                                                        id="cke_15_text"
                                                                                        class="cke_combo_text cke_combo_inlinelabel">Size</span><span
                                                                                        class="cke_combo_open"><span
                                                                                            class="cke_combo_arrow"></span></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_58" class="cke_toolbar"
                                                                            aria-labelledby="cke_58_label"
                                                                            role="toolbar"><span id="cke_58_label"
                                                                                                 class="cke_voice_label">Colors</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_59"
                                                                                                       class="cke_button cke_button__textcolor cke_button_off"
                                                                                                       href="javascript:void('Text Color')"
                                                                                                       title="Text Color"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_59_label"
                                                                                                       aria-describedby="cke_59_description"
                                                                                                       aria-haspopup="true"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(116,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(117,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__textcolor_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_59_label"
                                                                                        class="cke_button_label cke_button__textcolor_label"
                                                                                        aria-hidden="false">Text Color</span><span
                                                                                        id="cke_59_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a><a
                                                                                    id="cke_60"
                                                                                    class="cke_button cke_button__bgcolor cke_button_off"
                                                                                    href="javascript:void('Background Color')"
                                                                                    title="Background Color"
                                                                                    tabindex="-1" hidefocus="true"
                                                                                    role="button"
                                                                                    aria-labelledby="cke_60_label"
                                                                                    aria-describedby="cke_60_description"
                                                                                    aria-haspopup="true"
                                                                                    onkeydown="return CKEDITOR.tools.callFunction(119,event);"
                                                                                    onfocus="return CKEDITOR.tools.callFunction(120,event);"
                                                                                    onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__bgcolor_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_60_label"
                                                                                        class="cke_button_label cke_button__bgcolor_label"
                                                                                        aria-hidden="false">Background Color</span><span
                                                                                        id="cke_60_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span><span
                                                                                        class="cke_button_arrow"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span><span
                                                                            id="cke_61" class="cke_toolbar"
                                                                            aria-labelledby="cke_61_label"
                                                                            role="toolbar"><span id="cke_61_label"
                                                                                                 class="cke_voice_label">Tools</span><span
                                                                                class="cke_toolbar_start"></span><span
                                                                                class="cke_toolgroup"
                                                                                role="presentation"><a id="cke_62"
                                                                                                       class="cke_button cke_button__maximize cke_button_off"
                                                                                                       href="javascript:void('Maximize')"
                                                                                                       title="Maximize"
                                                                                                       tabindex="-1"
                                                                                                       hidefocus="true"
                                                                                                       role="button"
                                                                                                       aria-labelledby="cke_62_label"
                                                                                                       aria-describedby="cke_62_description"
                                                                                                       aria-haspopup="false"
                                                                                                       onkeydown="return CKEDITOR.tools.callFunction(122,event);"
                                                                                                       onfocus="return CKEDITOR.tools.callFunction(123,event);"
                                                                                                       onclick="CKEDITOR.tools.callFunction(124,this);return false;"><span
                                                                                        class="cke_button_icon cke_button__maximize_icon"
                                                                                        style="background-image:url('http://192.168.1.100/varient/assets/admin/plugins/ckeditor/plugins/icons.png?t=I63C');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span
                                                                                        id="cke_62_label"
                                                                                        class="cke_button_label cke_button__maximize_label"
                                                                                        aria-hidden="false">Maximize</span><span
                                                                                        id="cke_62_description"
                                                                                        class="cke_button_label"
                                                                                        aria-hidden="false"></span></a></span><span
                                                                                class="cke_toolbar_end"></span></span></span></span>
                                                            <div id="cke_1_contents" class="cke_contents cke_reset"
                                                                 role="presentation" style="height: 200px;"><span
                                                                        id="cke_67" class="cke_voice_label">Press ALT 0 for help</span>
                                                                <iframe src="" frameborder="0"
                                                                        class="cke_wysiwyg_frame cke_reset"
                                                                        style="width: 100%; height: 100%;"
                                                                        title="Rich Text Editor, ckEditor"
                                                                        aria-describedby="cke_67" tabindex="0"
                                                                        allowtransparency="true"></iframe>
                                                            </div>
                                                            <span id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                                                  role="presentation" style="user-select: none;"><span
                                                                        id="cke_1_resizer"
                                                                        class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                                        title="Resize"
                                                                        onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                                        id="cke_1_path_label" class="cke_voice_label">Elements path</span><span
                                                                        id="cke_1_path" class="cke_path" role="group"
                                                                        aria-labelledby="cke_1_path_label"><span
                                                                            class="cke_path_empty">&nbsp;</span></span></span>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                    <label>Language</label>
                                                    <select name="lang_id" class="form-control"
                                                            onchange="get_top_categories_by_lang(this.value);">
                                                        <option value="1" selected="">English</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select id="categories" name="category_id" class="form-control"
                                                            onchange="get_sub_categories(this.value);" required="">
                                                        <option value="">Select a category</option>
                                                        <option value="1">tech</option>
                                                        <option value="2">cat</option>
                                                        <option value="3">cat</option>
                                                        <option value="4">cat</option>
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