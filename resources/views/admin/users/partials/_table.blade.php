<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-3">Name</th>
            <th class="col-sm-3">Email</th>
            <th class="col-sm-3">Username</th>
            <th class="col-sm-1 center">Is Admin</th>
            <th class="col-sm-1 center">Is Active</th>
            <th class="col-sm-1 edit">Edit</th>
         </thead>
         <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td><p>{{ $user->email }}</p></td>
                    <td><p>{{ $user->username }}</p></td>
                    <td class="center">
                        <span class="green">{{ $user->is_admin ? '✔' : '' }}</span>
                    </td>
                    <td class="center">
                        <span class="green">{{ $user->is_active ? '✔' : '' }}</span>
                    </td>
                    <td class="edit">
                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                            <a href="{{ route('admin.users.edit',['id' => $user->id]) }}" class="btn btn-primary btn-xs" data-title="Edit">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </p>
                    </td>
                </tr>
            @endforeach
         </tbody>
    </table>
</div>