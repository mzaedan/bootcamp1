<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Mahasiswa</a></li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Nim</th>
                                        <th style="text-align: center;">Nama Mahasiswa</th>
                                        <th style="text-align: center;">Alamat</th>
                                        <th style="text-align: center;">Telepon</th>
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
                                            <a href="" class="btn btn-info btn-xs">
                                                <i class=" fa fa-trash"></i>
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
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                'paginate': {
                    'previous': '<i class="bi bi-skip-start-fill"></i>',
                    'next': '<i class="bi bi-skip-end-fill"></i>'
                }
            }
        });
    });
</script>