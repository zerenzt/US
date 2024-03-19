<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<html lang="en-us">
<head>
  <meta charset="utf-8">
  <title>Pena Room</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->
  <link rel="stylesheet" href="{{ asset('plugins/bulma/bulma.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">


  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

  <meta property="og:title" content="Reader | Personal Bulma Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>
<body>

  <!-- navigation -->
  @include('partials.navigation')

  <div class="py-4"></div>
  <section class="section">
    <div class="container">
      <div class="columns is-multiline is-desktop is-justify-content-center">
        <div class="column is-9-desktop mb-5">
          <article>
            <div class="post-slider mb-4">
              <img src="{{ asset('images/post/post-2.jpg') }}" class="card-img" alt="post-thumb">
            </div>
            
            <h1 class="h2">Customer Engage Marketing Marketing Strategy to Economy Structure Everyone.</h1>
            <ul class="card-meta my-3 list-inline">
              <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                  <img src="{{ asset('images/john-doe.jpg') }}">
                  <span>Charls Xaviar</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
              <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                  <li class="list-inline-item"><a href="tags.html">Color</a></li>
                  <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                  <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                </ul>
              </li>
            </ul>
            <div class="content">
              <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies are reaching out to digital agencies, responding to the new possibilities available. However, the industry is fast becoming overccolumnsded, heaving with agencies offering similar services — on the surface, at least. Producing creative, fresh projects is the key to standing out. Unique side projects are the best place to innovate, but balancing commercially and creatively lucrative work is tricky. So, this article looks at</p>
              <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies
              are reaching out to digital agencies, responding to the new possibilities available. However, the industryis fast becoming overccolumnsded, heaving with agencies offering similar services — on the surface, at least.Producing creative, fresh projects is the key to standing out. Unique side projects are the best place toinnovate, but balancing commercially and creatively lucrative work is tricky. So, this article looks at</p>
              <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies
              are reaching out to digital agencies, responding to the new possibilities available. However, the industryis fast becoming overccolumnsded, heaving with agencies offering similar services — on the surface, at least.
              Producing creative, fresh projects is the key to standing out. Unique side projects are the best place toinnovate, but balancing commercially and creatively lucrative work is tricky. So, this article looks at</p>
              <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, companies
              are reaching out to digital agencies, responding to the new possibilities available. However, the industryis fast becoming overccolumnsded, heaving with agencies offering similar services — on the surface, at least.
              Producing creative, fresh projects is the key to standing out. Unique side projects are the best place toinnovate, but balancing commercially and creatively lucrative work is tricky. So, this article looks at</p>
            </div>
          </article>
        </div>

        <div class="column is-9-desktop mt-4">
          @include('partials.comments')

          @include('partials.leave_comment')
        </div>
      </div>
    </div>
  </section>

  @include('partials.footer')

  <!-- JS Plugins -->
  <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
  <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>

  <!-- Main Script -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
