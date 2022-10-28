@extends('layouts.admin_header')

@section('content')

  

    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th> SL </th>
                <th>order_no</th>
                <th>style_no</th>
                <th>design_no</th>
                <th>stich</th>
                <th>product_name</th>
                <th>colour_name</th>
                <th>unit_name</th>
                <th>quantity</th>
                <th>unit_price</th>
                <th>total</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
        <tfoot>
            <tr> 
                <th> SL </th>
                <th>order_no</th>
                <th>style_no</th>
                <th>design_no</th>
                <th>stich</th>
                <th>product_name</th>
                <th>colour_name</th>
                <th>unit_name</th>
                <th>quantity</th>
                <th>unit_price</th>
                <th>total</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
        </tfoot>    
                           
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
                        { data: 'order_no', name: 'order_no' },
                        { data: 'style_no', name: 'style_no' },
                        { data: 'design_no', name: 'design_no' },
                        { data: 'stich', name: 'stich' },
                        { data: 'product_name', name: 'product_name' },
                        { data: 'colour_name', name: 'colour_name' },
                        { data: 'unit_name', name: 'unit_name' },
                        { data: 'quantity', name: 'quantity' },
                        { data: 'unit_price', name: 'unit_name' },
                        { data: 'total', name: 'total' },
                        { data: 'type', name: 'type', orderable: false, searchable: true },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
             });
            });
    </script>
        
        @endsection