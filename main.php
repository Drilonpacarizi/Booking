<!DOCTYPE html>
<html manifest="myWeb.appcache" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/homepagecard.css" />
  <title>Concomitant</title>
</head>

<body>
  <?php include 'header.php'; ?>
  <section id="slider">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="img/1.png" style="width: 800px; height: 360px;" />
      </div>
      <div class="mySlides fade">
        <img src="img/2.png" style="width: 800px; height: 360px;" />
      </div>
      <div class="mySlides fade">
        <img src="img/3.jpg" style="width: 800px; height: 360px;" />
      </div>

      <div class="mySlides fade">
        <img src="img/4.png" style="width: 800px; height: 360px;" />
      </div>

      <div class="mySlides fade">
        <img src="img/5.jpg" style="width: 800px; height: 360px;" />
      </div>
    </div>
    <br />

    <div style="text-align: center;">
      <span class="leftarrow" onclick="plusSlides(-1)">
        <img src="icon/left-arrow.png" alt="" /></span>

      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="rightarrow" onclick="plusSlides(1)">
        <img src="icon/right-arrow.png" alt="" />
      </span>
    </div>
  </section>

  <section class="uts">
    <div class="container">
      <!-- <div class="container2"> -->
      <div class="row">
        <div class="col-1-of-4">
          <a href="#" class="ut">
            <img src="/icon/icon-group.png" alt="" />
          </a>
          <h3>
            Vivamuslibero Augue
          </h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
            perferendis vel et quis debitis delectus modi temporibus
            laudantium officiis molestiae.
          </p>
        </div>
        <div class="col-1-of-4">
          <a href="#" class="ut">
            <img src="/icon/icon-globe.png" alt="" />
          </a>
          <h3>
            Vivamuslibero Augue
          </h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos esse
            magnam iusto voluptatum corrupti quisquam natus deleniti
            architecto voluptatibus maxime?
          </p>
        </div>
        <div class="col-1-of-4">
          <a href="#" class="ut">
            <img src="/icon/icon-cogs.png" alt="" />
          </a>
          <h3>
            Vivamuslibero Augue
          </h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
            labore dolor officia praesentium distinctio ducimus alias. Amet
            voluptates fuga doloremque.
          </p>
        </div>
        <div class="col-1-of-4">
          <a href="#" class="ut">
            <img src="/icon/icon-leaf.png" alt="" />
          </a>
          <h3>
            Vivamuslibero Augue
          </h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
            harum obcaecati atque minima molestias repellendus illo at
            suscipit libero iusto!
          </p>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </section>

  <section class="section-tours" id="section-tours">
    <div class="container">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
          Most popular tours
        </h2>
      </div>
      <?php
      $dbhost = 'localhost:3306';
      $dbuser = 'root';
      $dbpassword = '';
      $dbname = 'booking';

      $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

      $sql = "SELECT * FROM booking where previous_price is not null";

      $retval = mysqli_query($conn, $sql);
      $user_arr = [];
      if (mysqli_num_rows($retval) > 0) {
        $user_arr = [];
        while ($row = mysqli_fetch_assoc($retval)) {
          $user_arr[] = $row;
        }
      }
      if (!$retval) {
        die("Nuk mund te mirren te dhenat " . mysqli_connect_error());
      }
      if (!$conn) {
        die("Nuk mund te lidhet me db " . mysqli_connect_error());
      } else {
        echo '<div class="row">';
        for ($i = 0; $i < count($user_arr); $i++) {
          $test = "asdsadas";
          $style = 'style="background-image: linear-gradient(to right bottom, #ffb900, #ff7730),
          url(' . $user_arr[$i]['img_url'] . ');"';
          echo ('
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture" ' . $style . '>
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span--1">
                    The Sea Explore
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>' . $user_arr[$i]['title'] . '</li>
                    <li>Up to 30 people</li>
                    <li>2 tour guides</li>
                    <li>Sleeping in cazy hotels</li>
                    <li>Difficulty: easy</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$297</p>
                  </div>
                  <a href="#popup" class="btn btn--white">Book now!</a>
                </div>
              </div>
            </div>
          </div>
        ');
        }
        echo '</div>';
      }

      ?>
      <div class="u-center-text u-margin-top-huge">
        <a href="booking.html" class="btn btn--green">Discover all tours</a>
      </div>
    </div>
  </section>

  <section class="PrTitles">
    <hr />
    <div class="container">
      <div style="padding-top: 1.5em;">
        <div class="row">
          <div class="col-1-of-4">
            <div class="layout">
              <a href="#" class="PrTitle">
                <img src="img/200.png" alt="" />
              </a>
              <h4>
                Project Title
              </h4>
              <p>
                Portortornec condimenterdum eget consectetuer condis consequam
                pretium pellus sed mauris enim. Puruselit mauris nulla
                hendimentesque elit semper nam a sapien urna sempus
              </p>
              <p>
                <a href="#" class="PrTitle PrTitles--wd">View Details <span class="different">>></span></a>
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="layout">
              <a href="#" class="PrTitle">
                <img src="img/200.png" alt="" />
              </a>
              <h4>
                Project Title
              </h4>
              <p>
                Portortornec condimenterdum eget consectetuer condis consequam
                pretium pellus sed mauris enim. Puruselit mauris nulla
                hendimentesque elit semper nam a sapien urna sempus
              </p>
              <p>
                <a href="#" class="PrTitle PrTitles--wd">View Details <span class="different">>></span></a>
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="layout">
              <a href="#" class="PrTitle">
                <img src="img/200.png" alt="" />
              </a>
              <h4>
                Project Title
              </h4>
              <p>
                Portortornec condimenterdum eget consectetuer condis consequam
                pretium pellus sed mauris enim. Puruselit mauris nulla
                hendimentesque elit semper nam a sapien urna sempus
              </p>
              <p>
                <a href="#" class="PrTitle PrTitles--wd">View Details <span class="different">>></span></a>
              </p>
            </div>
          </div>
          <div class="col-1-of-4">
            <div class="layout">
              <a href="#" class="PrTitle">
                <img src="img/200.png" alt="" />
              </a>
              <h4>
                Project Title
              </h4>
              <p>
                Portortornec condimenterdum eget consectetuer condis consequam
                pretium pellus sed mauris enim. Puruselit mauris nulla
                hendimentesque elit semper nam a sapien urna sempus
              </p>
              <p>
                <a href="#" class="PrTitle PrTitles--wd">View Details <span class="different">>></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-1-of-4">
          <div class="footer-container">
            <div class="footer-header">
              <h2>Contact Details</h2>
            </div>
            <p>
              Convallisijusto vestas mus pellentum aenean sapibulum in aliquam
              volut pat integest nulla.
            </p>
            <address>
              Tel: xxxxx xxxxxxxxxx <br />
              Fax: xxxxx xxxxxxxxxx<br />
              Email: contact@mydomain.com
            </address>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="footer-container">
            <div class="footer-header">
              <h2>Quick Links</h2>
            </div>

            <div class="footer-list">
              <ul>
                <li><a href="#">Link text here</a></li>
                <li><a href="#">Link text here</a></li>
                <li><a href="#">Link text here</a></li>
                <li><a href="#">Link text here</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="footer-container">
            <div class="footer-header">
              <h2>Form The blog</h2>
            </div>
            <h5>Blog Post Title</h5>
            <small>Posted by Admin on 00.00.0000</small>
            <p>
              Vestibulumaccumsan egestibulum eu justo convallis augue estas
              aenean elit intesque sed facilispede estibulum.
            </p>
            <a href="#">Read More »</a>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="footer-container">
            <div class="footer-header">
              <h2>Grab our newsletter</h2>
            </div>
            <form>
              <input type="text" placeholder="Name" class="footer-form" />
              <input type="email" placeholder="Email" class="footer-form" />
              <input type="submit" value="Submit" class="form-submit" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer id="about-me">
    <div class="container">
      <div class="about-me">
        <p>
          Copyright &copy 2013 - All Rights Reserved - Domain Name
        </p>
        <p>Template by OS Templates</p>
      </div>
    </div>
  </footer>
</body>
<script src="script/check.js"></script>
<script src="script/main.js"></script>

</html>