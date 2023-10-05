<?= $this->extend('default_view') ?>
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>


<div style="padding-inline: 1rem;">
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