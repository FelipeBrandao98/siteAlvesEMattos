<head>
  <link rel="stylesheet" href="components/slideshow/styles/slideShow.css">
</head>

<body>
  <div class="slider">

    <div class="slides">
      <!-- {# Slideshow Buttons Start #} -->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!-- {# Slideshow Buttons End #} -->

      <!-- Slide Images Start -->
      <div class="slide first">
        <span>
            <img src="assets/slideImage/slide-1.jpeg" alt="">
        </span>
      </div>
      <div class="slide">
        <img src="assets/slideImage/slide-2.jpeg" alt="">
      </div>
      <div class="slide">
        <img src="assets/slideImage/slide-3.jpeg" alt="">
      </div>
      <div class="slide">
        <img src="assets/slideImage/slide-4.jpeg" alt="">
      </div>
      <!-- Slide Images End -->

      <!-- Automatic navigation start -->
      <div class="navigation-auto">
        <div class="auto-btn-1"></div>
        <div class="auto-btn-2"></div>
        <div class="auto-btn-3"></div>
        <div class="auto-btn-4"></div>
      </div>
      <!-- Automatic navigation end -->
    </div>

    <!-- Manual navigation start -->
    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
    </div>
    <!-- Manual navigation end -->
  </div>

  <script src="components/slideShow/scripts/slideShow.js"></script>
  <script src="components/slideShow/scripts/autoChangeSlideMenu.js"></script>
</body>