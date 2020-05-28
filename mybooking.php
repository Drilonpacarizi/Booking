<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="style/booking.css" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="style/story.css" />

</head>

<body>
    <?php include 'header.php'; ?>
    <section class="section-tours" id="section-tours">
        <div class="container">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    My Bookings
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span--1">
                                    The Sea Explore
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tours</li>
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
                                <a href="#popup" class="btn btn--white">Remove!</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="section-stories">


        <div class="u-center-text u-margin-bottom-small">
            <h2 class="heading-secondary">
                Add a story
            </h2>
        </div>

        <div class="row">
            <div class="story">
                <!-- <figure class="story__shape"> -->
                <!-- <img src="img/nat-8.jpg" alt="Person on a tour" class="story__img" /> -->

                <!-- <figcaption class="story__caption">
                        Mary Smith
                    </figcaption> -->
                <!-- </figure> -->
                <form action="">
                    <div class="story__text">
                        <!-- <h3 class="heading-tertiary u-margin-bottom-small">
                        I had the best week ever with my family
                    </h3>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Voluptates, vero. Architecto earum non hic!
                    </p> -->
                        <div class="form">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">Title</span>
                            </label>
                        </div>
                        <div class="form">
                            <input type="text" name="name" autocomplete="off" required />
                            <label for="name" class="label-name">
                                <span class="content-name">Description</span>
                            </label>

                        </div>

                    </div>
                    <input type='file' onchange="" class="" />
                    <div class="u-right-text u-margin-top-big">
                        <a href="#" class="btn-text">Sent &rarr; </a>
                    </div>


                    <!-- <input type="submit" value="sent" class="btn-text"> -->
                </form>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>