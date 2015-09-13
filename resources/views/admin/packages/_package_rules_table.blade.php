..
<div class="table-responsive">
    <table id="table-package-rules" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-1 checkall"><input type="checkbox" id="checkall"/></th>
            <th class="col-sm-4 center">Menu</th>
            <th class="col-sm-4 center">No. of items</th>
            <th class="col-sm-1 edit">Edit</th>
            <th class="col-sm-1 delete">Delete</th>
         </thead>

         <tbody>

            @foreach($package_rules as $rule)

                <tr>
                    <td></td>
                    <td class="center">{{ $rule->getMenu('name') }}</td>
                    <td class="center">{{ $rule->no_of_items }}</td>
                    <td class="edit">
                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                            <a href="{{ route('admin.package-course.edit',['id' => $rule->id]) }}" onclick="PackageCourse.edit(this); return false;" class="edit btn btn-primary btn-xs" data-title="Edit" data-target="#edit-package-course-modal">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </p>
                    </td>
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