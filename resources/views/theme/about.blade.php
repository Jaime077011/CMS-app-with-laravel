@extends('layout/website')
@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <!-- Start banner_about -->
  <section class="pt_banner_inner banner_px_image" id="Discover">
    <div class="parallax_cover">
      <img class="cover-parallax" src="../../assets/website/img/inner/about.jpg" alt="image">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6">
          <div class="banner_title_inner">
            <h1 data-aos="fade-up" data-aos-delay="0">
              About Us
            </h1>
            <p data-aos="fade-up" data-aos-delay="100">
              Leave us a little info, and we’ll be in touch.
            </p>
            <div data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="btn btn_sm_primary bg-orange-red c-white rounded-8">Contact Us</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End banner_about -->

  <!-- Start about_cc_grid -->
  <section class="about_cc_grid padding-py-12" id="About">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="title_sections_inner mb-0">
            <div class="before_title">
              <span class="c-orange-red">{{ $page->name}}</span>
            </div>
            <h2>{{ $page->description}}</h2>
          </div>
        </div>
        <div class="col-lg-6 ml-auto">
          <div class="title_sections_inner mb-0">
            <p>{!! $page->content !!}</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center margin-t-12" data-aos="fade-up" data-aos-delay="0">
        <div class="col-lg-5 text-right">
          <div class="group_img">
            <img src="../../assets/website/img/inner/a01.png" alt="">
            <img src="../../assets/website/img/inner/a03.png" alt="">
          </div>
        </div>
        <div class="col-lg-7 text-left">
          <div class="group_img_two">
            <img src="../../assets/website/img/inner/a02.png" alt="">
            <img src="../../assets/website/img/inner/a04.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End. about_cc_grid -->

  <!-- Start group_logo_list -->
</main>
@endsection