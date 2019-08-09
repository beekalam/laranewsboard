@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <!-- form start -->
        <?php //echo form_open_multipart('post_controller/add_ordered_list_post'); ?>
        <form class="" action="/admin/ordered-list" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-sm-12 form-header">
                <h1 class="form-title">@lang('messages.add_ordered_list')</h1>
                <a href="admin/posts?lang_id="
                   class="btn btn-success btn-add-new pull-right">
                    <i class="fa fa-bars"></i>
                    @lang('messages.posts'); ?>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-post">
                    <div class="form-post-left">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('partials._form_post_left',['show_content_field' => false])
                            </div>
                        </div>
                    </div>
                    <div class="form-post-right">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('partials._post_image_upload_box')
                            </div>
                            <div class="col-sm-12">
                                @include('partials._sidebar_language_categories')
                            </div>
                            <div class="col-sm-12">
                                @include('partials._post_publish_box',['post_type' => 'ordered_list'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </form><!-- form end -->
    </div>
</div>

<style>
    .row-image-description {
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }
    .row-optional-url {
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }
</style>






@endsection