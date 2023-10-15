<?= $this->extend('default_view') ?>;
<?= $this->section('content') ?>
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
          <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?= isset($student) ? 'Basic Biodata Info' : '' ?></h4>

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
                    <input type="hidden" value="<?= isset($student) ? true : false  ?>" name="type">
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Surname</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['lastname'] : '' ?>" type="text" class="form-control" id="basic-default-name" name="lastname" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Firstname</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['firstname'] : '' ?>" type="text" class="form-control" id="basic-default-name" name="firstname" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-company">College</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['college'] : '' ?>" type="text" class="form-control" id="basic-default-company" name="college" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-company">Department</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['department'] : '' ?>" type="text" class="form-control" id="basic-default-company" name="department" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                      <div class="col-sm-10">
                        <div class="input-group input-group-merge">
                          <input value="<?= isset($student) ? $student['email'] : '' ?>" type="email" class="form-control" name="email" aria-describedby="basic-default-email2" />
                          <!-- <span class="input-group-text" id="basic-default-email2">@example.com</span> -->
                        </div>
                        <!-- <div class="form-text">You can use letters, numbers & periods</div> -->
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['phone'] : '' ?>" name="phone" type="number" id="basic-default-phone" class="form-control phone-mask" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="html5-text-input" class="col-md-2 col-form-label">Nationality</label>
                      <div class="col-md-10">
                        <input value="<?= isset($student) ? $student['nationality'] : '' ?>" name="nationality" class="form-control" type="text" value="" id="html5-text-input" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="html5-text-input" class="col-md-2 col-form-label">State</label>
                      <div class="col-md-10">
                        <select name="state" id="defaultSelect" class="form-select">
                          <option>Default select</option>
                          <option value="lagos">Lagos</option>
                          <option value="rivers">Rivers</option>
                          <option value="ondo">Ondo</option>
                          <option value="ogun">Ogun</option>
                          <option value="kebbbi">Kebbi</option>
                          <option value="kogi">Kogi</option>
                          <option value="delta">Delta</option>
                          <option value="Oyo">Oyo</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="html5-password-input" class="col-md-2 col-form-label">Local Government Area</label>
                      <div class="col-md-10">
                        <input value="" name="local-govt" class="form-control" type="text" id="html5-password-input" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="html5-text-input" class="col-md-2 col-form-label">Religion</label>
                      <div class="col-md-10">
                        <select name="religion" id="defaultSelect" class="form-select">
                          <option value="christianity">Christianity</option>
                          <option value="islam">Islam</option>
                          <option value="traditional">Traditional</option>
                          <option value="other">Others</option>
                        </select>
                      </div>
                    </div>


                    <div class="mb-3 row">
                      <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                      <div class="col-md-10">
                        <input value="" name="password" class="form-control" type="password" value="password" id="html5-password-input" />
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="html5-date-input" class="col-md-2 col-form-label">Date of Birth</label>
                      <div class="col-md-10">
                        <input value="<?= isset($student) ? $student['dateofbirth'] : '' ?>" name="dateofbirth" class="form-control" type="date" value="" id="html5-date-input" <?= isset($readonly) ? 'disabled' : '' ?> />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                      <div class="col-sm-10">
                        <input value="<?= isset($student) ? $student['address'] : '' ?>" name="address" class="form-control" type="text" id="html5-date-input" />
                      </div>
                    </div>
                    <div class="row justify-content-end">
                      <?php if (isset($student)) { ?>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      <?php } else { ?>

                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      <?php } ?>
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


<?= $this->endSection() ?>