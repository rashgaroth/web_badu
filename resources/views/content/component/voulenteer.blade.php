<section class="our-volunteers-area pt-90 pb-90">
    <div class="container">
        <div class="row">
            <!-- Start section title -->
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <h2>OUR <span>VOLUNTEERS</span></h2>
                    <img src="img/title-bottom.png" alt="">
                    <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                </div>
            </div>
            <!-- End section title -->
            <div class="our-volunteers">
                <!-- Start single volunteer -->
                @for ($i = 0; $i < $person; $i++)                    
                <div class="col-sm-3">
                    <div class="single-volunteer">
                        <div class="volunteer-image-and-social">
                        <img src="{{ ${"foto_{$i}"} }}" alt="">
                            <div class="volunteer-social">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="volunteer-title text-center">
                        <h5>{{ ${"name_{$i}"} }}</h5>
                        <p>{{ ${"as_{$i}"} }}</p>
                        </div>
                    </div>
                </div>
                @endfor
                <!-- End single volunteer -->
            </div>
        </div>
    </div>
</section>