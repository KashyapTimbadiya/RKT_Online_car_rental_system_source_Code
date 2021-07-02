<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Document</title>
    <!-- js animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    * {
        box-sizing: border-box;
    }

    .home li {
        color: snow;
    }

    .box1 {
        width: 100%;
        height: 13vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        font-weight: bold;
        background-color: #f9ca24;
        margin-top: 2.5%;
    }

    .box2 {
        width: 100%;
        height: 13vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2rem;
        font-weight: bold;
        background-color: #f9ca24;
    }

    .main {
        padding: 1%;
        background-color: black;
        display: flex;
        width: 100%;
    }

    .main2 {
        background-color: black;
        display: flex;
        width: 100%;
    }

    .main-img img,
    .main-img2 img {
        height: 40vh;
        width: 30vw;
    }

    .main-img2 {
        padding: 1%;
    }

    .main-text {
        color: white;
        display: flex;
        align-items: center;
        margin-left: 1%;
    }

    .main-text2 {
        color: white;
        font-size: 0.9rem;
    }

    @media only screen and (max-width: 950px) {
        .main-text {
            margin-left: 2%;
        }

        .main-text2 {
            font-size: 0.8rem;
            margin-left: 2%;
        }
    }

    @media only screen and (max-width: 760px) {
        .main2 {
            display: block;
        }

        .main-img2 img {
            height: 35vh;
            width: 50vw;
        }
    }

    @media only screen and (max-width: 630px) {
        .main-text {
            margin-left: 3%;
            font-size: 0.8rem;
        }

        .main-img img {
            height: 35vh;
            width: 35vw;
        }
    }

    @media only screen and (max-width: 420px) {
        .main-text {
            margin-left: 5%;
            font-size: 0.6rem;
        }

        .main-text2 {
            margin-left: 5%;
            font-size: 0.8rem;
        }

        .main-img img {
            height: 30vh;
            width: 35vw;
        }

        .main-img2 img {
            height: 30vh;
            width: 65vw;
        }
    }

    .rent-car {

        display: block;
    }

    .t1 h4 {
        color: #f9ca24;
    }
    </style>
</head>

<body style='font-family: Verdana'>;
    <div>
        <?php include 'navigation_bar.php'; ?>
    </div>
    <?php
    echo "<div class='buy-car'>
      <div class='box1'>Car On Rent</div>
      <div class='main'>
        <div class='main-img' data-aos='flip-right'>
          <a href='rental_agreement.php'><img src='photos/rental.jpg' /></a>
        </div>
        <div class='main-text'>
          <li>
            IF YOU ARE INTERESTED IN OUR RENTALCAR CLICK ON PHOTO AND READ
            AGREEMENT.
          </li>
        </div>
      </div>
    </div>

    <div class='rent-car'>
      <div class='box2'>Buy car</div>
      <div class='main2'>
        <div class='main-img2' data-aos='flip-right'>
          <a href='buy_form.php'><img src='photos/cardeal.jpg' /></a>
        </div>
        <div class='main-text2'>
        <div>
            <li>
            We have just started selling new cars.  So if you want to buy a new car, you can click on the photo and name your favorite car in that form and you will get a call from the RKT branch near you.
            </li>
          <div class='t1'>
            <h4>
              <b><u>Book Appointment :-</u></b>
            </h4>
            <p>
              <li>
                Tell us about car and book an appointment to your nearest RKT
                branch.
              </li>
            </p>
          </div>
          <div class='t1'>
            <h4>
              <b><u>Free Car Inspection :-</u></b>
            </h4>
            <p>
              <li>
                Visit branch for free car inspection by our experts and get
                final offer.
              </li>
            </p>
          </div>
          <div class='t1'>
            <h4>
              <b><u>Meet Genuine Buyers :-</u></b>
            </h4>
            <p>
              <li>
                Our exparts will shortlist genuine buyers after proper
                screening, while you sit back.
              </li>
            </p>
          </div>
          <div class='t1'>
            <h4>
              <b><u>Sell Car At Your Prices :-</u></b>
            </h4>
            <p>
              <li>
                Once you accept our offer, we will transfer money instantly and
                take care of RC transfer for free!
              </li>
            </p>
          </div>
          </div>
        </div>
      </div>
    </div>
    ";
    ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 120,
        duration: 800
    });
    </script>
</body>

</html>