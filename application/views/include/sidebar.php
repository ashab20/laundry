<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">


  <div class="container" data-layout="container">
    <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
      <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

          <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="<?= base_url('/') ?>">
          <div class="d-flex align-items-center py-3"><img class="" src="<?= base_url('assets/img/icon.PNG') ?>" alt="" width="50" /><span class="text-sans-serif text-info">Tailor</span>
          </div>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('quick/create') ?>">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Quick Service</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard') ?>">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Dashboard</span>
                </div>
              </a>
            </li>
            <!-- ! customers  -->
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#customers" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="customers">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span class="fas fa-puzzle-piece"></span>
                  </span>
                  <span class="nav-link-text">Customers</span>
                </div>
              </a>
              <ul class="nav collapse show" id="customers" data-parent="#navbarVerticalCollapse">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('customer/create') ?>">Add Customers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('customer/list') ?>">Customers List</a>
                </li>
              </ul>
            </li>

            <div class="navbar-vertical-divider">
              <hr class="navbar-vertical-hr my-2" />
            </div>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard') ?>">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Search</span>
                </div>
              </a>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Laundry</span>
                </div>
              </a>
              <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="email/inbox.html">All</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="email/email-detail.html">Ready</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="email/compose.html">Delivered</a>
                </li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text">Tailor</span>
                </div>
              </a>
              <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                  <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">Logout</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">Register</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                  <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                    <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">Logout</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">Register</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">Forgot password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/reset-password.html">Reset password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">Confirm mail</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">Lock screen</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav flex-column">

            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Order</span>
                </div>
              </a>
              <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('order/laundry') ?>">Order List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pages/associations.html">Tailor List</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pages/billing.html">Completed</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="pages/customer-details.html">Pending</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="navbar-vertical-divider">
            <hr class="navbar-vertical-hr my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Services</span>
                </div>
              </a>
              <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
               
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('service/create') ?>">Add Service</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('service/laundry') ?>">Laundry</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('service/tailor') ?>">Tailor</a>
                </li>
              </ul>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="changelog.html">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.8.2</span>
                </div>
              </a></li> -->
          </ul>
          <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider px-0">
              <hr class="navbar-vertical-hr my-3" />
            </div><a class="btn btn-sm btn-block btn-warning mb-3" href="<?= base_url('logout') ?>">
              Log Out</a>
          </div>
        </div>
      </div>
    </nav>