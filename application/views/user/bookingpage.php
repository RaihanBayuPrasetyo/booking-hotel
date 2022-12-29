<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Booking Page</h1>

    <div class="row">
        <dic class="col-lg-8">
            <form action="<?= base_url('user/booking') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Tipe Kamar</label>
                    <div class="col-sm-10">
                        <select class="custom-select" name="kamar" id="kamar" required="">
                            <?php foreach ($book as $u) if ($u['active'] == 1 && $u['count'] != 0) : ?>
                                <option><?= $u['name']; ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Start Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="start" name="start" required="" min="<?= date("Y-m-d"); ?>">
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Start Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="finish" name="finish" required="" min="<?= date("Y-m-d"); ?>">
                    </div>
                </div>

                <button type="Submit" class="btn btn-primary">Book</button>

            </form>
        </dic>
    </div>





</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->