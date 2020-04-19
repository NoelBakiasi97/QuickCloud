<section class="page-section">
    <div class="container">
         <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Our history</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div>
        </div><!-- end title -->
        <div class="timeline">
            <div class="timeline__wrap">
                <div class="timeline__items">

                    @foreach ($history as $item)   
                        <div class="timeline__item">
                            <div class="timeline__content" style="background: url('{{asset('storage/'.$item->img)}}') no-repeat center;
                            background-size: cover;">
                                <h2>{{$item->year}}</h2>
                                <p>{{$item->text}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>