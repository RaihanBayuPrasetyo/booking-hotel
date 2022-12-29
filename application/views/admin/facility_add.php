<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Room</h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <dic class="col-lg-8">
            <form action="<?= base_url('admin/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipe Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kamar" name="kamar" placeholder="Tipe Kamar" required="">
                        <?= form_error('kamar', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Long Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="l_desc" name="l_desc" placeholder="Long Description" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Room Amount</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="number" name="number" placeholder="Room Amount" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="userfile" name="userfile" required="">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="Submit" class="btn btn-primary">Add</button>

            </form>
        </dic>
    </div>


</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->