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
                            <span class="text-heading">Jumlah Tamu</span>
                            <div class="d-flex align-items-center my-1">
                              <h4 class="mb-0 me-2">21,459</h4>
                            </div>
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
                            <span class="text-heading">Tamu Terkonfirmasi Hadir</span>
                            <div class="d-flex align-items-center my-1">
                              <h4 class="mb-0 me-2">4,567</h4>
                            </div>
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

                  <!-- Monthly Campaign State -->
                  <div class="col-md-6 col-xxl-6 mb-6">
                    <div class="card h-100">
                      <div class="card-header d-flex justify-content-between">
                        <div class="card-title mb-0">
                          <h5 class="mb-1">Tamu Undangan Yang Hadir</h5>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="p-0 m-0">
                          <li class="mb-6 d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between w-100 flex-wrap">
                              <h6 class="mb-0 ms-4"><strong>Emails</strong></h6>
                              <div class="d-flex">
                                <p class="mb-0">09:32</p>
                              </div>
                            </div>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Monthly Campaign State -->
                </div>
              </div>
              <!-- / Content -->

@endsection
