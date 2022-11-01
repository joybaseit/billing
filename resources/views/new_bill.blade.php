
@extends('layouts.admin_header')

@section('content')

                        @if ($message = Session::get('success_add'))
                            

                            <div class="alert alert-success">
                                        <h5 class="alert-title">Success</h5>
                                        {{$message}}
                                    </div>
                      
                          @endif            
                      
        <div class="col-lg-12">
                            <div class="card">
                              
                                <div class="card-body">
                                <div class="card-header">Billing -> New Billing</div>
                                <br>
                                    <form class="needs-validation" novalidate accept-charset="utf-8" method="POST" action="{{route('bill.store')}}" enctype="multipart/form-data">
                                      @csrf
                                       <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Order No</label>
                                                <input type="email" class="form-control" name="order_no" placeholder="order_no" required>
                                                <small class="form-text text-muted">Enter a valid order no.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your email address.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="style_no" class="form-label">Style No</label>
                                                <input type="text" class="form-control" name="style_no" placeholder="style_no" required>
                                                <small class="form-text text-muted">Your style_no must be 8-20 characters long, contain letters and numbers only.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your style_no.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="design_no" class="form-label">Design No</label>
                                                <input type="text" class="form-control" name="design_no" placeholder="design_no" required>
                                                <small class="form-text text-muted">Your design_no must be 8-20 characters long, contain letters and numbers only.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your design_no.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="stich" class="form-label">Stich</label>
                                                <input type="number" class="form-control" name="stich" placeholder="stich" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your stich.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">customer_name </label>
                                                <input type="text" class="form-control" name="customer_name" placeholder="asif_karim" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a products.</div>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">Address </label>
                                                <input type="text" class="form-control" name="address" placeholder="33,Mirpur" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a Colour.</div>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">Colour</label>
                                               <select name="colour_name" class="form-select" required>
                                                <option selected disabled>Select Colour </option>
                                                    @foreach($data1 as $col)
                                                    <option value="{{$col->colour_name}}">{{$col->colour_name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a Colour.</div>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">Unit Name</label>
                                                <select name="unit_name" class="form-select" required>
                                                    <option selected disabled>Select Products </option>
                                                        <option value="kg">KG</option>
                                                        <option value="ton">Ton</option>
                                                        <option value="gram">gram</option>
                                                    </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a Unit Name.</div>
                                            </div>
                                            <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">Courency &nbsp;&nbsp; &nbsp;&nbsp; </label>
                                                <input type="checkbox" name= "mycheckbox" id="mycheckbox" value="0" /> For BDT. &nbsp;&nbsp; &nbsp;&nbsp;
                                                <input type="checkbox" name= "mycheckbox" id="mycheckbox1" value="1" /> For USD  &nbsp;&nbsp; &nbsp;&nbsp;
                                            </div>
                                            <div>
                                        </div>
                                    
                                                                           <div id="mycheckboxdiv" style="display:none">

                                                                                   <div class="row g-2">
                                                                                        <table class="order-list">
                                                                                                <thead>
                                                                                                    <tr><td>Product</td><td>Price</td><td>Qty</td><td>Total</td></tr>
                                                                                                </thead>
                                                                                                
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td><select name="products_id[]" class="form-select" required>
                                                                                                    <option selected disabled>Select Products </option>
                                                                                                        @foreach($data as $pro)
                                                                                                        <option value="{{$pro->id}}">{{$pro->product_name}}</option>
                                                                                                        @endforeach
                                                                                                    </select></td>
                                                                                                    <td><input type="text" name="qty[]" /></td>
                                                                                                        <td><input type="text" name="price[]" /></td>
                                                                                                        <td><input type="text" name="linetotal[]" /></td>
                                                                                                        <td><a class="deleteRow"> x </a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                                <br>
                                                                                            <br>
                                                                                            <br>
                                                                                                <tfoot>
                                                                                                    <tr>
                                                                                                        <td colspan="5" style="text-align: center;">
                                                                                                            <input type="button" id="addrow" value="Add Product" />
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <td colspan="5">
                                                                                                            Grand Total: $<span id="grandtotal" ></span> <input type="hidden" id="grandtotal"   name="total_order" >
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tfoot>
                                                                                            </table> 
                                                                                    </div>
                                                                             </div>
                                                                             <div id="mycheckboxdiv1" style="display:none">

                                                                                <div class="row g-2">
                                                                                    <table class="order-list1">
                                                                                            <thead>
                                                                                                <tr><td>Product</td><td>Price</td><td>Qty</td><td>Total</td></tr>
                                                                                            </thead>
                                                                                            
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td><select name="products_id1[]" class="form-select" required>
                                                                                                        <option selected disabled>Select Products </option>
                                                                                                            @foreach($data as $pro)
                                                                                                            <option value="{{$pro->id}}">{{$pro->product_name}}</option>
                                                                                                            @endforeach
                                                                                                        </select>                                           
                                                                                                     </td>
                                                                                                     <td><input type="text" name="price1[]" /></td>
                                                                                                     <td><input type="text" name="qty1[]" /></td>
                                                                                                    <td><input type="text" name="linetotal1[]" /></td>
                                                                                                    <td><a class="deleteRow"> x </a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                            <br>
                                                                                            <br>
                                                                                            <br>
                                                                                            <tfoot>
                                                                                                <tr>
                                                                                                    <td colspan="5" style="text-align: center;">
                                                                                                        <input type="button" id="addrow1" value="Add Product" />
                                                                                                    </td>
                                                                                                </tr>
                                                                                                
                                                                                                <tr>
                                                                                                    <td colspan="5">
                                                                                                        Grand Total: <span id="grandtotal1" ></span> <input type="hidden" id="grandtotal1" value="" name="total_order_usd" >
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tfoot>
                                                                                        </table> 
                                                                                </div>
                                                                                </div>
                                                                                                                                                            
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <script src="{{ asset('jquery-3.5.0.min.js') }}"></script>     
                                       
    <script>

$(document).ready(function () {
    var counter = 1;
    
    $("#addrow").on("click", function () {
        counter++;
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td>  <div class="col-sm-10"> <select name="products_id[]" class="form-select" required>  <option selected disabled>Select Products </option>  @foreach($data as $pro)   <option value="{{$pro->id}}">{{$pro->product_name}}</option> @endforeach </select> </div></td>';
        cols += '<td><input type="text" name="qty[]' + counter + '"/></td>';
        cols += '<td><input type="text" name="price[]' + counter + '"/></td>';
        cols += '<td><input type="text" name="linetotal[]' + counter + '" readonly="readonly"/></td>';
        cols += '<td><a class="deleteRow"> x </a></td>';
        newRow.append(cols);
        
        $("table.order-list").append(newRow);
    });
    
    $("table.order-list").on("change", 'input[name^="price"], input[name^="qty"]', function (event) {
        calculateRow($(this).closest("tr"));
        calculateGrandTotal();
    });
    
    $("table.order-list").on("click", "a.deleteRow", function (event) {
        $(this).closest("tr").remove();
        calculateGrandTotal();
    });
});
    
function calculateRow(row) {
    var yes = document.getElementById("mycheckbox");  
    var no = document.getElementById("mycheckbox1");
    
    if (yes.checked == true){ 
    var price = +row.find('input[name^="price"]').val();
    var qty = +row.find('input[name^="qty"]').val();
    row.find('input[name^="linetotal"]').val((price * qty).toFixed(2));
    }

    else if (no.checked == true){  
     var price = +row.find('input[name^="price1"]').val();
    var qty = +row.find('input[name^="qty1"]').val();
    row.find('input[name^="linetotal1"]').val((price * qty/102.85).toFixed(2));  
  }   
}
    
function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="linetotal"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
      var gr = document.getElementById("grandtotal").value;
}

$(document).ready(function () {
    var counter = 1;
    
    $("#addrow1").on("click", function () {
        counter++;
        
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td>  <div class="col-sm-10"> <select name="products_id1[]" class="form-select" required>  <option selected disabled>Select Products </option>  @foreach($data as $pro)   <option value="{{$pro->id}}">{{$pro->product_name}}</option> @endforeach </select> </div></td>';
        cols += '<td><input type="text" name="price1[]' + counter + '"/></td>';
        cols += '<td><input type="text" name="qty1[]' + counter + '"/></td>';
        cols += '<td><input type="text" name="linetotal1[]' + counter + '" readonly="readonly"/></td>';
        cols += '<td><a class="deleteRow"> x </a></td>';
        newRow.append(cols);
        
        $("table.order-list1").append(newRow);
    });

    $("table.order-list1").on("change", 'input[name^="price1"], input[name^="qty1"]', function (event) {
        calculateRow($(this).closest("tr"));
        calculateGrandTotal1();
    });
    
    $("table.order-list1").on("click", "a.deleteRow", function (event) {
        $(this).closest("tr").remove();
        calculateGrandTotal1();
    });   
});

function calculateGrandTotal1() {
    var grandTotal1 = 0;
    $("table.order-list1").find('input[name^="linetotal1"]').each(function () {
        grandTotal1 += +$(this).val();
    });
    $("#grandtotal1").text(grandTotal1.toFixed(2));
    var gr = document.getElementById("grandtotal1").value;
  
}

$(document).ready(function() {
    $('#mycheckbox').change(function() {
        $('#mycheckboxdiv').toggle();
    });
});
$(document).ready(function() {
    $('#mycheckbox1').change(function() {
        $('#mycheckboxdiv1').toggle();
    });
});


</script>

@endsection