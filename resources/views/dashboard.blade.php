@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
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
                              <img src="{{asset('assets/img/icons/brands/laravel-logo.png')}}" alt="laravel-logo" class="me-4" width="35">
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
                              <img src="{{asset('assets/img/icons/brands/figma-logo.png')}}" alt="figma-logo" class="me-4" width="35">
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
                              <img src="{{asset('assets/img/icons/brands/vue-logo.png')}}" alt="vue-logo" class="me-4" width="35">
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
                              <img src="{{asset('assets/img/icons/brands/react-logo.png')}}" alt="react-logo" class="me-4" width="35">
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
                              <img src="{{asset('assets/img/icons/brands/bootstrap-logo.png')}}" alt="bootstrap-logo" class="me-4" width="35">
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
                              <img src="{{asset('assets/img/icons/brands/sketch-logo.png')}}" alt="sketch-logo" class="me-4" width="35">
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

@endsection
