<div class="content-body">
    <div class="container-fluid" style="margin-top: -100px;">
        <div class=" row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Mahasiswa</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Data Mahasiswa</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <?= form_open_multipart('mahasiswa/update_aksi'); ?>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="hidden" name="nim_mhs" class="form-control" value="<?php echo $row->id_mahasiswa ?>">


                                <input type="text" class="form-control" placeholder="Masukan Nama" name="nama_mhs" value="<?php echo $row->nama_mahasiswa ?>">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Nim</label>
                                <input type="text" class="form-control" placeholder="Masukan Nim" name="nim_mhs" value="<?php echo $row->nim_mhs ?>">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $row->tempat_lahir ?> ">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir ?> ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat ?> ">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $row->email ?> ">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telepon" value="<?php echo $row->telepon
                                                                                                ?> ">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Agama</label>
                                <input type="text" class="form-control" name="agama" value="<?php echo $row->agama ?> ">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="formFile" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="formFile" name="gambar" value="<?php echo $row->gambar ?> ">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>