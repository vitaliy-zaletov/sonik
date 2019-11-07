<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118116560-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118116560-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png" type="img/png">

    <title>Aliran</title>

    <!-- Bootstrap core CSS -->
 
    <link href="font/BwDarius/stylesheet.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   

    <!-- Custom styles for this template -->
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>
  </head>
  <body>
  <div class="nav-top">
      <div class="container">
          <div class="text-logo">
              <h3>aliran</h3>
          </div>
          <button type="button" class="menu-trigger">
             <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
            </button>
          <ul class="menu">
              <!-- <li><a href="#content-setting" class="navigation">Установка</a></li>
              <li><a href="#content-improve" class="navigation">Преимущества</a></li>
              <li><a href="#content-features" class="navigation">Характеристики</a></li>
              <li><a href="#footer" class="navigation">Контакты</a></li>
              <li><span class="size-small">+38 (068)</span><span> 94 90 070</span></li> -->

              <?php wp_nav_menu( 'manu=nav_menu' ); ?>
          </ul>
          
      </div>
  </div>
  <div class="divOrange-bg-svg">
      <div class="title-generale">
        <h1><?php echo get_the_title(1); ?></h1>
        <h3><?php echo get_the_title('home_page'); ?></h3>
      </div>
     <svg class="bottom-triangle" 
      viewBox="0 0 100 100" 
       preserveAspectRatio="none" 
       version="1.1"
         baseProfile="full"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         xmlns:ev="http://www.w3.org/2001/xml-events" >
     <defs>
          <linearGradient id="RadialGradient1">
            <stop offset="15%" stop-color="#fa9a0b"/>
            <stop offset="41%" stop-color="#fbaa0f"/>
            <stop offset="58%" stop-color="#fbaa0f"/>
            <stop offset="87%" stop-color="#fa9a0b"/>  
          </linearGradient>
      </defs>
     <path d="M0 0 L 100 0 50 50" id="footer-curve" fill="url(#RadialGradient1)"></path>
     </svg>
 </div>
      