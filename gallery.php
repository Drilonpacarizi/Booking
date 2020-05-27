<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="ie=edge" http-equiv="X-UA-Compatible" />
    <link href="style/gallery.css" rel="stylesheet" />
    <title>Gallery</title>
  </head>
  <body>
  <?php include 'header.php'; ?>

    <section class="section-stories">
      <audio controls autoplay hidden>
        <source src="img/wave.ogg" type="audio/ogg" />
        <source src="img/wave.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
      </audio>
      <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
          <source src="img/video.mp4" type="video/mp4" />
          <source src="img/video.webm" type="video/webm" />
          Your broswer is not supported!
        </video>
      </div>

      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
          We make people genuinely happly
        </h2>
      </div>

      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img
              src="img/nat-8.jpg"
              alt="Person on a tour"
              class="story__img"
            />
            <figcaption class="story__caption">
              Mary Smith
            </figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              I had the best week ever with my family
            </h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptates, vero. Architecto earum non hic!
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="story">
          <div>
            <figure class="story__shape">
              <img
                src="img/nat-9.jpg"
                alt="Person on a tour"
                class="story__img"
              />
              <figcaption class="story__caption">
                Jack Wilson
              </figcaption>
            </figure>
          </div>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              Wow! my life is complitely different now!
            </h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Voluptates, vero. Architecto earum non hic!
            </p>
          </div>
        </div>
      </div>

      <div class="u-center-text u-margin-top-huge">
        <a href="#" class="btn-text">Read All Stories &rarr; </a>
      </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="script/check.js"></script>
  </body>
</html>
