<?= $this->extend('default_view') ?>
<?= $this->section('content') ?>
<?php $session = \Config\Services::session(); ?>
<div class="card" style="margin-inline: 1rem;">
    <h5 class="card-header">My Picture</h5>
    <div class="card-body">
        <form action="<?= base_url('upload-photo') ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class=" mb-3">
                <label for="formFile" class="form-label">Select Profile picture</label>
                <!-- <input type="file" name="image[]" accept="image/*" multiple class="dropzone"> -->
                <input class="form-control img-set" type="file" id="formFile" name="profile-image" />
            </div>
            <!-- <input type="file" value="" class="img" name="wareva"> -->

            <!-- <script>
                document.querySelector('.img').value;
                document.querySelector('.img-set').value;
            </script> -->
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple Images</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple />
            </div>
            <!-- <div>
            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled />
        </div> -->
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </form>
    </div>
</div>


<script>

</script>

<?= $this->endSection() ?>