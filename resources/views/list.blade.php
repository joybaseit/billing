@extends('layouts.admin_header')

@section('content')

  

    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th> SL </th>
                <th>Name </th>
                <th>order_no</th>
                <th>style_no</th>
                <th>design_no</th>
                <th>Stich</th>
                <th>Total Order </th>
                <th>Total Order In USD</th>
                <th>Unit Name</th>
                <th>Colour Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>                       
    </main>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js" defer></script>
       <script type="text/javascript">
             $(document).ready(function () {
                datatable = $('#datatable').DataTable({
                    
                    processing: true,
                    serverSide: true,
                    order: [[2, 'desc']],
                    ajax: {
                        "url": "/list",
                        "data": function(d) {
                            // EMPTY FOR NOW
                        }
                    },
                
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                        { data: 'customer_name', name: 'customer_name' },
                        { data: 'order_no', name: 'order_no' },
                        { data: 'style_no', name: 'style_no' },
                        { data: 'design_no', name: 'design_no' },
                        { data: 'stich', name: 'stich' },
                        { data: 'total_order', name: 'total_order' },
                        { data: 'total_order_usd', name: 'total_order_usd' },
                        { data: 'unit_name', name: 'unit_name' },
                        { data: 'colour_name', name: 'colour_name' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
             });
            });
    </script>
        
        @endsection