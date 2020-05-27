<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="style/booking.css" />
</head>

<body>
  <?php include 'header.php'; ?>
  <section class="section-tours" id="section-tours">
    <div class="container">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
          Most popular tours
        </h2>
      </div>

      <div class="row">
        <?php
        $dbhost = 'localhost:3306';
        $dbuser = 'root';
        $dbpassword = '';
        $dbname = 'booking';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

        if (isset($_POST['search'])) {
          $name = $_POST['search_input'];

          $sql = "SELECT * FROM booking WHERE title like '%$name%'";
        } else {
          $sql = "SELECT * FROM booking";
        }

        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
          die("Nuk mund te mirren te dhenat " . mysqli_connect_error());
        }
        $booking_arr = [];
        if (mysqli_num_rows($retval) > 0) {
          while ($row = mysqli_fetch_assoc($retval)) {
            $booking_arr[] = $row;
          }
        }
        for ($i = 0; $i < count($booking_arr); $i++) {
          $test = "asdsadas";
          $style = 'style="background-image: linear-gradient(to right bottom, #ffb900, #ff7730),
          url(' . $booking_arr[$i]['img_url'] . ');"';
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
              <li>' . $booking_arr[$i]['title'] . '</li>
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
        ?>

      </div>

      <div class="u-center-text">
        <a href="#" class="btn btn--green">Discover all tours</a>
      </div>
    </div>
  </section>



  <div id="map"></div>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHnbtjKk3N4DSBjl3v72itZTTDODlW8rw&callback=initMap"></script>

  <!-- footer -->
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
<script src="script/booking.js"></script>
<script src="script/check.js"></script>

</html>