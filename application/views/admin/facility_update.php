<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update</h1>

    <div class="row">
        <dic class="col-lg-8">
            <form action="<?= base_url('admin/update') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $fasilitas['id']; ?>">
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipe Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kamar" name="kamar" placeholder="Tipe Kamar" required="" value="<?= $fasilitas['name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required="" value="<?= $fasilitas['description']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Long Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="l_desc" name="l_desc" placeholder="Long Description" required="" value="<?= $fasilitas['l_description']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Room Amount</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="number" name="number" placeholder="Room Amount" required="" value="<?= $fasilitas['count']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Image</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="userfile" name="userfile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="Submit" class="btn btn-primary">Update</button>

            </form>
        </dic>
    </div>




</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->