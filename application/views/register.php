<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Falcon | Dashboard &amp; WebApp Template</title>


  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicons/apple-touch-icon.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicons/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicons/favicon-16x16.png') ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicons/favicon.ico') ?>">
  <link rel="manifest" href="<?= base_url('assets/img/favicons/manifest.json') ?>">
  <meta name="msapplication-TileImage" content="<?= base_url('assets/img/favicons/mstile-150x150.png') ?>">
  <meta name="theme-color" content="#ffffff">


  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <script src="<?= base_url('assets/js/config.navbar-vertical.js') ?>"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="<?= base_url('assets/lib/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet">

</head>


<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">


    <div class="container" data-layout="container">
      <div class="row flex-center min-vh-100 py-6">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <a class="navbar-brand" href="<?= base_url('/') ?>">
            <div class="d-flex align-items-center py-3"><img class="" src="<?= base_url('assets/img/icon.PNG') ?>" alt="" width="50" /><span class="text-sans-serif text-info">Tailor</span>
            </div>
          </a>
          <div class="card">
            <div class="card-body p-4 p-sm-5">
              <div class="row text-left justify-content-between align-items-center mb-2">
                <div class="col-auto">
                  <h5> Register</h5>
                </div>
                <div class="col-auto">
                  <p class="fs--1 text-600 mb-0">Have an account? <a href="<?= base_url('authentication/basic/login.html') ?>">Login</a></p>
                </div>
              </div>
              <span>
                <?php if ($this->session->flashdata('msg')) {
                  echo $this->session->flashdata('msg');
                } ?>
              </span>
              <?= form_open() ?>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>" />
                <small id="name" class="form-text text-danger"><?= form_error('name'); ?></small>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" placeholder="Email address" name="email" value="<?= set_value('email') ?>" />
                <small id="name" class="form-text text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <input class="form-control" type="password" placeholder="Password" name="password" value="<?= set_value('password') ?>" />
                  <small id="name" class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group col-6">
                  <input class="form-control" type="password" placeholder="Confirm Password" name="cpassword" value="<?= set_value('cpassword') ?>" />
                  <small id="name" class="form-text text-danger"><?= form_error('cpassword'); ?></small>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <input class="form-control" type="number" placeholder="Phone" name="contact" value="<?= set_value('contact') ?>" />
                  <small id="name" class="form-text text-danger"><?= form_error('contact'); ?></small>
                </div>
                <div class="form-group col-6">
                  <select name="role" id="role" class="form-control">
                    <option value="">Select Role</option>
                    <option value="ADMIN">Admin</option>
                    <option value="EMPLOYEE">Employee</option>

                  </select>
                  <small id="name" class="form-text text-danger"><?= form_error('role'); ?></small>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-12">
                  <textarea name="address" id="address" class="form-control" rows="2" placeholder="Address:">
                  <?= set_value('address') ?>
                  </textarea>
                  <small id="name" class="form-text text-danger"><?= form_error('address'); ?></small>
                </div>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="basic-register-checkbox" />
                <label class="custom-control-label" for="basic-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block mt-3" type="submit">Register</button>
              </div>
              </form>
              <div class="w-100 position-relative mt-4">
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
    </div>
  </main>
  <!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->




  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/@fortawesome/all.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/stickyfilljs/stickyfill.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/sticky-kit/sticky-kit.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/is_js/is.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/lodash/lodash.min.js') ?>"></script>
  <script src="<?= base_url('assets/lib/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <script src="<?= base_url('assets/js/theme.js') ?>"></script>

</body>

</html>