<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Management System</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/aos/css/aos.css">
  <link rel="stylesheet" href="css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="images/Group2.svg" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="images/itmslogo.svg" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Blog</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Team</a>
          </li>
          @if (Route::has('login'))
                <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            @auth
            <button class="btn btn-info" ><a href="{{ route('project.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Projects</a></button>
            @else
            <button class="btn btn-info" ><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></button>
            </li>
            @endauth
            @endif
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">ITMS Project Management <br>System.</h1>
      <h6 class="font-weight-normal text-muted pb-3">Welcome to the ITMS Project Management System – Your Central Hub for Efficient Software Development!.</h6>
      <div>
       <!-- <button class="btn btn-opacity-light mr-1">Get started</button>
        <button class="btn btn-opacity-success ml-1">Learn more</button>-->
      </div>
      <img src="images/Group171.svg" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="features-section" >
        <div class="content-header">
          <h2>Key Features</h2>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="images/Group12.svg" alt="" class="img-icons">
              <h5 class="py-3">Streamlined Project <br>Management</h5>
              <p class="text-muted">Manage all software projects seamlessly to ensure timely delivery and meet business requirements.</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="images/Group7.svg" alt="" class="img-icons">
              <h5 class="py-3">Team <br>Collaboration</h5>
              <p class="text-muted">Assign projects, track progress, and collaborate effortlessly within the ITMS development team.</p>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="images/Group5.svg" alt="" class="img-icons">
              <h5 class="py-3">Detailed <br>Reporting</h5>
              <p class="text-muted">Gain insights into project status, development progress, and overall system health.</p>
            </div>
          </div>
        </div>
      </section>     
      <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0">About ITMS <br>Department.</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted">The ITMS Department at UNITEN plays a crucial role in managing IT infrastructure and developing applications for various business units.</p>
              <p class="font-weight-medium text-muted">Explore the end-to-end process of software development, from project initiation to successful deployment.</p>
            </div>    
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
            <img src="images/Group1.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
            <img src="images/Group2.png" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
            <h3 class="m-0"> Project Management <br>Features.</h3>
            <div class="col-lg-9 col-xl-8 p-0">
              <p class="py-4 m-0 text-muted"><b>Efficient Project Assignment:</b> <br>Assign projects to lead developers and add additional developers as needed.</p>
              <p class="pb-2 font-weight-medium text-muted"><b>Comprehensive Project Information:</b> <br> Record essential project details, including system owner, project start and end dates, development methodology, and more.</p>
            </div>
              </div>
        </div>
      </section>          
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Meet the Team</h2>
            <h6 class="section-subtitle text-muted m-0">Meet our dedicated ITMS team, led by our experienced manager and supported by skilled developers.</h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"As the ITMS Manager, my role is to oversee the entire software development process, ensuring alignment with UNITEN's strategic goals and managing resources efficiently to deliver high-quality systems on time."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Lily Smith</h6>
                    <h6 class="customer-designation text-muted m-0"> ITMS Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"As the Lead Developer, I lead the technical aspects of projects, collaborating with the team to implement the best development practices and ensuring that our systems meet the highest standards of functionality and performance."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Lead Developer</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"Being a Senior Developer at ITMS, I bring extensive experience to the team, specializing in backend development. My role involves mentoring junior developers and contributing to the overall success of our projects."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Elisa Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Senior Developer</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face15.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"In my role as a Frontend Developer, I focus on creating intuitive and user-friendly interfaces for our software projects. I work closely with designers and backend developers to deliver seamless and visually appealing user experiences."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Chris Taylor</h6>
                    <h6 class="customer-designation text-muted m-0">Frontend Developer</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face16.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"As a Junior Developer, I'm excited to contribute my skills and learn from the experienced members of the ITMS team. My role involves coding, testing, and actively participating in the development of software solutions for UNITEN."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Raj Patel</h6>
                    <h6 class="customer-designation text-muted m-0">Junior Developer/h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="images/face1.jpg" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted">"As a Database Specialist, I ensure the integrity and efficiency of our databases. My role involves designing, implementing, and maintaining database structures to support the data needs of our software projects."</p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Database Specialist Developer</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="images/Group2.svg" alt="" class="pb-2">
            <div class="pt-2">
              <p class="text-muted m-0">ITMS@uniten.edu.my</p>
              <p class="text-muted m-0">+6017-6404064</p>
            </div>         
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Get in Touch</h5>
            <p class="text-muted">Have questions or need assistance? Reach out to our support team at</p>
            <form>
              <input type="text" class="form-control" id="Email" placeholder="Email id">
            </form>
            <div class="pt-3">
              <button class="btn btn-dark">Subscribe</button>
            </div>   
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Our Guidelines</h5>
            <a href="#"><p class="m-0 pb-2">Terms</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
            <a href="#"><p class="m-0 pt-1">Discover</p></a> 
          </div>
        </div>  
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">© 2024 ITMS Department, UNITEN. All rights reserved.<a href="https://www.bootstrapdash.com/" class="px-1">Bootstrapdash.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.min.js"></script>
  <script src="vendors/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="vendors/aos/js/aos.js"></script>
  <script src="js/landingpage.js"></script>
</body>
</html>