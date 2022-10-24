<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
   <script src="{{ asset('jquery-3.5.0.min.js') }}"></script>
    <script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#price, #qty").keyup(function(){

    	var total=0;    	
    	var x = Number($("#price").val());
    	var y = Number($("#quantity").val());
    	var total=x * y;  

    	$('#total').val(total);

    });
});
</script>
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
                        <li><a class="d-flex align-items-center" href="/add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item text-truncate" data-i18n="Invoice Add">Add Product</span></a>
                        </li>
                    </ul>
                
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
    <form class="form"  method="POST" action="{{route('bill.store')}}" enctype="multipart/form-data">
    @csrf  
    <label for="demoA">Order No </label>
      <input name="order_no" type="text" id="demoA"/>

      <label for="demoB">Style No </label>
      <input name="style_no" type="text" id="demoA"/>

      <label for="demoB">Design Name </label>
      <input name="design_no" type="text" id="demoA"/>

      <label for="demoB">Stich </label>
      <input name="stich" type="number" id="demoA"/>

      <label for="demoC">Product Name </label>
      <select name="product_name" class="custom-select" id="customSelect">
           <option selected disabled>Select Products </option>
             @foreach($data as $pro)
            <option value="{{$pro->product_name}}">{{$pro->product_name}}</option>
            @endforeach
         </select>

      <label for="demoC">Colour </label>
      <select name="colour_name" class="custom-select" id="customSelect">
           <option selected disabled>Select Colour </option>
             @foreach($data1 as $col)
            <option value="{{$col->colour_name}}">{{$col->colour_name}}</option>
            @endforeach
        </select>

      <label for="demoC">Unit Name</label>

      <select name="unit_name" class="custom-select" id="customSelect">
           <option selected disabled>Select Products </option>
            <option value="kg">KG</option>
            <option value="ton">Ton</option>
            <option value="gram">gram</option>
        </select>
       
      <label for="demoB">Quantity </label>
      <input name="quantity" type="number" id="quantity"/>

      <label for="demoB">Unit Price </label>
      <input name="unit_price" type="number" id="price"/>

      <label for="demoB">Total </label>
      <input name="total" type="number" id="total"/>

      <input type="submit" value="Go"/>
    </form>
    </main>
  </body>
</html>

