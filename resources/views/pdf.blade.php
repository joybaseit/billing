<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title> Billing Invoice </title>
	
<style>

  
* { margin: 0; padding: 0; }
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 100%; margin: 0 auto; }

textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
table { border-collapse: collapse; }
table td, table th { border: 1px solid black; padding: 5px; }

#header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

#address { width: 250px; height: 150px; float: left; }
#customer { overflow: hidden; }

#logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 100px; overflow: hidden; }
#logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
#logoctr { display: none; }
#logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
#logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
#logohelp input { margin-bottom: 5px; }
.edit #logohelp { display: block; }
.edit #save-logo, .edit #cancel-logo { display: inline; }
.edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
#customer-title { font-size: 20px; font-weight: bold; float: left; }

#meta { margin-top: 1px; width: 300px; float: right; }
#meta td { text-align: right;  }
#meta td.meta-head { text-align: left; background: #eee; }
#meta td textarea { width: 100%; height: 20px; text-align: right; }

#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background: #eee; }
#items textarea { width: 80px; height: 50px; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 100%; }
#items td.total-line { border-right: 0; text-align: right; }
#items td.total-value { border-left: 0; padding: 10px; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }

#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
#terms textarea { width: 100%; text-align: center;}

textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }

#hiderow,
.delete {
  display: none;
}

</style>
</head>

<body>

	<div id="page-wrap">

		<textarea id="header"> Billing  </textarea>
      <div id="identity" style = "position:relative; left:-30px;">
              <div id="logo">
                <img  src="{{ $show->qr_code }}" alt="logo" />
              </div>
      
      </div> 
      <br>
      <br><br>
		<table id="items" style="width:750px;position:relative; right:-15px;">
    <table id="items" style="width:510px;">
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
                <th>total in BDT</th>
                </tr>
                </thead>
                                       <tbody>               
                                           <tr>
                                               <td>{{$show->id}}</td>
                                               <td >{{$show->order_no}}</td>
                                               <td >{{$show->style_no}}</td>
                                               <td> {{$show->design_no}} </td>
                                               <td> {{$show->stich}}</td>
                                               <td>{{$show->product_name}}</td>
                                               <td> {{$show->colour_name}} </td>
                                               <td> {{$show->unit_name}}</td>
                                               <td>{{$show->quantity}}</td>
                                               <td> {{$show->unit_price}} </td>
                                               <td> {{$show->total}}</td>
                                           </tr>
             
                                       </tbody>
	          	</table>
              <br>
              <div id="identity" style = "float:center; position:relative; right:-15px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Prepared By</p>
                  </div>
              </div>
              <br>
              <div id="identity" style ="float:center; position:relative; right:-365px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Sales Manager</p>
                  </div>
              </div>
              <div id="identity" style = "float:left; position:relative; right:-665px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Authorized by</p>
                  </div>
              </div>
              <br><br><br><br><br>
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Delivery Must Be taken Within 07 Days.</textarea>
		</div>
	
	</div>

  <div id="page-wrap">

		<textarea id="header"> Billing  </textarea>
      <div id="identity" style = "position:relative; left:-30px;">
              <div id="logo">
                <img  src="{{ $show->qr_code }}" alt="logo" />
              </div>
      
      </div> 
      <br>
      <br><br>
		<table id="items" style="width:750px;position:relative; right:-15px;">
    <table id="items" style="width:510px;">
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
                <th>total in BDT</th>
                </tr>
                </thead>
                                       <tbody>               
                                           <tr>
                                               <td>{{$show->id}}</td>
                                               <td >{{$show->order_no}}</td>
                                               <td >{{$show->style_no}}</td>
                                               <td> {{$show->design_no}} </td>
                                               <td> {{$show->stich}}</td>
                                               <td>{{$show->product_name}}</td>
                                               <td> {{$show->colour_name}} </td>
                                               <td> {{$show->unit_name}}</td>
                                               <td>{{$show->quantity}}</td>
                                               <td> {{$show->unit_price}} </td>
                                               <td> {{$show->total}}</td>
                                           </tr>
             
                                       </tbody>
	          	</table>
              <br>
              <div id="identity" style = "float:center; position:relative; right:-15px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Prepared By</p>
                  </div>
              </div>
              <br>
              <div id="identity" style ="float:center; position:relative; right:-365px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Sales Manager</p>
                  </div>
              </div>
              <div id="identity" style = "float:left; position:relative; right:-665px;">
                  <div id="logo">
                  <div style="height: 2px;width:90px;background: black;"></div>
                  <br>
                    <p style="text-align: center;">Authorized by</p>
                  </div>
              </div>
              <br><br><br><br><br>
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Delivery Must Be taken Within 07 Days.</textarea>
		</div>
	
	</div>
	
</body>

</html>