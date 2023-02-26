@extends('layout/website')
@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">

  <!-- Start banner_about -->
  <section class="pt_banner_inner banner_px_image single_blog featured_image">
    <div class="parallax_cover">
      <img class="cover-parallax" src="../../assets/website/img/inner/0big0654.jpg" alt="image">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-8">
          <div class="banner_title_inner">


            <h1 class="margin-my-3 font-s-60" data-aos="fade-up" data-aos-delay="0">
              {{ $page->name }}
            </h1>



          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End banner_about -->

  <!-- Start content-Sblog -->
  <section class="content-Sblog" data-sticky-container>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="fixSide_scroll" data-sticky-for="1023" data-margin-top="100">
            <div class="share_socail">
              <div class="title">Share</div>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Facebook"
                data-sharer="facebook" data-hashtag="Rakon"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                <i class="tio facebook"></i>
              </button>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Twitter"
                data-sharer="twitter" data-title="Checkout Rakon!" data-hashtags="theme, Rakon"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                <i class="tio twitter"></i>
              </button>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Whatsapp"
                data-sharer="whatsapp" data-title="Checkout Rakon!"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                <i class="tio whatsapp_outlined"></i>
              </button>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Telegram"
                data-sharer="telegram" data-title="Checkout Rakon!"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521"
                data-to="+44555-03564">
                <i class="tio telegram"></i>
              </button>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="Pinterest"
                data-sharer="pinterest"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521">
                <i class="tio pinterest_circle"></i>
              </button>

              <button class="btn icon" data-toggle="tooltip" data-placement="right" title="skype"
                data-sharer="skype"
                data-url="https://themeforest.net/item/rakon-html-landing-page-templates/27849521"
                data-title="Checkout Rakon!">
                <i class="tio skype"></i>
              </button>

            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="body_content">

            <h3>{{ $page->description }}</h3>
            <p class="margin-b-3">In simple words, software architecture is the process of converting software
              characteristics such
              as flexibility, scalability, feasibility, reusability, and <mark>security into a structured
                solution</mark> that
              meets the technical and the business expectations. </p>
            <h3>The Characteristics of Software Architecture</h3>
            <p>
              {!!$page->content!!}
            </p>

            <img class="img_md" src="../../assets/website/img/inner/00pxsd.jpg" alt="">
            <p class="margin-b-3"><b>SOLID</b> refers to Single Responsibility, <mark>Open Closed</mark>, Liskov
              substitution,
              Interface
              Segregation and
              Dependency Inversion Principles.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End. sec_comments -->


</main>
@endsection