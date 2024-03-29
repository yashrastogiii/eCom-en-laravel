@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-6 mx-auto">
            @foreach ($products as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{ $item->id}}">
                            <img class="trending-image" src="{{ $item->gallery }}">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                              <h2>Name: {{ $item->name}}</h2>
                              <h5>Delivery Status: {{ $item->status }}</h5>
                              <h5>Address: {{ $item->address }}</h5>
                              <h5>payment Status: {{ $item->payment_status }}</h5>
                              <h5>payment Mehtod: {{ $item->payment_methd }}</h5>
                            </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
@endsection