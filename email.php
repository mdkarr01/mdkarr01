<!doctype html>
<?php date_default_timezone_set('America/Chicago');?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Michael Karr web and mobile design &amp; development</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Raleway:500">
      <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <script src="bower_components/modernizr/modernizr.js"></script>
    <style>img:not([src]) {
      visibility: hidden;
    }</style>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
  </head>
  <body ng-app="app">
    <!-- start top bar -->
    <div class="fixed">
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">michaelkarr.net</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="tel:13192709334">Call now for a free consultation: <i class="fi-phone"></i> <span class="tel">1.319.270.9334</span></li>
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
<?php

if (isset($_POST['submitted'])) {
	function spam_scrubber($value) {
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');

		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== FALSE) {
				return '';
			}
		}

		$value = str_replace(array("\r", "\n", "%0a", "%0d"), '', $value);

		return trim($value);
	}//End spam scrubber.

	$scrubbed = array_map('spam_scrubber', $_POST);

	if (!empty($scrubbed['email']) && !empty($scrubbed['message'])) {
		$body = "Comments: {$scrubbed['message']}";
		$body = wordwrap($body, 70);

		//Send the email.
		mail('mike@michaelkarr.net', 'Contact Form Submission', $body, "From: {$scrubbed['email']}");

		echo
		'<p>Thanks for the email. I will get back to you soon.<br />
      <a href="index.php" class="button">Back To Home Page</a></p>';

	} else {

		echo '
      <p>There has been a problem. Please go back and try again.<br />
      <a href="index.php#contact" class="button">Back To Home Page</a></p>';
	}

}

?>
</div>
</div>
</section>
<!-- end hero header -->
<div class="row main">
  <div class="small-8 columns main">
    <h1>Responsive Web Design and Development</h1>
    <p>Mobile devices account for 55% of Internet usage in the U.S., Your desktop computer for 45%. Responsive design is no longer a luxury, but a necessity. Designs for the web need to be thought about as fluid canvasses that both look good and react at all different screen sizes. <a href="#contact">Contact me</a> today for a free consultation to find the best solution for you.</p>
  </div>
  <div class="small-4 columns show-for-medium-up"><img data-original="img/ecommerce.jpg"></div>
</div>
<!-- start cards -->
    <div class="row bottom">
      <div class="medium-4 columns">
        <div class="profile-card">
          <img class="inset" data-original="img/mobile.jpg" alt="iPhone">
          <div class="profile-info">
            <h4 class="subheader">Mobile First</h4>
            <p>Inky or inking can substitute for any word having to do with cool or awesome.</p>
            <ul>
              <li>62% of companies that designed a website specifically for mobile had increased sales.</li>
              <li>40% of mobile searchers have a local purchase intent.</li>
              <li>Nearly half of all consumers say they won’t return to a website if it doesn’t load properly on their mobile devices.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="profile-card">
          <img class="inset" data-original="img/money.jpg" alt="Money">
          <div class="profile-info">
            <h4 class="subheader">E-Commerce</h4>
            <p>Create an online shop for your products and services.</p>
            <ul>
              <li>Focused on providing the user with clear messaging and call to action.</li>
              <li>Pages load quickly and provide the user a smooth shopping experience.</li>
              <li>Google has announced that search ranking will be affected by whether your site is mobile friendly. Higher ranking equals more sales for you.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="medium-4 columns">
        <div class="profile-card">
          <img class="inset" data-original="img/handshake.jpg" alt="Two people shaking hands.">
          <div class="profile-info">
            <h4 class="subheader">Goals</h4>
            <p>Wide range of design and development services provided with a personal experience.</p>
            <ul>
              <li>You get a single point of contact for your entire web solution.</li>
              <li>Through pleasant and attentive consultations, I can find out what your taste is, whether it is a simple informational or a lavish multimedia site.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- end card -->
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
              <input type="email" id="email" name="email" placeholder="Email Address" />
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
      <ul class="inline-list social">
        <a href="http://www.twitter.com/michaelkarr.io" target="_blank"><i class="fi-social-twitter"></i></a>
      </ul>
      <p class="copywrite">Copywrite not copyright &copy; <?php echo date("Y")?></p>
    </div>
  </div>
</footer>
<!-- end footer -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/lazyload.js"></script>

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
    new LazyLoad();
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
