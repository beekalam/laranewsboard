<div class="table-responsive">
    <table class="table table-bordered table-striped dataTable" id="cs_datatable_lang"
           role="grid"
           aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th width="20">id</th>
            <th>Category Name</th>
            <th>Color</th>
            <th class="max-width-120">Options</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <div style="width: 60px; height: 30px; background-color:{{ $item->color }} ;"></div>
                </td>
                <td>
                    <div class="dropdown">
                        <button class="btn bg-purple dropdown-toggle btn-select-option"
                                type="button"
                                data-toggle="dropdown">Actions
                            <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu options-dropdown">
                            <li>
                                <a href="/admin/categories/{{ $item->id }}">
                                    <i class="fa fa-edit option-icon"></i>edit
                                </a>
                            </li>
                            <form method='post' action="/admin/categories/{{ $item->id }}"
                                  id="cat_delete_{{ $item->id }}" class="hidden">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="submit">
                            </form>
                            <li>
                                <a href="javascript:void(0)"
                                   onclick="delete_item('cat_delete_{{ $item->id }}','Delete Category?');">
                                    <i class="fa fa-trash option-icon"></i>Delete</a>
                            </li>
                        </ul>

                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>