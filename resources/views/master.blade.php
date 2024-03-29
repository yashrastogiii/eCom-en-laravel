<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .custom-login {    
        POSITION: RELATIVE;
        TOP: 146PX;
    }
    .slider-img {
        height: 400px;
        width: 100%;
    }
    .foot {
        background-color: #f8f9fa;
        clear: both;
        padding: 6px ;
        position: fixed;
        bottom: -20px;
        width: 100%;

    }
    .custom-product {
        height: 400px;
    }
    .slider-text {
        background: radial-gradient(black, transparent);
    }
    .trending-image {
        height: 100px;
    }.trending-item {
        float: left;
        width: 20%;

    }.trending-wrapper {
        margin: 30px;
    }.detail-img {
        height: 200px;
    } .search-box {
        width:500px !important;
    }
    .cart-list-divider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
<body>
    {{View::make('header')}}
    @yield('content')    
    {{View::make('footer')}}
</body>
<script>
 
</script>
</html>