<?php include('layout/header.php') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Wawasan</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Wawasan</h6>
                </div>
                <div class="card-body">
                    <form action="tambah-data-wawasan.php" method="post">
                        <div class="form-group">
                            <label>Tipe Wawasan</label>
                            <select class="form-control" name="tipe" required>
                                <option value="">-- Pilih Tipe Wawasan --</option>
                                <option value="Tips">Tips</option>
                                <option value="Wawasan">Wawasan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" required>
                        </div>
                        <div class="form-group">
                            <label>Isi Wawasan</label>
                            <textarea name="isi" cols="30" rows="10" class="ckeditor" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])) {
    $tipe = $_POST['tipe'];
    $judul = $_POST['judul'];
    $sub_judul = $_POST['sub_judul'];
    $isi = $_POST['isi'];

    include("koneksi.php");

    $result = mysqli_query($con, "INSERT INTO wawasan (id,tipe,judul,sub_judul,isi) VALUES(NULL,'$tipe','$judul','$sub_judul','$isi')");
    
    if($result) { 
        echo ("<script> window.alert('Berhasil Tambah Data'); window.location.href='data-wawasan.php'; </script>");
    } else { 
        echo ("<script> window.alert('Gagal Tambah Data'); window.location.href='tambah-data-wawasan.php'; </script>");
    }
}
?>

<?php include('layout/footer.php') ?>