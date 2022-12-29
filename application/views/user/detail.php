<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail</h1>

    <div class="row">
        <div class="col-lg">
            <div class="text-center">
                <img class="mx-auto img-fluid" width="800" src="<?= base_url() . '/uploads/' . $fasilitas['image']; ?>" alt="">
            </div>
            <h4 class="card-title text-center mt-5"><?= $fasilitas['name']; ?></h4>
            <p class="card-text text-center"><?= $fasilitas['l_description']; ?></p>
            <?php if ($fasilitas['count'] == 0) : ?>
                <div class="text-center">
                    <a disable type="button" class="btn btn-secondary text-center mb-5">Room Full</a>
                </div>
            <?php endif ?>
            <?php if ($fasilitas['count'] != 0) : ?>
                <div class="text-center">
                    <a data-toggle="modal" data-target="#exampleModal" href="<?= base_url() ?>user/booking/<?= $fasilitas['id']; ?>" class="btn btn-primary text-center mb-5">Book</a>
                </div>
            <?php endif ?>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/booking'); ?>" method="post">
                <div class="modal-body">

                    <input type="hidden" name="kamar" value="<?= $fasilitas['name']; ?>">
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">From</label>
                        <div class="col-sm-10">
                            <input type="date" required="" class="form-control form-control-sm" id="start" name="start" min="<?= date("Y-m-d"); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Until</label>
                        <div class="col-sm-10">
                            <input type="date" required="" class="form-control form-control-sm" id="finish" name="finish" min="<?= date("Y-m-d"); ?>">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>