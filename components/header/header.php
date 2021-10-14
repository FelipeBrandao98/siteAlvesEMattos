<head>
  <link rel="stylesheet" href="components/header/styles/header.css">
  <link rel="stylesheet" href="components/header/styles/menu.css">
  <link rel="stylesheet" href="components/header/styles/inputdarkmode.css">

  <link rel="stylesheet" href="components/header/styles/headerMobile.css">
  <link rel="stylesheet" href="components/header/styles/menuMobile.css">
</head>
<body>
  <header id="header-animated" class="on-top">
    <span id="logo"></span>

    <menu id="header-menu" class="hide">
      <div class="button-open-close-area">
        <span id="open-close-menu-mobile"></span>
      </div>
      <a href="" class="selected">HOME</a>
      <a href="">INSTITUCIONAL</a>
      <a href="">NEWSLETTER</a>
      <a href="">CONTATO</a>
    </menu>
    
    <div class="toggle">
      <span>
        🌞
      </span>
      <input id="switch" type="checkbox" name="theme">
      <label for="switch">Toggle</label>
      <span>
        🌚
      </span>
    </div>
  </header>
  
  <script src="components/header/scripts/nightmode.js"></script>
  <script src="components/header/scripts/headerUpDown.js"></script>
  <script src="components/header/scripts/openCloseMenuMobile.js"></script>
</body>