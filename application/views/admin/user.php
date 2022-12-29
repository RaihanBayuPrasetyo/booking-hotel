<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <div class="row">
        <div class="col-lg table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Role Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Active State</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($akun as $u) if ($u['role_id'] >= 2) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $u['id']; ?></td>
                            <td><?= $u['role_id']; ?></td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= date("Y-m-d H:i:s", $u['date_created']); ?></td>
                            <td><?= $u['is_active']; ?></td>

                            <td>
                                <a class="badge badge-primary" href="" data-toggle="modal" data-target="#exampleModal2<?= $u['id']; ?>">edit</a>
                                <a class="badge badge-danger" href="<?= base_url() ?>admin/delUser/<?= $u['id']; ?>">delete</a>
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

<!-- Modal -->
<!-- modal update -->
<?php $no = 0; ?>
<?php foreach ($akun as $u) : $no++ ?>
    <div class="modal fade" id="exampleModal2<?= $u['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/updateUser') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $u['id']; ?>">
                        <div class="form-group">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Role</label>
                            <input type="number" min="1" max="3" class="form-control" id="role" name="role" placeholder="Role" value="<?= $u['role_id']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Active</label>
                            <input type="number" min="0" max="1" class="form-control" id="active" name="active" placeholder="Active State" value="<?= $u['is_active']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>