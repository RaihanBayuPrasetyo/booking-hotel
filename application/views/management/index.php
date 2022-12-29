<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Room List</h1>

    <?= validation_errors(); ?>
    <div class="row">
        <div class="col-lg table-responsive">

            <a class="btn btn-primary mb-3" href="<?= base_url('management/add') ?>">Add Tipe Kamar</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tipe Kamar</th>
                        <th scope="col">Description</th>
                        <th scope="col">Room Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php $key = 1 ?>
                    <?php foreach ($fasilitas as $u) if ($u['active'] == 1) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td>
                                <img width="100" src="<?= base_url() . '/uploads/' . $u['image']; ?>" alt="">
                            </td>
                            <td><?= $u['id']; ?></td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['description']; ?></td>
                            <td><?= $u['count']; ?></td>
                            <td>
                                <a class="badge badge-primary" href="<?= base_url() ?>management/tampilanupdate/<?= $u['id']; ?>">edit</a>
                                <a class="badge badge-danger" href="<?= base_url() ?>management/del/<?= $u['id']; ?>/<?= $u['image']; ?>">delete</a>
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->