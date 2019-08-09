@extends('admin.layouts.app')
@section('content')
    <div class="box">
        <div class="box-header with-border">
            <div class="left">
                <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="right">
                <div class="dropdown">
                    <button class="btn btn-success btn-add-new dropdown-toggle"
                            type="button"
                            data-toggle="dropdown"><i class="fa fa-plus"></i>
                        @lang('add_post')
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" style="left: -20px;">
                        <li><a href="admin/add-post">@lang('add_article')</a></li>
                        <li><a href="admin/add-ordered-list">@lang('add_ordered_list')</a></li>
                        <li><a href="admin/add-gallery">@lang('add_gallery')</a></li>
                        <li><a href="admin/add-video">@lang('add_video')</a></li>
                        <li><a href="admin/add-audio">@lang('add_audio')</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <!-- include message block -->
                <div class="col-sm-12">
                    <?php //$this->load->view('admin/includes/_messages'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" role="grid">
                            <?php // $this->load->view('admin/includes/_filter_posts'); ?>
                            <thead>
                            <tr role="row">
                                <th width="20"><input type="checkbox" class="checkbox-table" id="checkAll"></th>
                                <th width="20">@lang('messages.id')</th>
                                <th>@lang('messages.post')</th>
                                <th>@lang('messages.language')</th>
                                <th>@lang('messages.post_type')</th>
                                <th>@lang('messages.category')</th>
                                <th>@lang('messages.author')</th>
                                <th></th>
                                <?php if ($list_type == "slider_posts"): ?>
                                <th>@lang('messages.slider_order')</th>
                                <?php endif; ?>
                                <?php if ($list_type == "featured_posts"): ?>
                                <th>@lang('featured_posts')</th>
                                <?php endif; ?>
                                <th>@lang('hit')</th>
                                <th>@lang('date_added')</th>
                                <th style="min-width: 180px;">@lang('messages.options')</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($posts as $item): ?>
                            <tr>
                                <td><input type="checkbox" name="checkbox-table" class="checkbox-table"
                                           value="<?php echo $item->id; ?>"></td>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <div class="post-image">
                                        <img src="<?php //echo $img_bg_sm; ?>"
                                             data-src="<?php // echo get_post_image($item, "small"); ?>"
                                             alt="" class="lazyload img-responsive"/>
                                    </div>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    <?php
                                    $lang = get_language($item->lang_id);
                                    if (!empty($lang)) {
                                        echo($lang->name);
                                    }
                                    ?>
                                </td>
                                <td class="td-post-type">
                                    <?php if ($item->post_type == 'post'): ?>
                                    @lang("messages.article");
                                    <?php else: ?>
                                    @lang("messages.".$item->post_type)
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php $category = helper_get_category($item->category_id);
                                    if (!empty($category)): ?>
                                    <label class="category-label m-r-5 label-table"
                                           style="background-color: <?php //echo ($category->color); ?>!important;">
                                        <?php //echo ($category->name); ?>
                                    </label>
                                    <?php endif; ?>

                                    <?php $category = helper_get_category($item->subcategory_id);
                                    if (!empty($category)): ?>
                                    <label class="category-label label-table"
                                           style="background-color: <?php //echo ($category->color); ?>">
                                        <?php //echo ($category->name); ?>
                                    </label>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php $author = get_user($item->user_id);
                                    if (!empty($author)): ?>
                                    <a href="<?php echo base_url(); ?>profile/<?php //echo ($author->slug); ?>"
                                       target="_blank" class="table-user-link">
                                        <strong><?php //echo ($author->username); ?></strong>
                                    </a>
                                    <?php endif; ?>
                                </td>
                                <td class="td-post-sp">
                                    <?php if ($item->visibility == 1): ?>
                                    <label class="label label-success label-table"><i class="fa fa-eye"></i></label>
                                    <?php else: ?>
                                    <label class="label label-danger label-table"><i class="fa fa-eye"></i></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_slider): ?>
                                    <label class="label bg-red label-table">@lang('messages.slider'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_featured): ?>
                                    <label class="label bg-olive label-table">@lang('messages.featured'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_recommended): ?>
                                    <label class="label bg-aqua label-table">@lang('messages.recommended'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->is_breaking): ?>
                                    <label class="label bg-teal label-table">@lang('messages.breaking'); ?></label>
                                    <?php endif; ?>

                                    <?php if ($item->need_auth): ?>
                                    <label class="label label-warning label-table">@lang('messages.only_registered');
                                        ?></label>
                                    <?php endif; ?>

                                </td>
                                <?php if ($list_type == "slider_posts"): ?>
                                <td style="max-width: 150px;">
                                    <?php echo form_open('post_controller/home_slider_posts_order_post'); ?>
                                    <div class="slider-order">
                                        <div class="slider-order-left">
                                            <input type="hidden" name="id"
                                                   value="<?php echo($item->id); ?>">
                                            <input type="number" name="slider_order" class="form-control"
                                                   value="<?php echo($item->slider_order); ?>" min="1" max="99999">
                                        </div>
                                        <div class="slider-order-right">
                                            <button type="submit" class="btn btn-sm btn-success"><i
                                                        class="fa fa-check"></i></button>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                </td>
                                <?php endif; ?>
                                <?php if ($list_type == "featured_posts"): ?>
                                <td style="max-width: 150px;">
                                    <?php echo form_open('post_controller/featured_posts_order_post'); ?>
                                    <div class="slider-order">
                                        <div class="slider-order-left">
                                            <input type="hidden" name="id"
                                                   value="<?php echo($item->id); ?>">
                                            <input type="number" name="featured_order" class="form-control"
                                                   value="<?php echo($item->featured_order); ?>" min="1" max="99999">
                                        </div>
                                        <div class="slider-order-right">
                                            <button type="submit" class="btn btn-sm btn-success"><i
                                                        class="fa fa-check"></i></button>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>
                                </td>
                                <?php endif; ?>
                                <td><?php echo $item->hit; ?></td>
                                <td><?php echo formatted_date($item->created_at); ?></td>
                                <td>
                                    <!-- form post options -->
                                    <?php echo form_open('post_controller/post_options_post'); ?>
                                    <input type="hidden" name="id" value="<?php echo($item->id); ?>">

                                    <div class="dropdown">
                                        <button class="btn bg-purple dropdown-toggle btn-select-option"
                                                type="button"
                                                data-toggle="dropdown">@lang('messages.select_an_option'); ?>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu options-dropdown">
                                            <li>
                                                <a href="<?php echo admin_url(); ?>update-post/<?php echo($item->id); ?>"><i
                                                            class="fa fa-edit option-icon"></i>@lang('messages.edit');
                                                    ?></a>
                                            </li>
                                            <?php if (check_user_permission('manage_all_posts')): ?>
                                            <?php if ($item->is_slider == 1): ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-slider"
                                                        class="btn-list-button">
                                                    <i class="fa fa-times option-icon"></i>@lang('messages.remove_slider')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-slider"
                                                        class="btn-list-button">
                                                    <i class="fa fa-plus option-icon"></i>@lang('messages.add_slider');
                                                    ?>
                                                </button>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($item->is_featured == 1): ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-featured"
                                                        class="btn-list-button">
                                                    <i class="fa fa-times option-icon"></i>@lang('messages.remove_featured')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-featured"
                                                        class="btn-list-button">
                                                    <i class="fa fa-plus option-icon"></i>@lang('messages.add_featured')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($item->is_breaking == 1): ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-breaking"
                                                        class="btn-list-button">
                                                    <i class="fa fa-times option-icon"></i>@lang('messages.remove_breaking')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-breaking"
                                                        class="btn-list-button">
                                                    <i class="fa fa-plus option-icon"></i>@lang('messages.add_breaking')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($item->is_recommended == 1): ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-recommended"
                                                        class="btn-list-button">
                                                    <i class="fa fa-times option-icon"></i>@lang('messages.remove_recommended')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <button type="submit" name="option" value="add-remove-from-recommended"
                                                        class="btn-list-button">
                                                    <i class="fa fa-plus option-icon"></i>@lang('messages.add_recommended')
                                                    ; ?>
                                                </button>
                                            </li>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <li>
                                                <a href="javascript:void(0)"
                                                   onclick="delete_item('post_controller/delete_post','<?php echo $item->id; ?>','<?php echo trans("confirm_post"); ?>');"><i
                                                            class="fa fa-trash option-icon"></i>@lang('messages.delete')
                                                    ; ?></a>
                                            </li>
                                        </ul>
                                    </div>

                                <?php echo form_close(); ?><!-- form end -->
                                </td>
                            </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                        <?php if (empty($posts)): ?>
                        <p class="text-center">
                            <?php echo trans("messages.no_records_found"); ?>
                        </p>
                        <?php endif; ?>
                        <div class="col-sm-12 table-ft">
                            <div class="row">

                                <div class="pull-right">
                                    <?php //echo $this->pagination->create_links(); ?>
                                </div>

                                <?php if (count($posts) > 0): ?>
                                <div class="pull-left bulk-options">
                                    <button class="btn btn-sm btn-danger btn-table-delete"
                                            onclick="delete_selected_posts('<?php echo trans("confirm_posts"); ?>');"><i
                                                class="fa fa-trash option-icon"></i>@lang('messages.delete'); ?>
                                    </button>
                                    <?php if ($list_type != 'slider_posts'): ?>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('add_slider');"><i
                                                class="fa fa-plus option-icon"></i>@lang('messages.add_slider'); ?>
                                    </button>
                                    <?php endif; ?>
                                    <?php if ($list_type != 'featured_posts'): ?>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('add_featured');"><i
                                                class="fa fa-plus option-icon"></i>@lang('messages.add_featured'); ?>
                                    </button>
                                    <?php endif; ?>
                                    <?php if ($list_type != 'breaking_news'): ?>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('add_breaking');"><i
                                                class="fa fa-plus option-icon"></i>@lang('messages.add_breaking'); ?>
                                    </button>
                                    <?php endif; ?>
                                    <?php if ($list_type != 'recommended_posts'): ?>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('add_recommended');"><i
                                                class="fa fa-plus option-icon"></i>@lang('messages.add_recommended'); ?>
                                    </button>
                                    <?php endif; ?>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('remove_slider');"><i
                                                class="fa fa-minus option-icon"></i>@lang('messages.remove_slider'); ?>
                                    </button>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('remove_featured');"><i
                                                class="fa fa-minus option-icon"></i>@lang('messages.remove_featured');
                                        ?>
                                    </button>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('remove_breaking');"><i
                                                class="fa fa-minus option-icon"></i>@lang('messages.remove_breaking');
                                        ?>
                                    </button>
                                    <button class="btn btn-sm btn-default btn-table-delete"
                                            onclick="post_bulk_options('remove_recommended');"><i
                                                class="fa fa-minus option-icon"></i>@lang('messages.remove_recommended')
                                        ; ?>
                                    </button>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div>
@endsection