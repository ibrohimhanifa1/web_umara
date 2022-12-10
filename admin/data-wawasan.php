<?php include('layout/header.php') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Wawasan</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Wawasan</h6>
                    <div class="text-right">
                        <a href="tambah-data-wawasan.php" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tipe</th>
                                    <th>Judul</th>
                                    <th>Sub Judul</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("koneksi.php");

                                $result = mysqli_query($con, "SELECT * FROM wawasan ORDER BY id DESC");
                                $no = 1;
                                while($data = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$data['tipe']?></td>
                                    <td><?=$data['judul']?></td>
                                    <td><?=$data['sub_judul']?></td>
                                    <td><?=$data['isi']?></td>
                                    <td>
                                        <a href="edit-wawasan.php?id=<?=$data['id']?>" class="btn btn-primary">Edit</a>
                                        <a href="hapus-wawasan.php?id=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php') ?>