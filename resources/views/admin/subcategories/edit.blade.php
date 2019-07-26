@extends('admin.layouts.app')
@section('content')
    <div class="row">

        <div class="col-lg-5 col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Category</h3>
                </div>

                <form action="/admin/subcategories/{{ $subCategory->id }}" method="post" accept-charset="utf-8">
                    @csrf
                    @method("PUT")
                    @include('admin.categories._category-form',[
                        'category' => $subCategory,
                        'submit_title' => 'Update Category',
                        'parent_categories' => $parentCategories
                    ])
                </form><!-- form end -->

            </div>
            <!-- /.box -->
        </div>

    </div>

@endsection