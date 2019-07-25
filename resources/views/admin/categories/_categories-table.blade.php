<div class="table-responsive">
    <table class="table table-bordered table-striped dataTable" id="cs_datatable_lang"
           role="grid"
           aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th width="20">id</th>
            <th>Category_name</th>
            <th>Color</th>
            <th class="max-width-120">Options</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($categories as $item): ?>
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
                            data-toggle="dropdown"><?php echo trans('select_an_option'); ?>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu options-dropdown">
                        <li>
                            <a href=""><i
                                        class="fa fa-edit option-icon"></i><?php echo trans('edit'); ?>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                               onclick="delete_item('category_controller/delete_category_post','<?php echo $item->id; ?>','<?php echo trans("confirm_category"); ?>');">
                                <i class="fa fa-trash option-icon"></i><?php echo trans('delete'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

</div>