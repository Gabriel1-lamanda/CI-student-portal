<!DOCTYPE html>
<?= view('header') ?>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <!-- </?= view('_sidemenu') ?>  -->
      <!-- / Menu -->

      <!-- Layout container -->
      <div style="margin-inline: auto; width:94vw;">
        <!-- Navbar -->


        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Application Form</h4>

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Student Data</h5>
                    <!-- <small class="text-muted float-end">Default label</small> -->
                  </div>
                  <div class="card-body">
                    <form action="register-student" method="post">
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Surname</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="lastname" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Firstname</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-name" name="firstname" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">College</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-company" name="college" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-company">Department</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="basic-default-company" name="department" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-email" class="form-control" name="email" aria-describedby="basic-default-email2" />
                            <!-- <span class="input-group-text" id="basic-default-email2">@example.com</span> -->
                          </div>
                          <!-- <div class="form-text">You can use letters, numbers & periods</div> -->
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                        <div class="col-sm-10">
                          <input name="phone" type="text" id="basic-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Nationality</label>
                        <div class="col-md-10">
                          <input name="nationality" class="form-control" type="text" value="" id="html5-text-input" />
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                          <input name="password" class="form-control" type="password" value="password" id="html5-password-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date of Birth</label>
                        <div class="col-md-10">
                          <input name="dateofbirth" class="form-control" type="date" value="" id="html5-date-input" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                        <div class="col-sm-10">
                          <textarea name="address" id="basic-default-message" class="form-control" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Basic with Icons -->

            </div>
          </div>
          <!-- / Content -->

          <!-- Footer -->

          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->



  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?= base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= base_url() ?>assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url() ?>assets/vendor/js/bootstrap.js"></script>
  <script src="<?= base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?= base_url() ?>assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>