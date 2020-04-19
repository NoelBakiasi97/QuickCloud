<div id="domain" class="section wb">
    <div class="container">
        <div class="row text-center">

            <div class="container my-5">
                <form action="{{route('search')}}" method="POST">
                    @csrf
                    <div class="bg-success rounded p-2">
                        <div class="d-flex w-100">

                            @if(session()->has('msg'))
                                <span class="text-white">{{session('msg')}}</span>
                            @endif
                            <input type="text" name="name" class="form-control" id="domainnamehere" placeholder="Enter domain name here..">
                            <button type="submit" class="btn btn-success grd1"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <hr> 
                    <div class="d-flex">
                        
                        <div class="checkbox checkbox-warning d-flex col-1 bg-success py-2 mx-2">
                            <input value="com" name="ext" id="domaincom" type="checkbox" class="styled">
                            <label for="domaincom">.com</label>
                        </div>
                        <div class="checkbox checkbox-warning d-flex col-1 bg-success py-2 mx-2">
                            <input value="net" name="ext" id="domainnet" type="checkbox" class="styled">
                            <label for="domainnet">.net</label>
                        </div>
                        <div class="checkbox checkbox-warning d-flex col-1 bg-success py-2 mx-2">
                            <input value="org" name="ext" id="domainorg" type="checkbox" class="styled">
                            <label for="domainorg">.org</label>
                        </div>
                        <div class="checkbox checkbox-warning d-flex col-1 bg-success py-2 mx-2">
                            <input value="tv" name="ext" id="domaintv" type="checkbox" class="styled">
                            <label for="domaintv">.tv</label>
                        </div>
                        <div class="checkbox checkbox-warning d-flex col-1 bg-success py-2 mx-2">
                            <input value="info" name="ext" id="domaininfo" type="checkbox" class="styled">
                            <label for="domaininfo">.info</label>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="customwidget text-center">
                    <h1>Find Your Domain</h1>
                    <p>With our awesome domain name search form, you can search any domain names with tons of extensions.</p>
                    <p>Pursuing high quality standards, my greatest efforts are focused on producing semantic, SEO-friendly, valid and clean code. In order to stay effective and relevant in this constantly evolving sphere I always try to be in touch with the latest news and recent approaches in programming.</p>
                    <ul class="list-inline">
                        <li><i class="fa fa-check"></i> 20k Domains Sold in 2017</li>
                        <li><i class="fa fa-check"></i> 4k Website Created</li>
                    </ul>
                    <!-- end list -->
                    <a href="#" class="hover-btn-new"><span>Hosting Packages</span></a>
                </div>
            </div>
            
            <!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->