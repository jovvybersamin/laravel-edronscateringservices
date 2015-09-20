<table id="modal-table-package-menuitems" class="table table-bordered table-striped table-hover">
         <thead>
            <th class="col-sm-1 checkall">
                <input type="checkbox" id="checkall"/>
            </th>
            <th class="col-sm-6">Menu Item</th>
            <th class="col-sm-3 center">Menu</th>
            <th class="col-sm-2 right">Price / Head </th>
         </thead>
         <tbody>
            @foreach($menuitems as $item)
                <tr>
                    <td class="center">
                        <input type="checkbox" name="id[]" value="{{ $item->id }}"/>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td class="center">{{ $item->menu }}</td>
                    <td class="right">Php {{ $item->price_per_head }}</td>
                </tr>
            @endforeach
         </tbody>
    </table>

    <script type="text/javascript">
        (function($){
           var table = $('#modal-table-package-menuitems');

           $(document).on('change','#checkall',function(){
                if (this.checked){
                    $(':checkbox',table).each(function(index,item){
                       this.checked = true;
                       console.log($(this));
                    });
                }else{
                    $(':checkbox',table).each(function(index,item){
                        this.checked = false;
                   });
                }
           });
        })(jQuery);
    </script>
