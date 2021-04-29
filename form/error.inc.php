<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  /*=======================================

  Font Styling

  ========================================*/

  @font-face{
    font-family: "RetroSignature";
    src: url('../fonts/RetroSignature.otf')
    format('truetype');
  }

  h1,
  h2,
  footer {
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
  }

  h3,
  h4 {
    font: 60px 'RetroSignature';
    src: url('../fonts/RetroSignature.otf')
  }

  p,
  li,
  details {
    font-family: 'Nunito', sans-serif;
  }

  h1 {
    text-transform: uppercase;
  }

  /*=======================================

  Header Styling

  ========================================*/

  header {
     text-align: center;
     background: white;
     padding: 20px 10px;
  }

  header nav ul li {
    display: inline;
  }

  header nav a {
    color: black;
    text-decoration: none;
    font-family: 'Nunito';
    font-size: 24px;
    text-align: center;
    margin: 0 20px;
  }

  header nav a:hover {
    color: #303030;
  }

  footer {
    background: #303030;
    color: white;
    padding: 10px 30px;
    text-align: left;
  }

  footer img {
    width: 40px;
  }

  .social-media {
    margin-top: 10px;
  }

</style>

<header>
  <img src="images/for-the-goal-getters.png" alt="For the Goal-Getters" width="300" height="157">
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="work-with-me.html">Work With Me</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="blog.html">Blog</a></li>
    </ul>
  </nav>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p>FOLLOW @FORTHEGOALGETTERS</p>
  <div class="social-media">
    <a href="https://www.facebook.com/For-the-Goal-Getters-103725415202707" target="_blank"><img src="images/facebook.png" alt="facebook" title="facebook" /></a>
    <a href="https://www.instagram.com/forthegoalgetters/" target="_blank"><img src="images/instagram.png" alt="instagram" title="instagram" /></a>
    <a href="https://twitter.com/forgoalgetters" target="_blank"><img src="images/twitter.png" alt="twitter" title="twitter" /></a>
  </div>
</footer>
