<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">


</head>
<body>

<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-4 pb-4">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt" style="font-size: 30px;"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Surat , Gujarat</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone" style="font-size: 30px;"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+91 8883288288</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open" style="font-size: 30px;"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>codecanvas2024@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 ">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html" style="color: #4caf50;">{ CODE CANVAS }</a>
                            </div>
                            <div class="footer-text">
                                <p>Our online editor boasts a code formatter for multiple languages, a typing test, quizzes with PDF downloads, and a convenient color picker, catering to diverse coding needs efficiently.</p>
                            </div>
                            <div class="footer-social-icon">
  <span>Follow us</span>
  <ul class="social-icon">
    <li><a href="#" class="bi bi-insta"><i class="fab fa-facebook-f" style="color: white;"></i></a></li>
    <li><a href="#" class="bi bi-twit"><i class="fab fa-twitter" style="color: white;"></i></a></li>
    <li><a href="#" class="bi bi-what"><i class="fab fa-whatsapp" style="color: white;"></i></a></li>
  </ul>
</div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="AboutUs.php">About us</a></li>
                                <li><a href="service.php">Our Services</a></li>
                                <li><a href="home.php?show_hero=true">Expert Team</a></li>
                                <li><a href="ContactUs.php">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <!-- <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane subscribebtn"></i></button>
                                </form>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2024, All Right Reserved <a href="#">Code Canvas</a></p>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

    // Check if the parameter 'show_hero' is set to 'true'
    if (getUrlParameter('show_hero') === 'true') {
        var heroSection = document.getElementById('heroSection');
        
        // Scroll to the hero section
        heroSection.scrollIntoView({ behavior: 'smooth' });
    }
</script>
</html>
