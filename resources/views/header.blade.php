<?php 
use App\Http\Controllers\ProductController;
if (Session::has('user')) {
    $total = ProductController::cartItem();

}else {
    $total = 0;
}?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="/">E-comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/myorders">Orders</a>
              </li>
              @if(!Session::has('user')) 
              <li class="nav-item">
                  <a class="nav-link" href="/myorders">Register</a>
              </li>
              @endif
              @if(Session::has('user')) 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Session::get('user')['name'] }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/cartlist">Cart({{ $total }})</a>
            </li>
              
              
              @endif
              <li class="nav-item d-flex align-items-center">
                  <form class="d-flex" action="/search">
                      <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
              </li>
              
          </ul>
          <ul class="navbar-nav ml-auto">
             
              
          </ul>

      </div>
  </div>
</nav>
 