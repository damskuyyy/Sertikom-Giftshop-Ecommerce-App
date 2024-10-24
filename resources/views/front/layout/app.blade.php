    @include('front.layout.header')

    @yield('konten')
    <!-- slider section -->
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome To Our <br>
                        Gift Shop
                      </h1>
                      <p>
                      Temukan Hadiah yang Penuh Makna untuk Orang-Orang Tersayang!🎁
                      </p>
                      <p>Di sini, setiap hadiah yang Anda pilih akan menjadi momen spesial untuk mereka yang Anda cintai. 
                      Kami menyediakan berbagai pilihan hadiah yang unik dan penuh cinta, cocok untuk setiap kesempatan.</p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="{{asset('front')}}/images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome To Our <br>
                        Gift Shop
                      </h1>
                      <p>
                      Temukan Hadiah yang Penuh Makna untuk Orang-Orang Tersayang!🎁
                      </p>
                      <p>Di sini, setiap hadiah yang Anda pilih akan menjadi momen spesial untuk mereka yang Anda cintai. 
                      Kami menyediakan berbagai pilihan hadiah yang unik dan penuh cinta, cocok untuk setiap kesempatan.</p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="{{asset('front')}}/images/slider-img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        Welcome To Our <br>
                        Gift Shop
                      </h1>
                      <p>
                      Temukan Hadiah yang Penuh Makna untuk Orang-Orang Tersayang!🎁
                      </p>
                      <p>Di sini, setiap hadiah yang Anda pilih akan menjadi momen spesial untuk mereka yang Anda cintai. 
                      Kami menyediakan berbagai pilihan hadiah yang unik dan penuh cinta, cocok untuk setiap kesempatan.</p>
                      <a href="">
                        Contact Us
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="{{asset('front')}}/images/slider-img.png" alt=" " />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <img src="{{asset('front')}}/images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
   @include('front.layout.shop')

  <!-- saving section -->
  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="{{asset('front')}}/images/saving-img.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Best Savings on <br>
                  new arrivals
                </h2>
              </div>
              <p>
              Kami berkomitmen untuk membantu Anda menemukan hadiah yang sempurna untuk orang-orang tercinta, baik itu untuk ulang tahun, perayaan, atau hanya untuk menunjukkan kasih sayang sehari-hari. Di Gift Ecommerce, 
              kebahagiaan pelanggan adalah prioritas kami, 
              dan kami selalu berusaha memberikan pengalaman belanja yang mudah, aman, dan memuaskan.
              </p>
              <div class="btn-box">
                <a href="#" class="btn1">
                  Buy Now
                </a>
                <a href="#" class="btn2">
                  See More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end saving section -->

  <!-- why section -->
  @include('front.layout.why')

  <!-- gift section -->
  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="{{asset('front')}}/images/gifts.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Gifts for your <br>
                  loved ones
                </h2>
              </div>
              <p>
              Kami berkomitmen untuk membantu Anda menemukan hadiah yang sempurna untuk orang-orang tercinta, baik itu untuk ulang tahun, perayaan, atau hanya untuk menunjukkan kasih sayang sehari-hari. Di Gift Ecommerce,
              kebahagiaan pelanggan adalah prioritas kami, 
              dan kami selalu berusaha memberikan pengalaman belanja yang mudah, aman, dan memuaskan.
              </p>
              <div class="btn-box">
                <a href="#" class="btn1">
                  Buy Now
                </a>
                <a href="#" class="btn2">
                  See More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end gift section -->

  <!-- contact section -->
  @include('front.layout.contact')

  <!-- client section -->
  @include('front.layout.testimonial')

  @include('front.layout.footer')
