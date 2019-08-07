<div class="box">
    <div class="box-header with-border">
        <div class="left">
            <h3 class="box-title">@lang('messages.category')</h3>
        </div>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="form-group">
            <label class="control-label">@lang('messages.category')</label>
            <select id="categories" name="category_id" class="form-control" onchange="get_sub_categories(this.value);" required>
                <option value="">@lang('messages.select_category')</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                @endforeach

            </select>
        </div>
        <div class="form-group">
            <label class="control-label">@lang('messages.subcategory')</label>
            <select id="subcategories" name="subcategory_id" class="form-control">
                <option value="0">@lang('messages.select_category')</option>

            </select>
        </div>
    </div>
</div>





