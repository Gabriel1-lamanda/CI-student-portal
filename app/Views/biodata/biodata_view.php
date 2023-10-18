<?= $this->extend('default_view') ?>
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
                            <h5 class="card-title">Profile Photo</h5>
                            <p class="card-text">
                                Select this section to update your profile picture.
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md">
            <a href="<?= base_url() ?>basic">
                <div class="card mb-3 block">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Student Information</h5>
                                <p class="card-text">
                                    Click here to view your Student data
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img card-img-right" src="<?= base_url('assets/img/elements/17.jpg') ?>" alt="Card image" />
                        </div>
                    </div>
                </div>
            </a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <a href="<?= base_url() ?>download/biodata/<?= session('id') ?>"" style=" color:white" type="button" class="btn btn-primary">Save changes</a>
            </div>
        </div>
    </div>
</div>
<script>
    let profileImage = document.querySelector('.block');
    // let profileImage2 = document.querySelector('.block');

    profileImage.addEventListener('click', () => {
        const redirectURL = '<?= base_url('update-photo') ?>';

        window.location.href = redirectURL;
    })
</script>

<?= $this->endSection() ?>