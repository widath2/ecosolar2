<x-shop-layout>
<section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
			<br><br>
            <div class="row">
               
			@foreach($products as $pro)
			
			<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{ asset('uploads/product/' . $pro->image) }}" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                 <sup>Rs. </sup>{{$pro->price}}
                            </span>

                            <h4>{{$pro->name}}</h4>

                            <p>{{$pro->description}}</p>

                            <ul class="social-icons">
                                <li><a href="{{ url('more/' . $pro->id) }}">+ View</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
            </div>

			@endforeach
            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Nex</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; eco solar-Design <a rel="nofollow noopener" href=""></a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </section>
 

</x-shop-layout>
