<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
  </head>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="potato.png"/>
        <i class="txt">MY ADMIN</i>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
      </div>

      <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/home"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Invoice Edit">Add Billing </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/list"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Invoice Edit">List </span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Invoice Add"> Add Product</span></a>
                        </li>
                    </ul>
    </div>
      @if ($message = Session::get('success_add'))
                            
                            <div class="alert alert-primary mb-2" role="alert">
                               {{$message}}
                            </div>
                      
                          @endif

    <!-- (B) MAIN -->
    <main id="pgmain">

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
                <th>Action</th>
            </tr>
        </tfoot>    
                           
    </main>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
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
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]

             });
            });
    </script>
        
  </body>
</html>

