<?= $this->extend('default_view') ?>;
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>

<div style="padding-inline: 1rem; margin-top: 1rem;">
    <div class="row mb-5">
        <div class="col-md ">
            <div class="card mb-3 block">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="<?= base_url('assets/img/elements/12.jpg') ?>" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Generate Fees</h5>
                            <p class="card-text">
                                Genreate fees for the current session
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="col-md">
                <!-- href="</?= base_url() ?>download/biodata/</?= $_SESSION['id'] ?>" -->

                <div class="card mb-3" data-bs-target="#modalScrollable" data-bs-toggle="modal">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="card-img card-img-left" src="<?= base_url() ?>assets/img/elements/17.jpg" alt="Card image" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pay online now</h5>
                                <p class="card-text">
                                    Pay Fees for the current session
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row mb-5">

        <div class="col-md">
            <!-- href="</?= base_url() ?>download/biodata/</?= $_SESSION['id'] ?>" -->

            <div class="card mb-3" data-bs-target="#modalScrollable" data-bs-toggle="modal">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="<?= base_url() ?>assets/img/elements/12.jpg" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Download Bio Data</h5>
                            <p class="card-text">
                                Click here to download your student bio data
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img card-img-right" src="../assets/img/elements/17.jpg" alt="Card image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Your Biodata file is ready. Click Download to download
                </p>
            </div>
            <div style="width: 90%; margin-inline: auto;" class="mb-3">
                <label for="defaultSelect" class="form-label">Select session</label>
                <select id="defaultSelect" class="form-select">
                    <option value="2023/2024">2023/2024</option>
                </select>
            </div>
            <div class="card-body">
                <div class="row mt-3">
                    <div class="d-grid gap-2 col-lg-6 mx-auto">
                        <a href="<?= base_url() ?>payments/paymentable" style="color:white;" class="btn btn-primary btn-lg" type="button">Next</a>
                        <!-- <button class="btn btn-secondary btn-lg" type="button">Button</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>