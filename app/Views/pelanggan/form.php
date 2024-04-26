<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= $webid['title'] ?></h3>
            </div>
            <div class="title_right">

            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form <?= ucwords(uri()->getSegment(2) . ' ' . $webid['title']) ?></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="<?= route_to('save_pelanggan', uri()->getSegment(2)) ?>" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                            <?= csrf_field() ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama Lengkap
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="nama" id="nama" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input type="text" id="nik" name="nik" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <label for="nohp" class="control-label col-md-1 col-sm-1 col-xs-12">No HP <span class="required">*</span></label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <input id="nohp" class="form-control col-md-7 col-xs-12" type="text" name="nohp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="alamat" class="form-control col-md-7 col-xs-12" type="text" name="alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp" class="control-label col-md-3 col-sm-3 col-xs-12">Foto KTP
                                    <span class="required">*</span></label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <input id="foto_ktp" class="form-control col-md-7 col-xs-12" type="file" name="foto_ktp">
                                </div>
                                <label for="kategori" class="control-label col-md-1 col-sm-1 col-xs-12">Kategori</label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <select id="kategori" class="form-control col-md-7 col-xs-12" name="kategori">
                                        <option value="Rumah Tangga">Rumah Tangga</option>
                                        <option value="Mikro">Mikro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button class="btn btn-dark" type="button">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>