<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/parallax_04.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">

                    @foreach ($testimonials as $item)
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i>{{$item->title}}</h3>
                                <p class="lead">{{$item->comment}}</p>
                            </div>
                            <div class="testi-meta">
                                <img src='{{asset('storage/'.$item->img)}}' alt="" class="img-fluid">
                                <h4>{{$item->name}}</h4>
                            </div>
                        </div>
                    @endforeach
                    
                        <!-- end testi-meta -->
                    </div><!-- end testimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->