<!doctype html>
<?php date_default_timezone_set('America/Chicago');?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael Karr web and mobile design &amp; development</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Raleway:500|Sedgwick+Ave">
      <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
      <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <style>img:not([src]) {
      visibility: hidden;
    }</style>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
  </head>
  <body ng-app="app">
<?php include_once ("analyticstracking.php");?>
    <!-- start top bar -->
    <div class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a class="hand" href="#">michaelkarr.net</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="tel:13192709334">Call now for a free consultation: <i class="fa fa phone"></i> <span class="tel">1.319.270.9334</span></li>
      <!-- <li class="has-dropdown"> -->
        <!-- <a href="#">Menu</a>
        <ul class="dropdown"> -->
          <li><a href="#contact">Contact Me</a></li>
        <!-- </ul> -->
      </li>
    </ul>
  </section>
</nav>
</div>
<!-- end top bar -->
  <!-- begin hero header -->
<section class="hero">
  <div class="row intro">
    <div class="small-centered medium-uncentered medium-6 large-7 columns">
      <h1>Michael Karr</h1>
      <p>Musings, introspections and other mundane cogination.
      </p>
    </div>
  </div>
</section>
<!-- end hero header -->


<!-- start footer -->
<footer class="footer" id="contact">
  <div class="row">
    <div class="small-12 medium-6 medium-push-6 columns">
      <p class="logo show-for-small-only"><i class="fi-target"></i> michaelkarr.net</p>
      <form class="footer-form" action = "email.php" method = "post">
        <div class="row">
          <div class="medium-9 medium-push-3 columns">
            <label>
              <label for="email" class="contact">Contact Me</label>
              <input type="email" id="email" name="email" value="<?php
if (isset($_POST['email'])) {
	echo $_POST['email'];
}?>" placeholder="Email Address" />
            </label>
          </div>
        </div>
        <div class="row">
          <div class="medium-9 medium-push-3 columns">
            <label>
              <textarea rows="5" id="message" name="message" placeholder="Message"></textarea>
            </label>
          </div>
          <div class="row">
            <div class="medium-9 medium-push-3 columns">
              <button class="submit" type="submit" value="Submit">Send</button>
              <input type="hidden" name="submitted" value="TRUE" />
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="small-12 medium-6 medium-pull-6 columns">
      <p class="logo hide-for-small-only">michaelkarr.net</p>
      <!-- <ul class="inline-list social">
        <a href="http://www.twitter.com/michaelkarr.io" target="_blank"><i class="fi-social-twitter"></i></a>
      </ul> -->
      <p class="copywrite">Copywrite not copyright &copy; <?php echo date("Y")?></p>
    </div>
  </div>
</footer>
<!-- end footer -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

    <script>
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 2000);
            return false;
          }
        }
      });
    });
    </script>

  <script>
    $(document).foundation();
  </script>

<script>
  [].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
	img.setAttribute('src', img.getAttribute('data-src'));
	img.onload = function() {
		img.removeAttribute('data-src');
	};
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];
a.async=1;
a.src=g;
m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66871250-1', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
