@include('futala_layout.header')

@include('futala_home.main_slider')

@include('futala_home.filter_blade')

@include('futala_home.why_choose')

@include('futala_home.ebunga_product')

<!-- testimonial-area start -->
<div class="testimonial-area testimonial-bg bg-gray overly-image section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-md-2 col-md-8 col-sm-12">
                <div class="testimonial-slider">
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>JONATHON JORDAN</h5>
                        </div>
                    </div>
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>Michelle Mitchell</h5>
                        </div>
                    </div>
                    <div class="testimonial-inner text-center">
                        <div class="test-cont">
                            <img src="{{ asset('ladun/futala/') }}/images/icon/quite.png" alt="">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. There are many variations of passages.</p>
                        </div>
                        <div class="test-author">
                            <h5>Max Mitchell</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area end -->


<!-- Blog Area Start -->
<div class="blog-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="section-title text-center">
                    <h2><span>Latest</span> Blog</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered ledmid alteration in some ledmid form</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <!-- single-blog Start -->
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('ladun/futala/') }}/images/blog/blog-03.jpg" alt=""></a>
                        <div class="meta-tag">
                            <p><span>21</span> / Nov</p>
                        </div>
                    </div>

                    <div class="blog-content">
                        <h4><a href="#">Lorem Ipsum available but majority</a></h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some ledmid form There are many majority have suffered </p>
                        <div class="read-more">
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <!-- single-blog End -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- single-blog Start -->
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <a href="#"><img src="{{ asset('ladun/futala/') }}/images/blog/blog-04.jpg" alt=""></a>
                        <div class="meta-tag">
                            <p><span>26</span> / Nov</p>
                        </div>
                    </div>

                    <div class="blog-content">
                        <h4><a href="#">Available but majority lorem ipsum </a></h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered in some ledmid form There are many majority have suffered </p>
                        <div class="read-more">
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <!-- single-blog End -->
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

@include('futala_layout.footer')
