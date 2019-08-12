@extends('admin.layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <!-- form start -->
            <form action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-sm-12 form-header">
                        <h1 class="form-title">@lang('messages.update_article')</h1>
                        <a href="admin/posts?lang_id="
                           class="btn btn-success btn-add-new pull-right">
                            <i class="fa fa-bars"></i>
                            @lang('messages.posts')
                        </a>
                    </div>
                </div>
                @include('admin.posts._post-form')
            </form>
        </div>
    </div>

    @include('partials._file_manager_image',['images' => []])
    @include('partials._file_manager_ckeditor',['images' => []])


@endsection