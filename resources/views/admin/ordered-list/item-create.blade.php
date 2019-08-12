@extends('admin.layouts.app')
@section('content')
    <?php $rtl = false; ?>
    <div class="row">
        <div class="col-sm-12 form-header">
            @if($post->status == 0)
                <h1 class="form-title">@lang('messages.add_ordered_list')</h1>
            @else
                <h1 class="form-title">@lang('messages.update_ordered_list')</h1>
            @endif
            <a href="admin/posts?lang_id="
               class="btn btn-success btn-add-new pull-right">
                <i class="fa fa-bars"></i>
                @lang('messages.posts')
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="post-items-item-preview">
                <div class="image">
                    @if (!empty($post->image_url))
                        <img src="{{  $post->image_url }}" alt="" class="img-responsive">
                    @else
                        <img src="{{ asset('storage/'.  $post->image_big) }}" alt="" class="img-responsive">
                    @endif
                </div>
                <h2 class="title">{{  ($post->title) }}</h2>
                <p class="description m-b-15">{{  ($post->summary) }}</p>
                <a href="admin/update-post/{{$post->id}}" class="btn btn-default m-t-5"><i
                            class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;@lang("messages.edit_post_details")</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">@lang('messages.options')</h3>
                </div>
                <form method="post" action="/">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="box-body">
                        <!-- include message block -->
                        <div class="form-group">
                            <input type="checkbox" name="show_item_numbers" value="1" id="show_item_numbers_checkbox"
                                   class="square-purple" {{ ($post->show_item_numbers == 1) ? 'checked' : '' }}>&nbsp;&nbsp;
                            <label for="show_item_numbers_checkbox"
                                   class="option-label cursor-pointer">@lang('messages.show_item_numbers')</label>
                        </div>
                        <button type="submit"
                                class="btn btn-primary pull-right">@lang('messages.save_changes')</button>

                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 form-header">
            <h2 class="form-title">@lang('messages.ordered_list_items')</h2>
        </div>
    </div>

    <div class="post-items-container">
    <?php $count = 1; ?>
    @foreach ($post->orderedListItems as $post_item)
        <!-- form start -->
            <form method="post" action="{{ route('ordered-list-item.store',[$post, $post_item]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="box box-primary {{  $post_item->is_collapsed == 1 ? 'collapsed-box' : '' }}">
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong>#{{  $count }}</strong></h3>
                        <div class="post-item-message">

                        </div>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"
                                    onclick="set_ordered_list_item_box_collapsed({{ $post_item->id }} );">
                                @if($post_item->is_collapsed == 1)
                                    <i class="fa fa-plus"></i>
                                @else
                                    <i class="fa fa-minus"></i>
                                @endif
                            </button>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body" style="{{ ($post_item->is_collapsed == 1) ? 'display:none;' : '' }}">
                        <div class="post-items-item">
                            <div class="left">
                                <input type="hidden" name="id" value="{{  $post_item->id }}">
                                <div class="form-group" id="item{{ $post_item->id}}">
                                    <label class="control-label">@lang('messages.title')</label>
                                    <input type="text" class="form-control" name="title"
                                           placeholder="@lang('messages.title')"
                                           value="{{ $post_item->title }}"/>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="control-label">@lang('messages.content')</label>
                                            <textarea class="form-control ckeditor"
                                                      id="editor_{{ $post_item->id }}"
                                                      name="content">{{  $post_item->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="form-group m0">
                                    <label class="control-label">@lang('messages.image')</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <a class='btn btn-sm bg-purple btn_post_item_select_image'
                                               data-toggle="modal"
                                               data-target="#image_file_manager"
                                               data-tab-id="{{ $post_item->id }}"
                                               onclick="$('#selected_image_type').val('image');">
                                                @lang('messages.select_image')
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            @if(!empty($post_item->image))
                                                <img id="selected_image_file_{{$post_item->id}}"
                                                     src="{{ asset('storage/' . $post_item->image) }}" alt=""
                                                     class="img-responsive"/>
                                            @else
                                                <img id="selected_image_file_{{$post_item->id}}"
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                     alt="" class="img-responsive"/>
                                            @endif
                                            <input type="hidden" id="selected_image_id_{{$post_item->id}}"
                                                   name="image_id" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            <label class="control-label">@lang('messages.image_description')</label>
                                            <input type="text" class="form-control" name="image_description"
                                                   placeholder="@lang('messages.image_description')"
                                                   maxlength="300"
                                                   value="{{  $post_item->image_description }}"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 m-t-15">
                                            <label class="control-label">@lang('messages.order_1')</label>
                                            <input type="number" class="form-control" name="item_order" min="1"
                                                   placeholder="@lang('messages.order_1')" min="1" max="30000"
                                                   value="{{  $post_item->item_order }}"
                                                   required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer text-right" style="padding-top: 0;">
                        <button type="button" class="btn btn-md btn-danger m-r-5"
                                onclick="delete_ordered_list_item('{{ $post_item->id }}','<?php echo trans("confirm_item"); ?>');">
                            <i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;@lang("messages.delete")</button>
                        <button type="submit" class="btn btn-md btn-primary"><i
                                    class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;@lang("messages.save_changes")
                        </button>
                    </div>
                </div>
            </form>
            <?php $count++;?>
        @endforeach
    </div>

    <form method="post" action="{{ route('ordered-list.new',$post) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group text-center" style="margin: 20px 0;">
            <button type="submit" class="btn btn-md btn-success btn-add-post-item"><i
                        class="fa fa-plus"></i>@lang("messages.add_new_item")</button>
        </div>
    </form>

    @if ($post->status == 0)
        <form action="post" enctype="multipart/form-data" method="/">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-sm-8"></div>
                <div class="col-sm-4">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="left">
                                <h3 class="box-title">@lang('messages.publish')</h3>
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <label class="control-label">@lang('messages.scheduled_post')</label>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12 text-right">
                                        <input type="checkbox" name="scheduled_post" value="1" id="cb_scheduled"
                                               class="square-purple" {{($post->is_scheduled == 1) ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12 col-lang">
                                        <label>@lang('messages.date_publish')</label>
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12 col-lang">
                                        <div class='input-group date' id='datetimepicker'>
                                            <input type='text' class="form-control" name="date_published"
                                                   placeholder="@lang("messages.date_publish")"
                                                   value="{{ $post->created_at }}"/>
                                            <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                @if ($post->status == 0)
                                    <button type="submit" name="publish" value="1"
                                            class="btn btn-warning pull-right m-l-10">@lang('messages.publish')</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
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