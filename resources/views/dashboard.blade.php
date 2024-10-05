<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                    fill="#7367F0" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                    fill="#161616" />
                  <path
                    opacity="0.06"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                    fill="#161616" />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                    fill="#7367F0" />
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">

            <li class="menu-item">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div>Dashboard</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div>Tamu</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div>Ucapan</div>
              </a>
            </li>

            <!-- Misc -->
            <li class="menu-header small">
              <span class="menu-header-text">Misc</span>
            </li>
            <li class="menu-item">
              <a href="https://pixinvent.ticksy.com/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons ti ti-lifebuoy"></i>
                <div>Bantuan</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                      </a>
                    </li>

                    <li>
                      <div class="d-grid px-2 pt-2 pb-1">
                        <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                          <small class="align-middle">Logout</small>
                          <i class="ti ti-logout ms-2 ti-14px"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>


          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row g-6 mb-6">
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span class="text-heading">Session</span>
                          <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">21,459</h4>
                            <p class="text-success mb-0">(+29%)</p>
                          </div>
                          <small class="mb-0">Total Users</small>
                        </div>
                        <div class="avatar">
                          <span class="avatar-initial rounded bg-label-primary">
                            <i class="ti ti-users ti-26px"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span class="text-heading">Paid Users</span>
                          <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">4,567</h4>
                            <p class="text-success mb-0">(+18%)</p>
                          </div>
                          <small class="mb-0">Last week analytics </small>
                        </div>
                        <div class="avatar">
                          <span class="avatar-initial rounded bg-label-danger">
                            <i class="ti ti-user-plus ti-26px"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span class="text-heading">Active Users</span>
                          <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">19,860</h4>
                            <p class="text-danger mb-0">(-14%)</p>
                          </div>
                          <small class="mb-0">Last week analytics</small>
                        </div>
                        <div class="avatar">
                          <span class="avatar-initial rounded bg-label-success">
                            <i class="ti ti-user-check ti-26px"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                          <span class="text-heading">Pending Users</span>
                          <div class="d-flex align-items-center my-1">
                            <h4 class="mb-0 me-2">237</h4>
                            <p class="text-success mb-0">(+42%)</p>
                          </div>
                          <small class="mb-0">Last week analytics</small>
                        </div>
                        <div class="avatar">
                          <span class="avatar-initial rounded bg-label-warning">
                            <i class="ti ti-user-search ti-26px"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Monthly Campaign State -->
                <div class="col-md-6 col-xxl-4 mb-6">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-1">Monthly Campaign State</h5>
                        <p class="card-subtitle">8.52k Social Visiters</p>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Emails</h6>
                            <div class="d-flex">
                              <p class="mb-0">12,346</p>
                              <p class="ms-4 text-success mb-0">0.3%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Opened</h6>
                            <div class="d-flex">
                              <p class="mb-0">8,734</p>
                              <p class="ms-4 text-success mb-0">2.1%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Clicked</h6>
                            <div class="d-flex">
                              <p class="mb-0">967</p>
                              <p class="ms-4 text-danger mb-0">1.4%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Subscribe</h6>
                            <div class="d-flex">
                              <p class="mb-0">345</p>
                              <p class="ms-4 text-success mb-0">8.5%</p>
                            </div>
                          </div>
                        </li>
                        <li class="mb-6 d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-secondary rounded p-1_5">
                            <i class="ti ti-alert-triangle ti-md"></i>
                          </div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Complaints</h6>
                            <div class="d-flex">
                              <p class="mb-0">10</p>
                              <p class="ms-4 text-danger mb-0">1.5%</p>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                          <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
                          <div class="d-flex justify-content-between w-100 flex-wrap">
                            <h6 class="mb-0 ms-4">Unsubscribe</h6>
                            <div class="d-flex">
                              <p class="mb-0">86</p>
                              <p class="ms-4 text-success mb-0">0.8%</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Monthly Campaign State -->

                <!-- Active Projects -->
                <div class="col-xxl-4 col-md-6 mb-6">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-1">Active Project</h5>
                        <p class="card-subtitle">Average 72% Completed</p>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light" type="button" id="activeProjects" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activeProjects">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="mb-4 d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/laravel-logo.png" alt="laravel-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">Laravel</h6>
                              <small class="text-body">eCommerce</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">65%</span>
                          </div>
                        </li>
                        <li class="mb-4 d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/figma-logo.png" alt="figma-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">Figma</h6>
                              <small class="text-body">App UI Kit</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">86%</span>
                          </div>
                        </li>
                        <li class="mb-4 d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/vue-logo.png" alt="vue-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">VueJs</h6>
                              <small class="text-body">Calendar App</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">90%</span>
                          </div>
                        </li>
                        <li class="mb-4 d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/react-logo.png" alt="react-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">React</h6>
                              <small class="text-body">Dashboard</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">37%</span>
                          </div>
                        </li>
                        <li class="mb-4 d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/bootstrap-logo.png" alt="bootstrap-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">Bootstrap</h6>
                              <small class="text-body">Website</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">22%</span>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="d-flex w-50 align-items-center me-4">
                            <img src="assets/img/icons/brands/sketch-logo.png" alt="sketch-logo" class="me-4" width="35">
                            <div>
                              <h6 class="mb-0">Sketch</h6>
                              <small class="text-body">Website Design</small>
                            </div>
                          </div>
                          <div class="d-flex flex-grow-1 align-items-center">
                            <div class="progress w-100 me-4" style="height: 8px">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="text-muted">29%</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Active Projects -->

                <!-- Source Visit -->
                <div class="col-xxl-4 col-lg-6 mb-6 order-2 order-xl-0">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-1">Source Visits</h5>
                        <p class="card-subtitle">38.4k Visitors</p>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1 waves-effect waves-light" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ti ti-dots-vertical ti-md text-muted"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">Download</a>
                          <a class="dropdown-item waves-effect" href="javascript:void(0);">View All</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mb-0">
                        <li class="mb-4">
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-shadow ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Direct Source</h6>
                                <small class="text-body">Direct link click</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">1.2k</p>
                                <div class="ms-4 badge bg-label-success">+4.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4">
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-globe ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Social Network</h6>
                                <small class="text-body">Social Channels</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">31.5k</p>
                                <div class="ms-4 badge bg-label-success">+8.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4">
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-mail ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Email Newsletter</h6>
                                <small class="text-body">Mail Campaigns</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">893</p>
                                <div class="ms-4 badge bg-label-success">+2.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4">
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-external-link ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Referrals</h6>
                                <small class="text-body">Impact Radius Visits</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">342</p>
                                <div class="ms-4 badge bg-label-danger">-0.4%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="mb-4">
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-ad ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">ADVT</h6>
                                <small class="text-body">Google ADVT</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">2.15k</p>
                                <div class="ms-4 badge bg-label-success">+9.1%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="d-flex align-items-center">
                            <div class="badge bg-label-secondary text-body p-2 me-4 rounded">
                              <i class="ti ti-star ti-md"></i>
                            </div>
                            <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                              <div class="me-2">
                                <h6 class="mb-0">Other</h6>
                                <small class="text-body">Many Sources</small>
                              </div>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">12.5k</p>
                                <div class="ms-4 badge bg-label-success">+6.2%</div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Source Visit -->

              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    made with ❤️ by <a href="https://unitedby.love" target="_blank" class="footer-link">United By Love</a>
                  </div>

                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>


    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>
  </body>
</html>
