<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Booking List</h1>

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

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php $key = 1 ?>
                    <?php $id = $this->session->userdata('id'); ?>
                    <?php foreach ($book as $u) if ($u['id_name'] == $id) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $u['room']; ?></td>
                            <td><?= $u['start_date']; ?></td>
                            <td><?= $u['finish_date']; ?></td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['status']; ?></td>
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