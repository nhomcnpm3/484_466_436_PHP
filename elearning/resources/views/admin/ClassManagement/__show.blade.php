
    @extends('layouts.masteradmin')

    @section('title', 'Admin')
    
    
    @section('link')
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
  @endsection
  @section('content')
  <div class="page-body">
    <div class="container-fluid">
      <div class="page-header">
        <div class="row">
          <div class="col-sm-6">
            <h3>project list</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">dashboard</li>
              <li class="breadcrumb-item active">project list</li>
            </ol>
          </div>
          <div class="col-sm-6">
            <!-- Bookmark Start-->
            <div class="bookmark">
              <ul>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                      <input type="text" placeholder="Search..">
                    </div>
                  </form>
                </li>
              </ul>
            </div>
            <!-- Bookmark Ends-->
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row project-cards">
        <div class="col-md-12 project-list">
          <div class="card">
            <div class="row">
              <div class="col-md-6 p-0">
                <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>All</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Doing</a></li>
                  <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Done</a></li>
                </ul>
              </div>
              <div class="col-md-6 p-0">                    
                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> <i data-feather="plus-square"> </i>Create New Project</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="tab-content" id="top-tabContent">
                <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                  <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                  <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-primary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-primary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-primary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                  <div class="row">
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Universal admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">24</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">40</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+3 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-primary">Done</span>
                        <h6>Endless admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Themeforest, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">12 </div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">5</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">7</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+10 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>70% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6">
                      <div class="project-box"><span class="badge badge-secondary">Done</span>
                        <h6>Poco admin Design</h6>
                        <div class="media"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                          <div class="media-body">
                            <p>Envato, australia</p>
                          </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="row details">
                          <div class="col-6"><span>Issues </span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Resolved</span></div>
                          <div class="col-6 font-secondary">40</div>
                          <div class="col-6"> <span>Comment</span></div>
                          <div class="col-6 font-secondary">20</div>
                        </div>
                        <div class="customers">
                          <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                              <p class="f-12">+2 More</p>
                            </li>
                          </ul>
                        </div>
                        <div class="project-status mt-4">
                          <div class="media mb-0">
                            <p>100% </p>
                            <div class="media-body text-end"><span>Done</span></div>
                          </div>
                          <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
  <!-- footer start-->
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 footer-copyright">
          <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>

    @endsection
    @section('script')
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/height-equal.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection