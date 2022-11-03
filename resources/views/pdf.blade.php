<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Customer No:-{{$show->customer_name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Order NO :- {{$show->order_no}}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Address : - {{$show->address}}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Order NO :- {{$show->style_no}}</h6>
    <h6 class="card-subtitle mb-2 text-muted">Total : {{$show->total_order}}</h6>
  </div>
</div>

<table style="width: 80%; margin-left:auto;margin-right:auto; margin-top:50px;">
  <tr>
    <th> SL.</th>
    <th> Products Title </th>
    <th> Quantity  </th>
    <th> Unit Price  </th>
    <th> TOtal Price</th>
  </tr>
  @php
      $count =1;
  @endphp
  @foreach ($show1 as $sh)
    <tr>
        <td>{{ $count++ }}</td>
        <td>{{ $sh ->products-> product_name }}</td>
        <td>{{ $sh -> price }}</td>
        <td>{{ $sh -> qty }}</td>
        <td>{{ $sh -> total_bdt }}</td>
    </tr>
    @endforeach
  
</table>

</body>
</html>


