@extends('admin.layouts.app')
@section('content')
    <?php $rtl = false; ?>
    <div class="row">
        <div class="col-sm-12 form-header">
            <?php if ($post->status == 0): ?>
            <h1 class="form-title"><?php echo trans('add_ordered_list'); ?></h1>
            <?php else: ?>
            <h1 class="form-title"><?php echo trans('update_ordered_list'); ?></h1>
            <?php endif; ?>
            <a href="<?php echo admin_url(); ?>posts?lang_id="
               class="btn btn-success btn-add-new pull-right">
                <i class="fa fa-bars"></i>
                <?php echo trans('posts'); ?>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="post-items-item-preview">
                <div class="image">
                    <?php if (!empty($post->image_url)): ?>
                    <img src="<?php echo $post->image_url; ?>" alt="" class="img-responsive">
                    <?php else: ?>
                    <img src="<?php echo base_url() . $post->image_big; ?>" alt="" class="img-responsive">
                    <?php endif; ?>
                </div>
                <h2 class="title"><?php echo($post->title); ?></h2>
                <p class="description m-b-15"><?php echo($post->summary); ?></p>
                <a href="<?php echo admin_url(); ?>update-post/<?php echo $post->id ?>" class="btn btn-default m-t-5"><i
                            class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;<?php echo trans("edit_post_details"); ?></a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo trans('options'); ?></h3>
                </div>
                <form method="post" action="/">
                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
                    <div class="box-body">
                        <!-- include message block -->
                        <div class="form-group">
                            <input type="checkbox" name="show_item_numbers" value="1" id="show_item_numbers_checkbox"
                                   class="square-purple" <?php echo ($post->show_item_numbers == 1) ? 'checked' : ''; ?>>&nbsp;&nbsp;
                            <label for="show_item_numbers_checkbox"
                                   class="option-label cursor-pointer"><?php echo trans('show_item_numbers'); ?></label>
                        </div>
                        <button type="submit"
                                class="btn btn-primary pull-right"><?php echo trans('save_changes'); ?></button>

                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 form-header">
            <h2 class="form-title"><?php echo trans('ordered_list_items'); ?></h2>
        </div>
    </div>

    <div class="post-items-container">
    <?php $count = 1; ?>
    @foreach ($post->orderedListItems as $post_item)
        <!-- form start -->
            <form method="post" action="{{ route('ordered-list-item.store',[$post, $post_item]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="box box-primary <?php echo ($post_item->is_collapsed == 1) ? 'collapsed-box' : ''; ?>">
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong>#<?php echo $count; ?></strong></h3>
                        <div class="post-item-message">

                        </div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"
                                    onclick="set_ordered_list_item_box_collapsed(<?php echo $post_item->id; ?>);">
                                <?php if ($post_item->is_collapsed == 1): ?>
                                <i class="fa fa-plus"></i>
                                <?php else: ?>
                                <i class="fa fa-minus"></i>
                                <?php endif; ?>
                            </button>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body" style="<?php echo ($post_item->is_collapsed == 1) ? 'display:none;' : ''; ?>">
                        <div class="post-items-item">
                            <div class="left">
                                <input type="hidden" name="id" value="<?php echo $post_item->id; ?>">
                                <div class="form-group" id="item<?php echo $post_item->id; ?>">
                                    <label class="control-label"><?php echo trans('title'); ?></label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="<?php echo trans('title'); ?>"
                                           value="<?php echo html_escape($post_item->title); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label"><?php echo trans('content'); ?></label>
                                            <textarea class="form-control ckeditor"
                                                      id="editor_<?php echo $post_item->id; ?>"
                                                      name="content"><?php echo $post_item->content; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="form-group m0">
                                    <label class="control-label"><?php echo trans('image'); ?></label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class='btn btn-sm bg-purple btn_post_item_select_image'
                                               data-toggle="modal"
                                               data-target="#image_file_manager"
                                               data-tab-id="<?php echo $post_item->id; ?>"
                                               onclick="$('#selected_image_type').val('image');">
                                                <?php echo trans('select_image'); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            <?php if (!empty($post_item->image)): ?>
                                            <img id="selected_image_file_<?php echo $post_item->id; ?>"
                                                 src="<?php echo base_url() . $post_item->image; ?>" alt=""
                                                 class="img-responsive"/>
                                            <?php else: ?>
                                            <img id="selected_image_file_<?php echo $post_item->id; ?>"
                                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                 alt="" class="img-responsive"/>
                                            <?php endif; ?>
                                            <input type="hidden" id="selected_image_id_<?php echo $post_item->id; ?>"
                                                   name="image_id" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            <label class="control-label"><?php echo trans('image_description'); ?></label>
                                            <input type="text" class="form-control" name="image_description"
                                                   placeholder="<?php echo trans('image_description'); ?>"
                                                   maxlength="300"
                                                   value="<?php echo html_escape($post_item->image_description); ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            <label class="control-label"><?php echo trans('order_1'); ?></label>
                                            <input type="number" class="form-control" name="item_order" min="1"
                                                   placeholder="<?php echo trans('order_1'); ?>" min="1" max="30000"
                                                   value="<?php echo $post_item->item_order; ?>"
                                                   <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?> required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-right" style="padding-top: 0;">
                        <button type="button" class="btn btn-md btn-danger m-r-5"
                                onclick="delete_ordered_list_item('<?php echo $post_item->id; ?>','<?php echo trans("confirm_item"); ?>');">
                            <i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;<?php echo trans("delete"); ?></button>
                        <button type="submit" class="btn btn-md btn-primary"><i
                                    class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;<?php echo trans("save_changes"); ?>
                        </button>
                    </div>
                </div>
            </form>
            <?php $count++;?>
        @endforeach
    </div>

    <form action="" method="/" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-center" style="margin: 20px 0;">
            <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
            <input type="hidden" name="item_order" value="<?php echo $count; ?>">
            <button type="submit" class="btn btn-md btn-success btn-add-post-item"><i
                        class="fa fa-plus"></i><?php echo trans("add_new_item"); ?></button>
        </div>
    </form>

    <?php if ($post->status == 0): ?>
    <form action="post" enctype="multipart/form-data" method="/">
        @csrf
        <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="left">
                            <h3 class="box-title"><?php echo trans('publish'); ?></h3>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <label class="control-label"><?php echo trans('scheduled_post'); ?></label>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12 text-right">
                                    <input type="checkbox" name="scheduled_post" value="1" id="cb_scheduled"
                                           class="square-purple" <?php echo ($post->is_scheduled == 1) ? 'checked' : ''; ?>>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12 col-lang">
                                    <label><?php echo trans('date_publish'); ?></label>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12 col-lang">
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" name="date_published"
                                               placeholder="<?php echo trans("date_publish"); ?>"
                                               value="<?php echo $post->created_at; ?>" <?php echo ($rtl == true) ? 'dir="rtl"' : ''; ?>/>
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php if ($post->status == 0): ?>
                            <button type="submit" name="publish" value="1"
                                    class="btn btn-warning pull-right m-l-10"><?php echo trans('publish'); ?></button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php endif; ?>

    <input type="hidden" id="post_item_image_button_id">


    @include('partials._file_manager_image',['images' => []])
    @include('partials._file_manager_ckeditor',['images' => []])

    <style>
        #cke_1_contents {
            min-height: 200px !important;
        }

        .box {
            margin-bottom: 10px;
        }

        .box-header {
            padding: 15px;
        }

        .btn-box-tool {
            font-size: 16px;
        }

        .post-item-message {
            position: relative;
            margin-top: 5px;
        }

        .post-item-message .m-b-15 {
            margin-bottom: 0;
        }

    </style>

    <script>
        $(document).on('click', '.btn_post_item_select_image', function () {
            var item_tab_id = $(this).attr('data-tab-id');
            $("#post_item_image_button_id").val(item_tab_id);
        });
        $(document).on('click', '#image_file_manager #btn_img_select', function () {
            var file_id = $('#selected_img_file_id').val();
            select_post_item_image(file_id);
        });
        $(document).on('dblclick', '#image_file_manager .file-box', function () {
            var file_id = $('#selected_img_file_id').val();
            select_post_item_image(file_id);
        });
    </script>

@endsection