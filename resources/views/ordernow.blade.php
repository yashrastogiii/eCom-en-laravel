@extends('master')
@section('content')
<div class="custom-product">
        <div class="col-sm-10">
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Amount</th>
      <td>$ {{ $total }}</td>
      
    </tr>
    <tr>
      <th scope="row">Tax</th>
      <td>$ 0</td>
      
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td colspan="2">$ 10</td>

    </tr> 
       <tr>
      <th scope="row">Total Amount</th>
      <td colspan="2">$ {{ $total +10 }}</td>
    </tr>
  </tbody>
</table>
<form action="/orderplace" method="POST">
    @csrf
  <div class="mb-3">
    <textarea type="email" class="form-control" name="address" placeholder="Enter email address" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label"><h3>Payment Method:</h3> </label> <br>
    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br><br>
    <input type="radio" value="cash" name="payment"> <span>Emi Payment</span> <br><br>
    <input type="radio" value="cash" name="payment"> <span>Payment On Delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
    </div>
</div>
@endsection