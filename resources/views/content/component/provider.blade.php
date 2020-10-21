<section class="help-us-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title-style-two text-center">
                    <h2>APA SAJA YANG KAMI SEDIAKAN?</h2>
                </div>
            </div>
            <div class="help-us-content-area">
                <!-- Start single help -->
                @for ($i = 0; $i < $lapangan; $i++)                    
                <div class="col-sm-4">
                    <div class="single-help">
                        <div class="help-icon">
                            <i class="{{ ${"logo_{$i}"} }}" aria-hidden="true"></i>
                        </div>
                        <div class="help-text">
                        <h3>{{ ${"lapangan_{$i}"} }}</h3>
                        <p>{{ ${"deskripsi_{$i}"} }}</p>
                        <a href="/home" class="btn-sm bo-ra-3">{{ ${"button_{$i}"} }}</a>
                        </div>
                    </div>
                </div>
                @endfor
                <!-- End single help -->
            </div>
        </div>
    </div>
</section>