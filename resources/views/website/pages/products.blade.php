@extends('website.layouts.default')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
         <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Products List</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Products List</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="products" class="portfolio-details">

<div class="container">

    <div class="row">
        <!-- Product Card Start -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="card-text"><strong>Price: $100</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Product Card End -->

        <!-- Product Card Start -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="card-text"><strong>Price: $150</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Product Card End -->

        <!-- Product Card Start -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <p class="card-text"><strong>Price: $200</strong></p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Product Card End -->
        
        <!-- Add more product cards as needed -->
    </div>
</div>
</section>
@stop