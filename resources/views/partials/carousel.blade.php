<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">

        @foreach ($carousel as $index=>$item)
            <div class="carousel-item @if($index==1)active @endif">
                <div id="home" class="first-section" style="background-image:url({{asset('storage/'.$item->img)}});">
                    <div class="dtab">
                        <div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline text-center">
                                        <h2>{{$item->title}}</h2>
                                        <p class="lead">{{$item->text}}</p>
                                            <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
        @endforeach
        
        <!-- Left Control -->
        <a class="spanCarou new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="spanCarou new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>