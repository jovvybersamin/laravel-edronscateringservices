<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-1 checkall"><input type="checkbox" id="checkall"/></th>
            <th class="col-sm-3">Name</th>
            <th class="col-sm-6">Description</th>
            <th class="col-sm-1 edit">Edit</th>
            <th class="col-sm-1 delete">Delete</th>
         </thead>
         <tbody>
            @foreach($packages as $package)
                <tr>
                    <td></td>
                    <td>{{ $package->name }}</td>
                    <td><p>{{ $package->description }}</p></td>
                    <td class="edit">
                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                            <a href="{{ route('admin.packages.edit',['id' => $package->id]) }}" class="btn btn-primary btn-xs" data-title="Edit">
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