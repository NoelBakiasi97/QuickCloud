<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>About US</h3>
                    </div>
                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Information Link</h3>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
            
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Contact Details</h3>
                    </div>

                    @foreach ($contact as $item)
                        <ul class="footer-links">
                            <li><a href="#">{{$item->email}}</a></li>
                            <li><a href="#">{{$item->url}}</a></li>
                            <li>{{$item->adress}}</li>
                            <li>{{$item->number}}</li>
                        </ul><!-- end links -->
                    @endforeach

                </div><!-- end clearfix -->
            </div><!-- end col -->
            
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="bg-transparent rounded mt-5 p-2 mx-auto">
        <form action="{{route('subscribe')}}" method="POST">
            <div class="d-flex w-25 mx-auto">
                @csrf
                <input type="email" name="email" class="form-control" placeholder="Enter your email to subscribe to out newsletter !">
                <button type="submit" class="btn btn-secondary"><i class="fa fa-envelope"></i></button>
            </div>
        </form>
    </div>
</footer><!-- end footer -->



<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">                   
                <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">QuickCloud</a> Design By : <a href="https://html.design/">html design</a></p>
            </div>

            <div class="footer-right">
                <ul class="footer-links-soi">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul><!-- end links -->
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>