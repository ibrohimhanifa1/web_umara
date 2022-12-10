<?php include('layout/header.php') ?>
<?php
include("koneksi.php");

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM wawasan WHERE id=$id");
 
while($data = mysqli_fetch_array($result))
{
    $tipe = $data['tipe'];
    $judul = $data['judul'];
    $sub_judul = $data['sub_judul'];
    $isi = $data['isi'];
}
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Wawasan</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Wawasan</h6>
                </div>
                <div class="card-body">
                    <form action="edit-wawasan.php?id=<?=$id?>" method="post">
                        <div class="form-group">
                            <label>Tipe Wawasan</label>
                            <select class="form-control" name="tipe" required>
                                <option value="<?=$tipe;?>">-- Tidak Ada Perubahan --</option>
                                <option value="Tips">Tips</option>
                                <option value="Wawasan">Wawasan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?=$judul;?>" required>
                            <input type="hidden" class="form-control" name="id" value="<?=$id;?>">
                        </div>
                        <div class="form-group">
                            <label>Sub Judul</label>
                            <input type="text" class="form-control" name="sub_judul" value="<?=$sub_judul;?>" required>
                        </div>
                        <div class="form-group">
                            <label>Isi Wawasan</label>
                            <textarea name="isi" cols="30" rows="10" class="ckeditor" required><?=$isi;?></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $tipe = $_POST['tipe'];
    $judul = $_POST['judul'];
    $sub_judul = $_POST['sub_judul'];
    $isi = $_POST['isi'];

    $result = mysqli_query($con, "UPDATE wawasan SET tipe='$tipe', judul='$judul', sub_judul='$sub_judul', isi='$isi' WHERE id='$id'");
    
    if($result) { 
        echo ("<script> window.alert('Berhasil Edit Data'); window.location.href='data-wawasan.php'; </script>");
    } else { 
        echo ("<script> window.alert('Gagal Edit Data'); window.location.href='data-wawasan.php'; </script>");
    }
}
?>

<?php include('layout/footer.php') ?>