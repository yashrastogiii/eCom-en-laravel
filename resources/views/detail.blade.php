@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $products['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Back</a>
            <h2>{{ $products['name'] }}</h2>
            <h3>Price: {{ $products['price'] }}</h3>
            <h4>Details: {{ $products['description'] }}</h4>
            <h4>category: {{ $products['category'] }}</h4>
            <br><br>
            <button class="btn btn-primary">Add to cart</button><br><br>
            <button class="btn btn-success">Buy Now</button><br><br>
            
        </div>
    </div>
</div>
@endsection