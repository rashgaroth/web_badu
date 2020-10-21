<section class="our-gallery pt-90 pb-60">
    <div class="container">
        <div class="row">
            <!-- Start section title -->
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <h2>OUR <span>Gallery</span></h2>
                    <img src="img/title-bottom.png" alt="">
                    <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                </div>
            </div>
            <!-- End section title -->
            <div class="gallery-area">
                <div class="col-sm-12">
                    <div class="gallery-menu text-center">
                        <nav>
                            <ul>
                                <li class="filter" data-filter="all">All</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div id="gallery-filter">
                    <!-- Start single gallery -->
                    @foreach ($gallery as $item)               
                    <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife ">
                        <div class="gallery-image-and-text">
                            <img class="img-responsive" src="{{$item}}" alt="" />
                            <a class="image-link text-center" href="{{$item}}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- End single gallery -->
                </div>
            </div>
        </div>
    </div>
</section>