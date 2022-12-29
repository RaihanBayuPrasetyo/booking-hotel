<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Request List</h1>

    <?= validation_errors(); ?>
    <div class="row">
        <div class="col-lg table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Finish Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php $key = 1 ?>
                    <?php foreach ($book as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $u['room']; ?></td>
                            <td><?= $u['start_date']; ?></td>
                            <td><?= $u['finish_date']; ?></td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['status']; ?></td>
                            <td>
                                <?php if ($u['status'] == "accepted") : ?>
                                    <a type="button" disabled class="badge badge-light">Accept</a>
                                    <a type="button" disabled class="badge badge-light">Reject</a>
                                <?php endif ?>
                                <?php if ($u['status'] == "reject") : ?>
                                    <a type="button" disabled class="badge badge-light">Accept</a>
                                    <a type="button" disabled class="badge badge-light">Reject</a>
                                <?php endif ?>
                                <?php if ($u['status'] == "waiting") : ?>
                                    <a class="badge badge-success" href="<?= base_url() ?>management/accept/<?= $u['id']; ?>/<?= $u['room']; ?>">Accept</a>
                                    <a class="badge badge-danger" href="<?= base_url() ?>management/reject/<?= $u['id']; ?>">Reject</a>
                                <?php endif ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->