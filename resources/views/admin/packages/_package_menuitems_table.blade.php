..
<div class="table-responsive">
    <table id="table-package-menuitems" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-1 checkall"><input type="checkbox" id="checkall"/></th>
            <th class="col-sm-4 center">Menu Item</th>
            <th class="col-sm-4 center">Menu</th>
            <th class="col-sm-1 delete">Delete</th>
         </thead>
         <tbody>
            @foreach($package_menuitems as $item)

                <tr>
                    <td></td>
                    <td class="center">{{ $item->name }}</td>
                    <td class="center">{{ $item->menu->name }}</td>
                    <td class="delete">
                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </p>
                    </td>
                </tr>
            @endforeach
         </tbody>
    </table>
</div>