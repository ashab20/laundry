<!-- * main content -->

<!-- Overall Chart -->
<div class="card mb-3">
  <div class="card-body rounded-soft bg-gradient">
    <div class="row text-white align-items-center no-gutters">
      <div class="col">
        <h4 class="text-white mb-0">Today $764.39</h4>
        <p class="fs--1 font-weight-semi-bold">Yesterday <span class="opacity-50">$684.87</span></p>
      </div>
      <div class="col-auto d-none d-sm-block">
        <select class="custom-select custom-select-sm mb-3" id="dashboard-chart-select">
          <option value="all">All Payments</option>
          <option value="successful" selected="selected">Successful Payments</option>
          <option value="failed">Failed Payments</option>
        </select>
      </div>
    </div>
    <canvas class="max-w-100 rounded" id="chart-line" width="1618" height="375" aria-label="Line chart" role="img"></canvas>
  </div>
</div>

<!-- Overview counter start -->
<div class="card-deck">
  <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(<?= base_url('assets/img/illustrations/corner-1.png)') ?>;">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
      <h6>Customers<span class="badge badge-soft-warning rounded-capsule ml-2">-0.23%</span></h6>
      <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-warning">58.39k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">See all<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
  </div>
  <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(<?= base_url('assets/img/illustrations/corner-2.png)') ?>;">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
      <h6>Orders<span class="badge badge-soft-info rounded-capsule ml-2">0.0%</span></h6>
      <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">73.46k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">All orders<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
  </div>
  <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
    <div class="bg-holder bg-card" style="background-image:url(<?= base_url('assets/img/illustrations/corner-3.png') ?>);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
      <h6>Revenue<span class="badge badge-soft-success rounded-capsule ml-2">9.54%</span></h6>
      <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif" data-countup='{"count":43594,"format":"comma","prefix":"$"}'>0</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="#!">Statistics<span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span></a>
    </div>
  </div>
</div>

<!-- Overview counter end -->


<?php $this->load->view('component/dashboard/customerList') ?>


<div class="row no-gutters">
  <div class="col-lg-4 pr-lg-2">
    <div class="card h-100 bg-gradient">
      <div class="card-header bg-transparent">
        <h5 class="text-white">Active users right now</h5>
        <div class="real-time-user display-1 font-weight-normal text-white" data-countup='{"count":119}'>0</div>
      </div>
      <div class="card-body text-white fs--1">
        <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views per second</p>
        <canvas class="max-w-100" id="real-time-user" width="10" height="4"></canvas>
        <div class="list-group-flush mt-4">
          <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0" style="border-color: rgba(255, 255, 255, 0.15)">
            <p class="mb-0">Top Active Pages</p>
            <p class="mb-0">Active Users</p>
          </div>
          <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
            <p class="mb-0">/bootstrap-themes/</p>
            <p class="mb-0">3</p>
          </div>
          <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
            <p class="mb-0">/tags/html5/</p>
            <p class="mb-0">3</p>
          </div>
          <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
            <p class="mb-0">/</p>
            <p class="mb-0">2</p>
          </div>
          <div class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none" style="border-color: rgba(255, 255, 255, 0.05)">
            <p class="mb-0">/preview/falcon/dashboard/</p>
            <p class="mb-0">2</p>
          </div>
          <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1" style="border-color: rgba(255, 255, 255, 0.05)">
            <p class="mb-0">/100-best-themes...all-time/</p>
            <p class="mb-0">1</p>
          </div>
        </div>
      </div>
      <div class="card-footer text-right bg-transparent border-top" style="border-color: rgba(255, 255, 255, 0.15) !important"><a class="text-white" href="#!">Real-time report<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
    </div>
  </div>
  <div class="col-lg-8 pl-lg-2">
    <div class="card h-100 mt-3 mt-lg-0">
      <div class="card-header bg-light d-flex flex-between-center">
        <h5 class="mb-0">Active users</h5>
        <div class="dropdown text-sans-serif btn-reveal-trigger">
          <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--1"></span></button>
          <div class="dropdown-menu dropdown-menu-right border py-0">
            <div class="bg-white py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Move</a><a class="dropdown-item" href="#!">Resize</a>
              <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body h-100 p-0">
        <div class="h-100 bg-white" id="map" style="min-height: 300px;"></div>
      </div>
      <div class="card-footer bg-light">
        <div class="row justify-content-between">
          <div class="col-auto">
            <select class="custom-select custom-select-sm">
              <option value="week" selected="selected">Last 7 days</option>
              <option value="month">Last month</option>
              <option value="year">Last year</option>
            </select>
          </div>
          <div class="col-auto"><a class="btn btn-falcon-default btn-sm" href="#!"><span class="d-none d-sm-inline-block mr-1">Location</span>overview<span class="fa fa-chevron-right ml-1 fs--1"></span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="row no-gutters justify-content-between fs--1 mt-4 mb-3">
    <div class="col-12 col-sm-auto text-center">
      <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
    </div>
    <div class="col-12 col-sm-auto text-center">
      <p class="mb-0 text-600">v2.8.2</p>
    </div>
  </div>
</footer>
</div>
<div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
  <div class="modal-dialog modal-dialog-vertical" role="document">
    <div class="modal-content border-0 vh-100 scrollbar perfect-scrollbar">
      <div class="modal-header modal-header-settings">
        <div class="z-index-1 py-1 flex-grow-1">
          <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette mr-2 fs-0"></span>Settings</h5>
          <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
        </div>
        <button class="close z-index-1" type="button" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body px-card">
        <h5 class="fs-0">Color Scheme</h5>
        <p class="fs--1">Choose the perfect color mode for your app. </p>
        <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
          <div class="btn btn-theme-default custom-control custom-radio custom-radio-success active">
            <label class="cursor-pointer hover-overlay" for="theme-mode-default"><img class="w-100" src="<?= base_url('assets/img/generic/falcon-mode-default.jpg') ?>" alt="" /></label>
            <label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-default">
              <input class="custom-control-input" id="theme-mode-default" type="radio" name="colorScheme" checked="checked" value="theme-mode-default" data-page-url="index.html" /><span class="custom-control-label">Light</span>
            </label>
          </div>
          <div class="btn btn-theme-dark custom-control custom-radio custom-radio-success">
            <label class="cursor-pointer hover-overlay" for="theme-mode-dark"><img class="w-100" src="<?= base_url('assets/img/generic/falcon-mode-dark.jpg') ?>" alt="" /></label>
            <label class="cursor-pointer mb-0 d-flex justify-content-center pl-3" for="theme-mode-dark">
              <input class="custom-control-input" id="theme-mode-dark" type="radio" name="colorScheme" value="theme-mode-dark" data-page-url="documentation/dark-mode.html" /><span class="custom-control-label">Dark</span>
            </label>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="media flex-grow-1"><img class="mr-2" src="<?= base_url('assets/img/icons/left-arrow-from-left.svg') ?>" width="20" alt="" />
            <div class="media-body">
              <h5 class="fs-0">RTL Mode</h5>
              <p class="fs--1 mb-0">Switch your language direction </p>
            </div>
          </div>
          <div class="custom-control custom-switch">
            <input class="custom-control-input" id="mode-rtl" type="checkbox" data-home-url="index.html" data-url="documentation/RTL.html" />
            <label class="custom-control-label" for="mode-rtl"> </label>
          </div>
        </div>
        <hr />
        <div class="d-flex justify-content-between">
          <div class="media flex-grow-1"><img class="mr-2" src="<?= base_url('assets/img/icons/arrows-h.svg') ?>" width="20" alt="" />
            <div class="media-body">
              <h5 class="fs-0">Fluid Layout</h5>
              <p class="fs--1 mb-0">Toggle container layout system </p>
            </div>
          </div>
          <div class="custom-control custom-switch">
            <input class="custom-control-input" id="mode-fluid" type="checkbox" data-home-url="index.html" data-url="documentation/fluid-layout.html" />
            <label class="custom-control-label" for="mode-fluid"> </label>
          </div>
        </div>
        <hr />
        <div class="media"><img class="mr-2" src="<?= base_url('assets/img/icons/paragraph.svg') ?>" width="20" alt="" />
          <div class="media-body">
            <h5 class="fs-0 d-flex align-items-center">Navigation Position <span class="badge badge-pill badge-soft-success fs--2 ml-2">Updated</span></h5>
            <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
            <div class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" checked="checked" data-page-url="components/navbar/vertical.html" />
              <label class="custom-control-label" for="option-navbar-vertical">Vertical</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input class="custom-control-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="components/navbar/top.html" />
              <label class="custom-control-label" for="option-navbar-top">Top</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline mr-0">
              <input class="custom-control-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="components/navbar/combo.html" />
              <label class="custom-control-label" for="option-navbar-combo">Combo</label>
            </div>
          </div>
        </div>
        <hr />
        <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
        <p class="fs--1">Switch between styles for your vertical navbar </p>
        <div class="btn-group-toggle btn-block btn-group-navbar-style" data-toggle="buttons">
          <div class="btn-group btn-block">
            <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2 active">
              <label class="cursor-pointer w-100" for="navbar-style-transparent"><img class="w-100" src="<?= base_url('assets/img/generic/default.png') ?>" alt="" /></label>
              <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-transparent">
                <input class="custom-control-input" id="navbar-style-transparent" type="radio" name="navbarVertical" checked="checked" data-page-url="index.html" value="transparent" /><span class="custom-control-label"> Transparent</span>
              </label>
            </div>
            <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
              <label class="cursor-pointer w-100" for="navbar-style-inverted"><img class="w-100" src="<?= base_url('assets/img/generic/inverted.png') ?>" alt="" /></label>
              <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-inverted">
                <input class="custom-control-input" id="navbar-style-inverted" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-inverted.html" value="inverted" /><span class="custom-control-label"> Inverted</span>
              </label>
            </div>
          </div>
          <div class="btn-group btn-block mt-3">
            <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
              <label class="cursor-pointer w-100" for="navbar-style-card"><img class="w-100" src="<?= base_url('assets/img/generic/card.png') ?>" alt="" /></label>
              <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-card">
                <input class="custom-control-input" id="navbar-style-card" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-card.html" value="card" /><span class="custom-control-label"> Card</span>
              </label>
            </div>
            <div class="btn p-0 text-left custom-control custom-radio custom-radio-success mr-2">
              <label class="cursor-pointer w-100" for="navbar-style-vibrant"><img class="w-100" src="<?= base_url('assets/img/generic/vibrant.png') ?>" alt="" /></label>
              <label class="cursor-pointer d-flex mb-0 pl-3 ml-2" for="navbar-style-vibrant">
                <input class="custom-control-input" id="navbar-style-vibrant" type="radio" name="navbarVertical" data-page-url="layouts/navbar-vertical-vibrant.html" value="vibrant" /><span class="custom-control-label"> Vibrant</span>
              </label>
            </div>
          </div>
        </div>
        <hr />
        <div class="text-center mt-5"><img class="mb-4" src="<?= base_url('assets/img/illustrations/settings.png') ?>" alt="" width="120" />
          <h5>Like What You See?</h5>
          <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/">Purchase</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
  <div class="modal-dialog mt-6" role="document">
    <div class="modal-content border-0">
      <div class="modal-header px-5 text-white position-relative modal-shape-header">
        <div class="position-relative z-index-1">
          <div>
            <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
            <p class="fs--1 mb-0">Please create your free Falcon account</p>
          </div>
        </div>
        <button class="close text-white position-absolute t-0 r-0 mt-1 mr-1" data-dismiss="modal" aria-label="Close"><span class="font-weight-light" aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body py-4 px-5">
        <form>
          <div class="form-group">
            <label for="modal-auth-name">Name</label>
            <input class="form-control" type="text" id="modal-auth-name" />
          </div>
          <div class="form-group">
            <label for="modal-auth-email">Email address</label>
            <input class="form-control" type="email" id="modal-auth-email" />
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="modal-auth-password">Password</label>
              <input class="form-control" type="password" id="modal-auth-password" />
            </div>
            <div class="form-group col-6">
              <label for="modal-auth-confirm-password">Confirm Password</label>
              <input class="form-control" type="password" id="modal-auth-confirm-password" />
            </div>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="modal-auth-register-checkbox" />
            <label class="custom-control-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button>
          </div>
        </form>
        <div class="w-100 position-relative mt-5">
          <hr class="text-300" />
          <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
        </div>
        <div class="form-group mb-0">
          <div class="row no-gutters">
            <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
            <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook-square mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->