<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-sm btn-primary shadow-sm mb-3">
                        <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data Mahasiswa
                    </a>

                    <div class="table-responsive">
                        <table class="tabel table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Nim</th>
                                    <th style="text-align: center;">Nama Mahasiswa</th>
                                    <!-- <th style="text-align: center;">Tempat Lahir</th>
                                    <th style="text-align: center;">Tanggal Lahir</th> -->
                                    <th style="text-align: center;">Alamat</th>
                                    <!-- <th style="text-align: center;">Email</th> -->
                                    <th style="text-align: center;">Telepon</th>
                                    <!-- <th style="text-align: center;">Agama</th> -->
                                    <th style="text-align: center;">Gambar</th>
                                    <th style="text-align: center;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($mahasiswa as $data) { ?>
                                    <td style="text-align: center;"><?php echo $i++; ?></td>
                                    <td style="text-align: center;"><?php echo $data->nim_mhs; ?></td>
                                    <td><?php echo $data->nama_mahasiswa; ?></td>
                                    <td style="text-align:center"><?php echo $data->alamat; ?></td>
                                    <td style="text-align: center;"><?php echo $data->telepon; ?></td>
                                    <td style="text-align:center"><?php echo $data->gambar; ?></td>
                                    <td style="text-align: center;">
                                        <a href="" class="btn btn-info btn-xs">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="" class="btn btn-info btn-xs">
                                            <i class=" fa fa-pencil-alt"></i>
                                        </a>
                                    </td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>