<?php include('layout/header.php') ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Import Data Wawasan</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Import Data Wawasan</h6>
                </div>
                <div class="card-body">
                    <form action="import-data-wawasan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Upload File <small class="text-danger">(Format : csv/xlsx)</small></label>
                            <input type="file" class="form-control" name="berkas_excel">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('koneksi.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {

    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);

    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }

    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);

    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    for($i = 1;$i < count($sheetData);$i++)
    {
        $tipe = $sheetData[$i]['1'];
        $judul = $sheetData[$i]['2'];
        $sub_judul = $sheetData[$i]['3'];
        $isi = $sheetData[$i]['3'];
        $result = mysqli_query($con,"insert into wawasan (id,tipe,judul,sub_judul,isi) values ('','$tipe','$judul','$sub_judul','$isi')");

        if($result) { 
            echo ("<script> window.alert('Berhasil Import Data'); window.location.href='data-wawasan.php'; </script>");
        } else { 
            echo ("<script> window.alert('Gagal Tambah Data'); window.location.href='import-data-wawasan.php'; </script>");
        }
    }
}
?>

<?php include('layout/footer.php') ?>