<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Room List</h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <?php foreach ($fasilitas as $u) if ($u['active'] == 1) : ?>
                    <div class="card mr-3 mb-4" style="width: 18rem;">
                        <img class="card-img-top" width="100" height="200" src="<?= base_url() . '/uploads/' . $u['image']; ?>" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-center"><?= $u['name']; ?></h4>
                            <p class="card-text text-center"><?= $u['description']; ?></p>
                            <div class="text-center">
                                <a href="<?= base_url() ?>user/detail/<?= $u['id']; ?>" class="btn btn-primary text-center">Detail</a>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->