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
                                                <small class="form-text text-muted">Your password must be 8-20 characters long.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your stich.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">Products </label>
                                                <select name="product_name" class="form-select" required>
                                                <option selected disabled>Select Products </option>
                                                    @foreach($data as $pro)
                                                    <option value="{{$pro->product_name}}">{{$pro->product_name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a products.</div>
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
                                        </div>
                                        <div class="row g-2">
                                            
                                            <div class="mb-3 col-md-2">
                                                <label for="zip" class="form-label">Quantity</label>
                                                <input type="number" class="form-control" name="quantity" placeholder="00000" id="quantity" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a quantity.</div>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="zip" class="form-label">Unit Price</label>
                                                <input type="number" class="form-control" name="unit_price" placeholder="00000" id="price" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a unit price.</div>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="zip" class="form-label">Total in BDT.</label>
                                                <input type="number" class="form-control" name="total" placeholder="00000" id="total" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a total.</div>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="zip" class="form-label">Total in USD</label>
                                                <input type="number" class="form-control" name="totalusd" placeholder="00000" id="totalusd" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a total.</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <script src="{{ asset('jquery-3.5.0.min.js') }}"></script>                    
    <script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#price, #qty").keyup(function(){

    	var total=0;    	
    	var x = Number($("#price").val());
    	var y = Number($("#quantity").val());
    	var total=x * y;
        var usd = total/101.32; 

       var totalusd = usd.toFixed(2);

    	$('#total').val(total);
        $('#totalusd').val(totalusd);

    });
});
</script>

@endsection