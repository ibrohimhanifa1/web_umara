<?php include('layout/header.php'); ?>
<?php include("vendor/fusioncharts/integrations/php/samples/includes/fusioncharts.php"); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik FusionChart</h6>
                </div>
                <div class="card-body">
                    <?php 
                    $hostdb = "localhost";
                    $userdb = "root";
                    $passdb = "";
                    $namedb = "umara";

                    $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

                    if ($dbhandle->connect_error) {
                        exit("There was an error with your connection: ".$dbhandle->connect_error);
                    }

                    $strQuery = "SELECT *, COUNT(id) AS jml_wawasan FROM wawasan GROUP BY(tipe)";

                    $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");

                    if ($result) {
                        $arrData = array(
                            "chart" => array(
                                "caption" => "Jumlah Wawasan Berdasarkan Tipe",
                                "showValues" => "0",
                                "theme" => "fusion"
                            )
                        );

                        $arrData["data"] = array();

                        while($row = mysqli_fetch_array($result)) {
                            array_push($arrData["data"], array(
                                "label" => $row["tipe"],
                                "value" => $row["jml_wawasan"]
                            )
                        );
                        }

                        $jsonEncodedData = json_encode($arrData);

                        $columnChart = new FusionCharts("column2D", "myFirstChart" , 700, 400, "chart-1", "json", $jsonEncodedData);

                        $columnChart->render();

                        $dbhandle->close();
                    }
                    ?>
                    <div class="col-lg-8 offset-lg-2">
                        <div id="chart-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('layout/footer.php'); ?>