<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-1 checkall"><input type="checkbox" id="checkall"/></th>
            <th class="col-sm-4">Name</th>
            <th class="col-sm-3">Menu</th>
            <th class="col-sm-2 right">Price Per Head</th>
            <th class="col-sm-1 edit">Edit</th>
            <th class="col-sm-1 delete">Delete</th>
         </thead>
         <tbody>
            @foreach($menuitems as $item)
                <tr>
                    <td></td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->menu()->first()->name }}</td>
                    <td class="right">Php {{ $item->price_per_head }}</td>
                    <td class="edit">
                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                            <a href="{{ route('admin.menuitems.edit',['id' => $item->id]) }}" class="btn btn-primary btn-xs" data-title="Edit">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                        </p>
                    </td>
                    <td class="delete">
                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                            <a  href="{{ route('admin.menuitems.destroy',$item->id) }}" class="btn btn-danger btn-xs table-delete" data-title="Delete">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </p>
                    </td>
                </tr>
            @endforeach
         </tbody>
    </table>
</div>

@include('admin.partials.modals.confirm')

@section('footer')
    <script type="text/javascript" src="/js/admin.table.js"></script>
@endsection

