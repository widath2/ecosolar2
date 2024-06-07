<x-shop-layout>
@if($products)
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> <em><sup>Rs</sup>{{$products->price}}</em></h2>
                        <p>{{$products->name}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
we
    <!-- ***** Fleet Starts ***** -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <section class="section">
        <div class="container">
            <br>
            <br>

            <div class="row">
              <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ asset('uploads/product/' . $products->image) }}" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <br>
              </div>
              
   
              <div class="col-md-4">
                <div class="contact-form">
                <!-- Assuming you have a $product variable available -->
                <form action="{{ route('cart.add', $products->id) }}" method="POST">
    @csrf
    <input type="number" name="quantity" value="1" min="1">
    <button type="submit">Add to Cart</button>
</form>


                </div>

                <br>
              </div>
            </div>
        </div>
    </section>

    @endif
</x-shop-layout>
