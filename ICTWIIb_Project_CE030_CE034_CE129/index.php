<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- linking with my css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- fontawasum icons -->
    <script src="https://kit.fontawesome.com/5d56134312.js" crossorigin="anonymous"></script>

    <!-- js animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>First page</title>
</head>

<body id="Home">
    <!-- navigation bar -->
    <!-- navigation bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning ms-4 fw-bold logo-font fs-4" href="#">RKT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse space-evenly" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-font">
                    <li class="nav-item">
                        <a class="nav-link text-warning active" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light ms-1" href="#Offer">Offer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light ms-1" href="#Sells">Sells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light ms-1" href="#Contact">Contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav nav-font">
                    <a href="signin.php"><button class="btn btn-warning ms-lg-5">sign in</button></a>
                </ul>
                <ul class="navbar-nav nav-font">
                    <a href="signup.php"><button class="btn btn-light ms-lg-1">sign up</button></a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- text -->
    <!-- text -->

    <section class="container1">
        <div class="container3" data-aos="slide-down">
            <div class="comname">RKT</div>
            <div class="welcome">#1 Car Rental Service</div>
        </div>
    </section>

    <!-- working information -->
    <!-- working information -->

    <div class="container2">
        <div class="text1 text-center fs-1 fw-bold mt-2" data-aos="slide-up">How We Works</div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-right">
                    <div class="card text-center">
                        <div class="card-header bg-primary text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-car fa-4x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-primary">Select a car</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="">
                    <div class="card text-center">
                        <div class="card-header bg-success text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-map-marked-alt fa-4x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-success">Select a locationn</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-left">
                    <div class="card text-center">
                        <div class="card-header bg-warning text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-rupee-sign fa-4x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-warning">Pay amount</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offer section -->
    <!-- offer section -->

    <div class="container4" id="Offer">
        <section>
            <div class="text1 text-center fs-1 fw-bold mt-2" data-aos="slide-up">Offers</div>

            <div class="card-group ms-5 mt-2 me-5">
                <div class="card mt-1 border border-dark border border-dark" data-aos="slide-right">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 fas fa-gas-pump fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Free Fuel</h5>
                            <p class="card-text">
                                Never need to pay for fuel. If you need extra fuel just fill
                                up and keep the receipt, we will refund the amount.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 fas fa-award fa-2x me-2 fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Tax included</h5>
                            <p class="card-text">
                                The hourly price includes Taxes & Insurance. No hidden
                                charges! Dosis amet consectua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark" data-aos="slide-left">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 fas fa-money-bill-wave-alt fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Refund</h5>
                            <p class="card-text">
                                We take a small refundable deposit of $5,000. It will take
                                5‐15 days before the refund reflects in your account.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group ms-5 me-5">
                <div class="card mt-1 border border-dark" data-aos="slide-right">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 fas fa-scroll fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">All India Permit</h5>
                            <p class="card-text">
                                Go anywhere. Our cars have all‐India permits. Just remember to
                                pay state tolls and taxes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 far fa-clock fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">24/7 Road Assistence</h5>
                            <p class="card-text">
                                You drive to adventures, we get it. We and our roadside
                                assistance partners are available around the clock.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark" data-aos="slide-left">
                    <div class="card-body">
                        <div>
                            <i class="mt-1 fas fa-house-user fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Door step delivery</h5>
                            <p class="card-text">
                                Get your car delivered to your doorstep as well as picked up
                                once you are done lorem rupees.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-group ms-5 me-5">
                <div class="card mt-1 border border-dark" data-aos="slide-right">
                    <div class="card-body">
                        <div>
                            <i class="fas fa-male fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Personal driver</h5>
                            <p class="card-text">
                                Go anywhere. Our cars have all‐India permits. Just remember to
                                pay state tolls and taxes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark">
                    <div class="card-body">
                        <div>
                            <i class="fas fa-hand-holding-usd fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Best prices</h5>
                            <p class="card-text">
                                Our company has best cars in best prices. Lorem ipsum dolor
                                sit amet. Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mt-1 border border-dark" data-aos="slide-left">
                    <div class="card-body">
                        <div>
                            <i class="fas fa-handshake fa-3x"></i>
                        </div>
                        <div class="ms-4">
                            <h5 class="card-title">Quality Guarantee</h5>
                            <p class="card-text">
                                We are assured that our cars give you best experience. Lorem
                                ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Information about sells -->
    <!-- Information about sells -->

    <div class="container5 mt-3" id="Sells">
        <div class="text1 text-center fs-1 fw-bold mt-2" data-aos="slide-up">Our states</div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="zoom-in">
                    <div class="card text-center">
                        <div class="card-header bg-danger text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-heart fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h5 class="display-5">4789</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-danger">Our customers</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in">
                    <div class="card text-center">
                        <div class="card-header bg-success text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-car fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h5 class="display-5">245</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-success">Total cars</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in">
                    <div class="card text-center">
                        <div class="card-header bg-warning text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-flag fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h5 class="display-5">22,350</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-warning">Total KM</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in">
                    <div class="card text-center">
                        <div class="card-header bg-primary text-white">
                            <div class="row">
                                <div class="col">
                                    <i class="far fa-comments fa-4x"></i>
                                </div>
                                <div class="col">
                                    <h5 class="display-5">1234</h5>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-dark">
                            <h3 class="text-primary">Query solved</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq section -->
    <!-- faq section -->

    <div class="container7 mt-4">
        <div class="text1 text-center fs-4 mt-2" data-aos="slide-up">See what people ask to us</div>
        <div class="text1 text-center fs-1 fw-bold mt-2 mb-3" data-aos="slide-up">FAQs</div>

        <div class="container6">
            <div class="mini-container1" data-aos="fade-right">
                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>What is RKT.com?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i>RKT is an online service community that offers auto
                        enthusiasts a friendly home where they can find their dream car.
                    </p>
                </div>
                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>
                        How frequently is RKT updated?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i>We update our site regularly in month.
                        so that you can eassily use it's features and feel userfriendly experience.
                    </p>
                </div>

                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>
                        How is RKT content organized?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i>RKT.com consists of four sub-categories --New Car
                        Details, New Car Search By Make, Vehicle Type and Price Range, Dealer Details and Latest Car
                        Details.
                    </p>
                </div>
            </div>
            <div class="mini-container2" data-aos="fade-left">
                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>Which topics can be found on RKT.com?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i> RKT.com features latest car news, car photos, all car
                        model detailed specification , photo galleries, classics, videos and more.
                    </p>
                </div>
                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>
                        what you do....Why do you do?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i>Because we are crazy passionate about cars and want to
                        share that love with as many people as possible.
                    </p>
                </div>
                <div class="bor12345">
                    <p>
                        <i class="fab fa-quora fa-lg me-2"></i>
                        How do I access RKT.com?
                    </p>
                    <p class="color-faq">
                        <i class="fas fa-arrow-right me-3"></i>selecting cars on our website is easier and faster. Just
                        go to our home page and decide how you would like to search.You can specify several
                        criteria at once.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- about us and contact us -->
    <!-- about us and contact us -->

    <div class="container8" id="Contact">
        <div class="about-us" data-aos="zoom-in">
            <div class="text1 fs-2 fw-500 mt-2 mb-3">About us</div>
            <div class="text-about">
                RKT.com is India's leading car search venture that helps users buy cars that are right for them. Its
                website carry rich automotive content such as expert reviews, detailed specs and prices, as well as
                videos and pictures of all car brands and models available in India. We have 25+ branches in India and
                48+ branches in all over the world. Also we have started selling cars. You can book car and when it is
                available we will inform you.
            </div>
            <div class="about-logo">
                <p class="fw-bold fs-1 logo-font">RKT</p>
            </div>
        </div>
        <div class="contact-us" data-aos="zoom-in">
            <div class="card bg-dark">
                <div class="text1 fs-2 fw-500 mt-2 mb-3">Contact info</div>
                <ul class="list-group list-group-flush bg-dark">
                    <li class="list-group-item bg-dark">
                        <i class="fas fa-user-friends fa-2x me-3 text-warning"></i>
                        <span class="fs-5 text-warning">RKT</span>
                    </li>
                    <li class="list-group-item bg-dark">
                        <i class="fas fa-mobile fa-2x me-3 text-warning"></i>
                        <span class="fs-5 text-warning">8866512570</span>
                    </li>
                    <li class="list-group-item bg-dark">
                        <i class="fas fa-map-marker-alt fa-2x me-3 text-warning"></i>
                        <span class="fs-5 text-warning">Dharmsinh Desai University, Nadiad, Kheda ,Gujarat</span>
                    </li>
                    <li class="list-group-item fa-2x text-warning bg-dark">
                        <div class="">
                            <a href="https://www.facebook.com/romin.dhandhukiya.3"><i
                                    class="fab fa-facebook social-icon1 me-4"></i></a>
                            <a href="https://www.instagram.com/accounts/login/"><i
                                    class="fab fa-instagram social-icon2 me-4"></i></a>
                            <a href="mailto:dobariyatejas15@gmail.com"><i
                                    class="far fa-envelope social-icon3 me-4"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- footer -->
    <!-- footer -->

    <footer class="copy">
        <div class="card-footer text-center fs-5">
            Copyright &copy; rkt@carrental.com 2020-2021
        </div>
    </footer>

    <!--aos data  -->
    <!--aos data  -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 120,
        duration: 800
    });
    </script>
</body>

</html>