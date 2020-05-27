<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="style/auth.css" />
  <script src="script/auth.js"></script>
</head>

<body>
  <header>
    <!-- <div class="container"> -->
    <div class="icons">
      <a href="https://www.linkedin.com/" target="”_blank”" class="icon icon--linkedin"></a>
      <a href="https://www.twitter.com/" target="”_blank”" class="icon icon--twitter"></a>
      <a href="https://www.pinterest.com/" target="”_blank”" class="icon icon--pinterest"></a>
      <a href="https://www.google.com/" target="”_blank”" class="icon icon--google-plus"></a>
      <a href="https://rss.app/" target="”_blank”" class="icon icon--rss"></a>
    </div>
    <div class="title">
      <h1 class="title title--text">
        concomitant
      </h1>

      <ul class="menuItem">
        <li class="menuItem menuItem--item">
          Free PSD Website Template
        </li>

        <li class="menuItem menuItem--item">
          <a id="signup" href="auth.html">Sign Up</a>
          <a id="login" href="auth.html">Login</a>
          <a href="#">RSS Feeds</a>
          <a href="#">Archived News</a>
        </li>
      </ul>
    </div>
    <!-- </div> -->
  </header>

  <nav class="MenuFrame">
    <div class="container1">
      <div class="menu">
        <div class="container">
          <div class="row">
            <div class="col-2-of-3">
              <div class="MainMenu">
                <a href="main.html" class="MainMenu MainMenu--MenuItem">HomePage</a>
                <a href="tours.html" class="MainMenu MainMenu--MenuItem">Tours</a>
                <a href="booking.html" class="MainMenu MainMenu--MenuItem">Booking</a>
                <a href="#" class="MainMenu MainMenu--MenuItem">Portfolio</a>
                <a href="gallery.html" class="MainMenu MainMenu--MenuItem">Gallery</a>
                <a href="#" class="MainMenu MainMenu--MenuItem">DropDown</a>
              </div>
            </div>
            <div class="col-1-of-3">
              <form class="b-search-form b-menu__search-form">
                <input class="b-search-form__input" type="text" placeholder="Search our website..." />
                <input class="b-search-form__input b-search-form__input_button" type="submit" value="Search" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Login -->

  <section class="section-login">
    <div class="container">
      <div class="row">
        <div class="login">
          <div class="login__form">
            <form method="post" action="<?php $_PHP_SELF ?>">
              <div class="u-margin-bottom-small">
                <h2 class="heading-secondary">
                  Your informations
                </h2>
              </div>
              <div id="fullname" class="form__group">
                <input type="text" class="form__input" placeholder="Full name" id="fullname" name="fullname" />
                <label for="fullname" class="form__label">Full name</label>
              </div>
              <div class="form__group">
                <input type="email" class="form__input" placeholder="Email address" id="email" name="email" required />
                <label id="em1" for="email" class="form__label">Email address</label>
              </div>

              <div class="form__group">
                <input type="password" class="form__input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}" placeholder="Password" id="password" name="password" required />
                <label id="pas1" for="password" class="form__label">Password</label>
              </div>

              <span id="incorrect" name="incorrect"></span>

              <div class="form__group u-margin-bottom-medium">
                <div class="form__radio-group">
                  <input onclick="checkSignup()" type="radio" class="form__radio-input" id="large" name="size" checked />
                  <label for="large" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Sign up
                  </label>
                </div>
                <div class="form__radio-group">
                  <input onclick="checkLogin()" type="radio" class="form__radio-input" id="small" name="size" />
                  <label for="small" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Login
                  </label>
                </div>
              </div>

              <div class="form__group">
                <!-- <button type="submit" name="signup" id="logsign" class="btn btn--green">
                  Next step &rarr; -->
                <input name="signup" type="submit" value=" Signuup" id="signup" class="update_button" /> <!-- notice added name="" -->
                <input name="login_user" type="submit" value=" Login" id="login_user" class="update_button" /> <!-- notice added name="" -->

                <!-- </button> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  function login()
  {
    $email = $GLOBALS['email'];
    $conn = $GLOBALS['conn'];
    $password = $GLOBALS['password'];
    $sql = "SELECT * FROM users WHERE email ='$email'";
    $retval = mysqli_query($conn, $sql);
    if (mysqli_num_rows($retval) > 0) {
      $user_arr = [];
      while ($row = mysqli_fetch_assoc($retval)) {
        $user_arr[] = $row;
      }

      var_dump($user_arr[0]);
      $password_db = $user_arr[0]['password'];
      if ($password_db == $password) {
        echo "<script> logginSuccess();</script>";
      } else {
        echo "<script> incorrect_email_password();checkLogin();</script>";
        return;
      }
    } else {
      echo "<script> incorrect_email_password();checkLogin();</script>";
      return;
    }
    if (!$retval) {
      die("Nuk mund te shtohen te dhenat " . mysqli_connect_error());
    }
  }

  function signup()
  {
    $conn = $GLOBALS['conn'];

    $email = $GLOBALS['email'];
    $password = $GLOBALS['password'];
    $name = $GLOBALS['name'];

    $sql = "SELECT * FROM users WHERE email ='$email'";

    $retval = mysqli_query($conn, $sql);
    if (mysqli_num_rows($retval) > 0) {
      echo "<script> user_exist(); </script>";

      return 'This users alredy exist';
    } else {

      $sql = "INSERT INTO users(fullname,email,password)
    VALUES ('$name' ,'$email','$password');";

      $retval = mysqli_query($conn, $sql);
      if (!$retval) {
        die("Nuk mund te shtohen te dhenat " . mysqli_connect_error());
      } else {
        echo "<script> signupSuccess();  checkLogin(); </script>";
      }
    }

    if (!$retval) {
      die("Nuk mund te shtohen te dhenat " . mysqli_connect_error());
    }
  }
  if (isset($_POST['signup']) || isset($_POST['login_user'])) {
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'booking';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    if (!$conn) {
      die("Nuk mund te lidhet me db " . mysqli_connect_error());
    } else {
      $email = $_POST['email'];
      $password = $_POST['password'];
    }
    if (isset($_POST['signup'])) {
      $name = $_POST['fullname'];
      signup();
    } else if (isset($_POST['login_user'])) {
      login();
    }
    mysqli_close($conn);
  }
  ?>

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
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</body>

</html>