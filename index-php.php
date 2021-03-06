<?php 
	get_header();
	?>
	
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
  <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Web by Ryan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div id="div-wrapper" class="single-div">
    <div id="header">
      <div class="bcg layer">
        <h1 style="text-align:center;color:white;"> Hello </h1>
        <h3> I build websites & web applications  </h3>
      </div>
      <img id="me" style="z-index:1;width:140px;border-radius:100%;top:90px;position:absolute;left:calc(50% - 70px);" src="imgs/face.jpg"/>
    </div>

    <div id="bar" class="single-div">
      <div class="bcg">
        <div class="center-bar">
          <span id="items">
            <a href="work.html"<h2 style="border:1px solid white;padding-left:10px;padding-right:10px;top:15px;text-decoration:none;position:absolute;left:calc(50% -110px);color:white;">Request Job</h2></a>
          </span>
        </div>
      </div>
    </div>

    <div id="rise"class="single-div">
      <div class="bcg">
   <h3 style="color:white;"> Sample work </h3>
        <a id="komo" class="col-xs-3" href="https://ryan-blake.github.io/komo-tea"><div class="hover"></div>
          <a href="#openModal" id="open-modal" style="left:calc(50% - 116px);">INFO</a>
          <div id="openModal" class="modalDialog">
              <div>	<a href="#close" title="Close" class="close">X</a>
                  	<h2>Komo Tea</h2>
                  <p>I created this landing page for a consumers <br>  e-commerce business.</p>
                  <p>Completely responsive with a modern feel</p>
              </div>
          </div>
        </a>
        <a id="armory" class="col-xs-3" href="http://www.armoryup.com/"><div class="hover"></div>
          <a href="#armoryModal" id="open-modal" style="left:calc(50% - -52px);">INFO</a>
          <div id="armoryModal" class="modalDialog">
              <div>	<a href="#close" title="Close" class="close">X</a>
                    <h2>Armory Up</h2>
                  <p>This landing page was built with SEO rankings in mind<br> </p>
                  <p>sleek modern feel yet informitive</p>
              </div>
          </div>
        </a>
      </div>
    </div>




    <div id="footer" class="single-div" style="top:800px;left:0;position:absolute;background-color:white;height:45px;width:100%;">
      <div class="bcg ">
      <div class="col-xs-2">
        <a href="https://www.twitter.com/ryanekbk">
          <div id="spritetwitter" class="col-xs-3 spritesheet">
          </div>
        </a>
      </div>
    </div>
  </div>


  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-81484577-2', 'auto');ga('send', 'pageview');

  </script>
</body>

</html>
<?php	get_footer();
?>