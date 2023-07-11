<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/boxicons.min.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nk Design</title>
  </head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- -------------NAVBAR---------------- -->

    <nav class="top-navbar" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p>
                        <i class='bx bxs-envelope'></i>
                        <span><a href="">eduvation@gmial.com</a></span>
                    </p>
                    <p>
                        <i class='bx bxs-phone-call'></i>
                        <span>9876543210,</span>
                    </p>
                    <p>
                        <i class='bx bxl-whatsapp'></i>
                        <span>9876543210</span>
                    </p>
                    <div>
                    </div>
                </div>
                
                <div class="col-auto">
                    <div class="social-links">
                        <a href="#"><i class='bx bxs-envelope'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- -------------MAIN NAVBAR---------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Nk Design<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-bs-toggle="modal" data-bs-target="#aboutModal">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio" data-bs-toggle="modal" data-bs-target="#portfolioModal">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-bs-toggle="modal" data-bs-target="#gallerytModal">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery" data-bs-toggle="modal" data-bs-target="#contactleModal">Contact Us</a>
                    </li>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item dropdown">
                            <?php
                            if (isset($_SESSION['login'])) { ?>
                            <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user mr-2"></i>Admin</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                            <?php } else { ?>
                            <a href="./login.php" class="nav-link">Admin Login</a>
                            <?php } ?>
                        </li>
                    </ul>
                </ul>
                <!-- <a href="#" class="btn btn-brand ms-lg-3" data-bs-toggle="modal" data-bs-target="#contactleModal">Contact Us</a> -->
            </div>
        </div>
    </nav>


    <!-- ----------SLIDER------------- -->
    <div class="slider-wrapper owl-carousel owl-theme" id="hero-slider">
        <div class="slide1 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">Welcome</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                        <a href="#" class="btn btn-brand ms-md-3"  data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide2 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">njbkekjbke</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide3 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">njbkekjbke</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide4 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">njbkekjbke</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide5 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">njbkekjbke</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide6 min-vh-100 bg-cover d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-uppercase">njbkekjbke</h6>
                        <h1 class="display-2 my-3">Design Driven for <br>Professionnals</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- -------------SERVICES------------ -->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 intro text-center">
                    <!-- <h6>OUR SERVICES</h6> -->
                    <h1>Popular Different Types Of Mehndi Designs</h1>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Arabic Mehndi Design.</h5>
                        <p>Arabic mehndi designs are modern but at the same time unique. This type of mehndi involves a mix of floral artwork 
                            along with geometric patterns. This results in bold, beautiful designs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Indian Mehndi Design</h5>
                        <p>Indian mehndi designs can be worn not only during bridal ceremonies but it also complements a salwar kameez or a lehenga.
                            This mehndi design consists of paisleys and meshwork.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Moroccan Mehndi Design</h5>
                        <p>Moroccan mehndi design is very famous in middle
                             east gulf countries. This type of design is similar to Arabic mehndi designs however, they are simpler than that.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Jewellery Mehndi Design</h5>
                        <p>The type of mehndi is made to look like jewellery on your hands. 
                            It is simple and minimalistic But it also looks elegant.This type of mehndi is trending among new brides-to-be.   </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Tattoo Mehndi Design</h5>
                        <p>Usually, people are scared of getting tattoos mainly because of the needle, 
                            the pain and in some cases the infection. However, when you use mehndi there is no such thing.   </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-box">
                        <h5>Punjabi Mehndi Design</h5>
                        <p>Punjabi mehndi designs are quite unique. They represent the culture very well. 
                            Most of the designs in Punjabi mehndi include circles, loops, spirals and so on.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- ----------ABOUT US------------- -->

    <section id="design">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-3">
                    <div class="design-box">
                        <img src="./assets/images/illustration-mehndi-ornament_1217-813.avif" alt="">
                        <h4>Baraat & Figurines Mehndi Designs</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="design-box">
                        <img src="./assets/images/illustration1.webp" alt="">
                        <h4>Personalised, Unique Mehndi Designs</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="design-box">
                        <img src="./assets/images/illustration2.jpg" alt="">
                        <h4>Simple & Minimalist Mehndi Designs</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="design-box">
                        <img src="./assets/images/illustration3.jpg" alt="">
                        <h4>Traditional Mehendi Designs</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-dark">
        <img src="./assets/images/Mehendi-Design-PNG-Image.png" class="card-img" alt="...">
    </div>

    <!-- -------------COUNTING------------ -->

    <!-- <section id="milestone" class="bg-cover">
        <div class="container">
            <div class="row gy-4 text-center justify-content-center">
                <div class="col-lg-2 col-sm-6">
                    <div class="display-4">465</div>
                    <p class="mb-0">vniuiur</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="display-4">488</div>
                    <p class="mb-0">vniuiur</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="display-4">124</div>
                    <p class="mb-0">vniuiur</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="display-4">425</div>
                    <p class="mb-0">vniuiur</p>
                </div>
            </div>
        </div>
    </section> -->


    <!-- -------------OUR TEAM WORK------------ -->

    <section id="services" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 intro text-center">
                    <h6>OUR TEAM WORK</h6>
                    <h1>What we provide?</h1>
                    <p>An organization’s best “product” is its employees. As the person reading this, it’s your job to keep those employees
                        motivated and inspired 24×7 and encourage get them to get work done, together.
                        Don’t worry, we have decided to lend a hand and curated a list of some of the best teamwork quotes out there. Feel free to email these
                        teamwork quotes in your internal newsletters, your slack group or heck, print these out and place it on your office walls. Go, get’em, team!
                    </p>
                </div>
            </div>
        </div>
        <div id="project-slider" class="owl-theme owl-carousel">
            <div class="project">
                <img src="./assets/images/artist1.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist2.jpeg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist3.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist4.jpeg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist5.jpg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist6.png" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist7.jpeg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
            <div class="project">
                <img src="./assets/images/artist9.jpeg" alt="">
                <div class="overlay">
                    <div class="content">
                        <h1></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- -------------OUR TEAM------------ -->

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12 intro text-center">
                    <h6>OUR TEAM </h6>
                    <h1>Our Team of Big Thinkers</h1>
                </div>
            </div>
        </div>
        <section id="reviews" class="bg-cover">
            <div class="owl-carousel owl-theme" id="reviews-slider">
                <div class="reviews">
                    <img src="./assets/images/ceo.jpg" alt="">
                    <h1>Shaista Alfaj Khan</h1>
                    <h3>Nk Design<span style="color:#ff4d29;">.</span></h3>
                    <h5>CEO</h5>
                </div>
                <div class="reviews">
                    <img src="./assets/images/v.png" alt="">
                    <h1>Shravi Yadav</h1>
                    <h3>Nk Design<span style="color:#ff4d29;">.</span></h3>
                    <h5>MANAGER</h5>
                </div>
                <div class="reviews">
                    <img src="./assets/images/v.png" alt="">
                    <h1>Pooja singh</h1>
                    <h3>Nk Design<span style="color:#ff4d29;">.</span></h3>
                    <h5>MARKETING MANAGEMENT</h5>
                </div>
                <div class="reviews">
                    <img src="./assets/images/v.png" alt="">
                    <h1>Ankita Yadav</h1>
                    <h3>Nk Design<span style="color:#ff4d29;">.</span></h3>
                    <h5>TEAM  LEADER</h5>
                </div>
                <div class="reviews">
                    <img src="./assets/images/v.png" alt="">
                    <h1>Radhika shukla</h1>
                    <h3>Nk Design<span style="color:#ff4d29;">.</span></h3>
                    <h5>DESIGNER</h5>
                </div>
            </div>
        </section>
    </section>

    <!-------------- DESIGN ----------------->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 intro text-center">
                    <h6>Design</h6>
                    <h1>Letest Design</h1>
                    <P>Mehndi, also known as henna, is a beautiful art form that has been around for centuries. It is very famous in India and other eastern countries.
                         But, nowadays, we can see that many show interest in mehndi owing to the gorgeous design and looks it gives to any individual.</P>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="./assets/images/2021.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title">Letest Design</h3>
                                    <!-- <h4><span style="color:#ff4d29;">-</span> 2021</h4> -->
                                    <p class="card-text">This is a wider card with supporting text below as a natural </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="./assets/images/2022.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title">Letest Design</h3>
                                    <!-- <h4><span style="color:#ff4d29;">-</span> 2022</h4> -->
                                    <p class="card-text">This is a wider card with supporting text below as a natural </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="./assets/images/2023.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h3 class="card-title">Letest Design</h3>
                                    <!-- <h4><span style="color:#ff4d29;">-</span> 2023</h4> -->
                                    <p class="card-text">This is a wider card with supporting text below as a natural </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------- FOOTER ----------------->

    <footer>
       <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="navbar-brand">Nk Design<span>.</span></a>
                        <p>kdsjkerinvkerj We aims at offering all our students a broad kdsjkerinvkerj
                            We aims at offering all our students a broad kdsjkerinvkerjWe aims at offering all our students a broad
                            kdsjkerinvkerj We aims at offering all our students a broad kdsjkerinvkerj
                            We aims at offering all our students a broad kdsjkerinvkerjWe aims at offering all our students a broad
                        
                        </p>
                        <div class="social-links">
                            <a href="#"><i class='bx bxs-envelope'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-whatsapp'></i></a>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><hr>
        <div class="foter-bottom py-3">
            <div class="container">
                <p class="mb-0">Copyright@2023. All right Reserved</p>
            </div>
        </div>
    </footer>

    <!-- /////////////--PAGELINK--/////////////// -->

    <!-- ----------CONTACT US------------ -->
    <div class="modal fade" id="contactleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-4 bg-cover">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.558918177487!2d83.60973981413368!3d26.822169783166583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3993e36bab016533%3A0x2ab08a149232acc3!2sGS%20WORLD%20SCHOOL!5e0!3m2!1sen!2sin!4v1674801100740!5m2!1sen!2sin" 
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-lg-8">
                            <form action="" method="" class="row p-lg-4 gy-3">
                                <h1>Contact Us</h1>
                                <p>kdsjkerinvkerj We aims at offering all our students a broad kdsjkerinvker We aims 
                                    at offering all our students a broad kdsjkerinvkerjj ?</p>
                                <table style="width:100%" class="address">
                                    <tr class="add_ress">
                                        <td class="row p-lg-4">
                                            <h4 class="Head_ing1">Nk Design<span style="color: #ff4d29;">.</span></h4><hr>
                                            <p>Ahirauli Bazar Post-Ahirauli Bazar Dist-Kushinagar,</p><hr>
                                            <p>UTTAR PRADESH, Pin Code- 274149, INDIA</p><hr>
                                            <p>Email Id :- nkdesign@gmial.com</p><hr>
                                            <p>Contact numbers :- +91 9876543210, 9876543210</p><hr>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------ENQUIRY--------- -->

    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-lg-4 bg-cover" style="background-image: url(./assets/images/download.jpeg);"></div>
                        <div class="col-lg-8">
                            <form action="" method="" class="row p-lg-4 gy-3">
                                <h1>Get in touch</h1>
                                <p>kdsjkerinvkerj We aims at offering all our students a broad kdsjkerinvker We aims 
                                    at offering all our students a broad kdsjkerinvkerjj ?</p>
                                <div class="col-lg-6">
                                    <label for="exampleFormControlInput1" class="form-label">Frist Name <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Shravi">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Yadav">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleFormControlInput1" class="form-label">Phone Number<span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="0000000000">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleFormControlInput1" class="form-label">Email I'd<span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="shraviyadav@gmial.com">
                                </div>
                                <div class="col-lg-12">
                                    <label for="message" class="form-lable">Message<span style="color:red;">*</span></label>
                                    <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Comments"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="button" class="btn btn-brand">Send Message</button>
                                    <button type="button" class="btn btn-brand" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------ABOUT US--------- -->

    <!-- <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-image: url(./assets/images/1.webp);">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="text"><u>About Us</u></h2>
                                <h2 class="about1 my-3">Nk. Desing - desing faster.Collaboration Better<br>(Prototype,,Desing,Collaborate and Desing System all in Nk. Design)</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>About Us</h1>
                                <section class="#" style="background: linear-gradient(to bottom, rgba(146, 148, 158, 0.8), rgba(91, 94, 122, 0.8)), url(./assets/images/1.webp)">
                                    <div class="container">
                                        <p style="text-align: center; font-size:32px; color:white; font-weight:bold;">Nk Design<span style="color: #ff4d29;">.</span>  :-Desing faster.Collaboration Better!</p>
                                        <p style="text-align: center; font-size:32px; color:white; font-weight:bold;">(Prototype,Desing,Collaborate and Desing System all in Nk Design<span style="color: #ff4d29;">.</span>)</p>                                        <p></p>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------PORTFOLIO--------- -->

    <div class="modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Get in Portfolio</h1>
                                <section class="#" style="background-color: lightgray;">
                                    <div class="container">
                                        <p>Nk Design<span style="color: #ff4d29;">.</span>  :-Your bridal mehendi design is one of the most essential parts of your mehendi event. Depending on what style you like, every bride's mehendi design will be different. So why not create a list of some stunning designs for you? Right from floral jaal mehendi designs to rose motifs, we got it all for you!</p>
                                        <p>But for now here is our selection of some of the more unique bridal mehndi designs we spotted- some for the girls who love to go all out and others for the girls who like to keep it on the DL.</p>
                                        <p></p>
                                    </div>
                                </section>
                                <div class="achievment">
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/rose2.webp" alt="About" class="img-fluid">
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <h2 class="Hear_tiest"><u></u> <br>Rose Motif Mehendi !</h2>
                                                <div>
                                                    <p class="pr-5">After lotuses, roses are taking over mehndi designs and how! Rose mehndi designs are delicate and so beautiful, allowing brides to include them in small parts as well as statement rose mehandi designs. We love how there are different styles of rose mehndi designs that can be the best mehndi design for bridal!</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                <div class="col-lg-6">
                                                    <h2 class="Hear_tiest"><u></u> <br>White Mehndi Designs !</h2>
                                                    <div>
                                                        <p class="pr-5">Looking for something unique? Opt for these gorgeous white hued best mehndi designs for bride. These are out of the box, don’t take as much time as your traditional henna and also have no drying time necessary. Plus, you can get these made one day prior too – so you don’t have to worry about the mehendi colour deepening or no! 
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 py-5">
                                                    <img src="./assets/images/white1.webp" alt="About" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/mehandi-artist2.webp" alt="About" class="img-fluid">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h2 class="Hear_tiest"><u></u> <br>Symmetrical Mehandi Designs !</h2>
                                                        <div>
                                                            <p class="pr-5">For brides who are perfectionists, nothing can make you happier than symmetrical mehandi designs. Do let your bridal mehendi artist know beforehand if you are looking for this specific symmetrical best mehendi designs so that they have the designed pre-planned!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6">
                                                        <h2 class="Hear_tiest"><u></u> <br>Full Mehendi Stain !</h2>
                                                        <div>
                                                            <p class="pr-5">This is a new and trending style of mehndi designs where you let the mehendi stain be a major part of your mehandi designs. This not only gives your hands a glorious colour but also reduces the application time as the rest of the design is usually simple!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/toral1.webp" alt="About" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/design1.webp" alt="About" class="img-fluid">
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <h2 class="Hear_tiest"><u></u> <br>Favourite Shows & Movies !</h2>
                                                <div>
                                                    <p class="pr-5">You can chose to have your favourite show or movie etched on your bridal mehendi for a memory of a lifetime! Like this bride did with SATC!</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                <div class="col-lg-6">
                                                    <h2 class="Hear_tiest"><u></u> <br>Two Tone Mehendi !</h2>
                                                    <div>
                                                        <p class="pr-5">Another new trending and best mehndi designs for bride is the dual tone or two tone mehendi. Here your mehendi is applied in two different intervals so that the mehendi colour is in two different shades. Love the idea and the glorious result!</p> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 py-5">
                                                    <img src="./assets/images/to2.webp" alt="About" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/SYMETRICAL.webp" alt="About" class="img-fluid">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h2 class="Hear_tiest"><u></u> <br>Statement Mehendi Designs !</h2>
                                                        <div>
                                                            <p class="pr-5">Fun and statement-like, these designs are absolutely gorgeous for brides who are looking for something unique.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6">
                                                        <h2 class="Hear_tiest"><u></u> <br>Blouse Mehandi Designs !</h2>
                                                        <div>
                                                            <p class="pr-5">Want to go a step ahead of hand mehendi designs? Currently, the trending style and best mehndi design for bridal is the blouse mehendi. This is where a part of your blouse or outfit is actually just mehendi – accentuating your look. While this mehendi
                                                                 style may not be to everyone’s liking, if you want to do something unique for your mehendi, this is a great idea!</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/Blouse Mehandi Designs1.webp" alt="About" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <h1>Baraat & Figurines Mehndi Designs</h1>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                <div class="col-lg-6">
                                                    <h2 class="Hear_tiest"><u></u> <br>White Mehndi Designs !</h2>
                                                    <div>
                                                        <p class="pr-5">Looking for something unique? Opt for these gorgeous white hued best mehndi designs for bride. These are out of the box, don’t take as much time as your traditional henna and also have no drying time necessary. Plus, you can get these made one day prior too – so you don’t have to worry about the mehendi colour deepening or no! 
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 py-5">
                                                    <img src="./assets/images/white1.webp" alt="About" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="py-5">
                                        <div class="container">
                                            <div class="row text-justify">
                                                    <div class="col-lg-6 py-5">
                                                        <img src="./assets/images/mehandi-artist2.webp" alt="About" class="img-fluid">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h2 class="Hear_tiest"><u></u> <br>Symmetrical Mehandi Designs !</h2>
                                                        <div>
                                                            <p class="pr-5">For brides who are perfectionists, nothing can make you happier than symmetrical mehandi designs. Do let your bridal mehendi artist know beforehand if you are looking for this specific symmetrical best mehendi designs so that they have the designed pre-planned!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <a href="#" class="btn btn-brand mx-md-0">View All</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------GALLERY--------- -->

    <div class="modal fade" id="gallerytModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <h1>Get in Gallery</h1>
                                    <p>kdsjkerinvkerj We aims at offering all our students a broad kdsjkerinvker We aims 
                                        at offering all our students a broad kdsjkerinvkerjj ?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JQuery -->
    <script src="./javascript/jquery.min.js"></script>
    <script src="./javascript/bootstrap.bundle.min.js"></script>
    <script src="./javascript/owl.carousel.min.js"></script>
    <script src="./javascript/app.js"></script>
  </body>
</html>