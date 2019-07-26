<div class="box-body">

    <!-- include message block -->

    <!--print error messages-->

    <!--print custom error message-->

    <!--print custom success message-->

    {{--                        <div class="form-group">--}}
    {{--                            <label>Language</label>--}}
    {{--                            <select name="lang_id" class="form-control">--}}
    {{--                                <option value="1" selected="">English</option>--}}
    {{--                            </select>--}}
    {{--                        </div>--}}
    {!! var_dump($errors->all()) !!}
    <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
        <label>Category Name</label>
        <input type="text" class="form-control" name="name" placeholder="Category Name"
               value="{{ old('name',$category->name) }}"
               maxlength="200" required="">
        @if($errors->has('name'))
            <span class="help-block">{{ $errors->first('name') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label class="control-label">Slug
            <small>(If you leave it blank, it will be generated automatically.)</small>
        </label>
        <input type="text" class="form-control" name="slug"
               placeholder="Slug" value="{{ old('slug',$category->slug) }}">
    </div>

    <div class="form-group">
        <label class="control-label">Description (Meta Tag)</label>
        <input type="text" class="form-control" name="description"
               placeholder="Description (Meta Tag)" value="{{ old('description',$category->description) }}">
    </div>

    <div class="form-group">
        <label class="control-label">Keywords (Meta Tag)</label>
        <input type="text" class="form-control" name="keywords" placeholder="Keywords (Meta Tag)"
               value="{{ old('keywords',$category->keywords) }}">
    </div>

    <!-- Color Picker -->
    <div class="form-group" {{ $errors->has('color')? 'has-error':'' }}>
        <label>Color</label>
        <div class="input-group my-colorpicker colorpicker-element">
            <input type="text" class="form-control" name="color" maxlength="200" placeholder="Color"
                   value="{{ old('color', $category->color) }}"
                   required="">
            <div class="input-group-addon">
                <i style="background-color: rgb(0, 0, 0);"></i>
            </div>
        </div><!-- /.input group -->

        @if($errors->has('color'))
            <span class="help-block">{{ $errors->first('color') }}</span>
        @endif
    </div><!-- /.form group -->

    <div class="form-group" style="display:none">
        <label>Menu Order</label>
        <input type="number" class="form-control" name="" placeholder="Menu Order"
               value="1" min="1" required="">
    </div>

    @if(isset($parent_categories))
        <div class="form-group" {{ $errors->has('parent_id') ? 'has-error': '' }}>
            <label>Parent Category</label>
            <select id="categories" class="form-control" name="parent_id" required="">
                <option value="">Select</option>
                @foreach($parent_categories as $pcat)
                    <option value="{{ $pcat->id }}">{{ $pcat->name }}</option>
                @endforeach
            </select>
        </div>

        @if($errors->has('parent_id'))
            <span class="help-block">{{ $errors->first('parent_id') }}</span>
        @endif

    @else
        <input type="hidden" name="parent_id" value="0">
    @endif

</div>

<!-- /.box-body -->
<div class="box-footer">
    <button type="submit" class="btn btn-primary pull-right">{{ $submit_title }}</button>
</div>
