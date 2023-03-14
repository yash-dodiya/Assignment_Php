Skip to content
Search or jump to…
Pull requests
Issues
Codespaces
Marketplace
Explore
 
@yash-dodiya 
Darshantada10
/
TOPS-ASSIGNMENT
Public
Fork your own copy of Darshantada10/TOPS-ASSIGNMENT
Code
Issues
Pull requests
Actions
Projects
Security
Insights
TOPS-ASSIGNMENT/Manage Profile/index.html
@Darshantada10
Darshantada10 Add files via upload
Latest commit 6aa4ba4 on Oct 11, 2022
 History
 1 contributor
255 lines (249 sloc)  13.5 KB

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="new.css">
    </head>
    <body>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <body> 
          <div class="main-content">
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
              <div class="container-fluid">
               
                <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                  <div class="form-group mb-0">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                      </div>
                      <input class="form-control" placeholder="Search" type="text">
                    </div>
                  </div>
                </form>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                  <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                          <img alt="Image placeholder" src="profile.jpg">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                          <span class="mb-0 text-sm  font-weight-bold">Darshan Tada</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                      <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                      </div>
                      <a href="../examples/profile.html" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span> -->
                      </a>
                      <a href="../examples/profile.html" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>Settings</span>
                      </a>
                      <a href="../examples/profile.html" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>Activity</span>
                      </a>
                      <a href="../examples/profile.html" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>Support</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#!" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(bg.jpg); background-size: cover; background-position: center;">
              <!-- Mask -->
              <span class="mask bg-gradient-default opacity-8"></span>
              <!-- Header container -->
              <div class="container-fluid d-flex align-items-center">
                <div class="row">
                  <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hello Darshan</h1>
                    <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
                    <a href="#!" class="btn btn-info">Edit profile</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7 mb-3">
              <div class="row">
                <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                  <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                          <a href="#">
                            <img src="profile.jpg" class="rounded-circle">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                      <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                        <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                      </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                      <div class="row">
                        <div class="col">
                          <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                            <div>
                              <span class="heading">2000</span>
                              <span class="description">Friends</span>
                            </div>
                            <div>
                              <span class="heading">1000</span>
                              <span class="description">Photos</span>
                            </div>
                            <div>
                              <span class="heading">30000</span>
                              <span class="description">Comments</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center">
                        <h3>
                          Darshan Tada<span class="font-weight-light">,22</span>
                        </h3>
                        <div class="h5 font-weight-300">
                          <i class="ni location_pin mr-2"></i>Ahmedabad,Gujarat,India
                        </div>
                        <div class="h5 mt-4">
                          <i class="ni business_briefcase-24 mr-2"></i>CEO of Thunder Pvt.Ltd. - CEO of Thunder Restaurants                        </div>
                        <div>
                          <i class="ni education_hat mr-2"></i>Founder and CEO of World's No.1 Social Media Platform
                        </div>
                        <hr class="my-4">
                        <p>I Thought About It Over And Over.That's Why I Don't Want Regrets.I Don't Want To Think,<br>"I SHOULD HAVE DONE IT"</p>
                        <a href="#">Show more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                  <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h3 class="mb-0">My account</h3>
                        </div>
                        <div class="col-4 text-right">
                          <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <form>
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-username">Username</label>
                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="darshan_tada">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="tadadarshan@gmail.com">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-first-name">First name</label>
                                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Darshan">
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-last-name">Last name</label>
                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Tada">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="pl-lg-4">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="MALABAR COUNTY-1,S.G. Highway " type="text">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="AHMEDABAD">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group focused">
                                <label class="form-control-label" for="input-country">Country</label>
                                <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="INDIA">
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="form-group">
                                <label class="form-control-label" for="input-country">Postal code</label>
                                <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="382481">
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="pl-lg-4">
                          <div class="form-group focused">
                            
                            <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">I Thought About It Over And Over.That's Why I Don't Want Regrets.I Don't Want To Think,
                              "I SHOULD HAVE DONE IT"</textarea>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6 m-auto text-center">
                <div class="copyright">
      
                </div>
              </div>
            </div>
          </footer>
        </body>
        
        <script src="" async defer></script>
    </body>
</html>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
TOPS-ASSIGNMENT/index.html at main · Darshantada10/TOPS-ASSIGNMENT