<?= $this->extend('template/index') ?>
<?= $this->section('head') ?>
<?= $this->endSection() ?>
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
                        <div class="nav navbar-right panel_toolbox">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-plus-circle"></i>
                                    Tambah</button>
                                <button class="btn btn-sm btn-default" type="button"><i class="fa fa-upload"></i>
                                    Import</button>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- <p class="text-muted font-13 m-b-30">
                           Teks
                        </p> -->
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>NIK</th>
                                    <th>ALAMAT</th>
                                    <th>TELP</th>
                                    <th>KATEGORI</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($result as $value) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->nama ?></td>
                                        <td><?= $value->nik ?></td>
                                        <td><?= $value->alamat ?></td>
                                        <td><?= $value->nohp ?></td>
                                        <td><?= $value->kategori ?></td>
                                        <td></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>