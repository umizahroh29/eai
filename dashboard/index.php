<?php
include_once("database.php");

$connection = connect();

$healthData = [];
$activeData = [];
$lateGraduateData = [];
$regProblemData = [];

$healthQuery = "SELECT DISTINCT zona_tinggal,
                                COUNT(sehat) AS sehat,
                                COUNT(sakit) AS sakit
                FROM (SELECT nim,
                             zona_tinggal,
                             CASE WHEN kondisi = 'Sehat' THEN 1 END AS sehat,
                             CASE WHEN kondisi = 'Sakit' THEN 1 END AS sakit
                      FROM kesehatan) T
                GROUP BY zona_tinggal";
$healthResult = mysqli_query($connection, $healthQuery);

$i = 0;
if ($healthResult->num_rows > 0) {
    $data = [];
    while ($row = mysqli_fetch_assoc($healthResult)) {
        $data[$i]['zona_tinggal'] = $row['zona_tinggal'];
        $data[$i]['sehat'] = $row['sehat'];
        $data[$i]['sakit'] = $row['sakit'];

        $i++;
    }

    $healthData = $data;
}

$lateGraduateQuery = "SELECT DISTINCT semester, COUNT(nim) AS jumlah FROM `telat_lulus` GROUP BY semester";
$lateGraduateResult = mysqli_query($connection, $lateGraduateQuery);

$i = 0;
if ($lateGraduateResult->num_rows > 0) {
    $data = [];
    while ($row = mysqli_fetch_assoc($lateGraduateResult)) {
        $data[$i]['semester'] = $row['semester'];
        $data[$i]['jumlah'] = $row['jumlah'];

        $i++;
    }

    $lateGraduateData = $data;
}

$regProblemQuery = "SELECT DISTINCT alasan, COUNT(nim) AS jumlah FROM `tunggakan` GROUP BY alasan";
$regProblemResult = mysqli_query($connection, $regProblemQuery);

$i = 0;
if ($regProblemResult->num_rows > 0) {
    $data = [];
    while ($row = mysqli_fetch_assoc($regProblemResult)) {
        $data[$i]['no'] = $i + 1;
        $data[$i]['alasan'] = $row['alasan'];
        $data[$i]['jumlah'] = $row['jumlah'];

        $i++;
    }

    $regProblemData = $data;
}

$activeQuery = "SELECT COUNT(tak_kurang)             AS tak_kurang,
                       COUNT(tak_lebih)              AS tak_lebih,
                       COUNT(tak_kurang_sudah_lomba) AS tak_kurang_sudah_lomba,
                       COUNT(tak_kurang_tidak_lomba) AS tak_kurang_tidak_lomba,
                       COUNT(tak_lebih_sudah_lomba)  AS tak_lebih_sudah_lomba,
                       COUNT(tak_lebih_tidak_lomba)  AS tak_lebih_tidak_lomba
                FROM (SELECT CASE WHEN tak < 60 THEN 1 END                        AS tak_kurang,
                             CASE WHEN tak >= 60 THEN 1 END                       AS tak_lebih,
                             CASE WHEN tak < 60 AND lomba IS NULL THEN 1 END      AS tak_kurang_tidak_lomba,
                             CASE WHEN tak < 60 AND lomba IS NOT NULL THEN 1 END  AS tak_kurang_sudah_lomba,
                             CASE WHEN tak >= 60 AND lomba IS NOT NULL THEN 1 END AS tak_lebih_sudah_lomba,
                             CASE WHEN tak >= 60 AND lomba IS NULL THEN 1 END     AS tak_lebih_tidak_lomba
                      FROM keaktifan) T";
$activeResult = mysqli_query($connection, $activeQuery);

if ($activeResult->num_rows > 0) {
    $data = [];
    while ($row = mysqli_fetch_assoc($activeResult)) {
        $data['tak_kurang'] = $row['tak_kurang'];
        $data['tak_lebih'] = $row['tak_lebih'];
        $data['tak_kurang_sudah_lomba'] = $row['tak_kurang_sudah_lomba'];
        $data['tak_kurang_tidak_lomba'] = $row['tak_kurang_tidak_lomba'];
        $data['tak_lebih_sudah_lomba'] = $row['tak_lebih_sudah_lomba'];
        $data['tak_lebih_tidak_lomba'] = $row['tak_lebih_tidak_lomba'];

        $i++;
    }

    $activeData = $data;
}

$healthData = json_encode($healthData);
$activeData = json_encode($activeData);
$lateGraduateData = json_encode($lateGraduateData);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <!-- bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="m-5">
    <h3 align="center">Dashboard Kemahasiswaan</h3>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <h4 align="center">Statistik Kesehatan Mahasiswa di Masa Pandemi</h4>
            <canvas id="healthChart"></canvas>
        </div>
        <div class="col-sm-6">
            <h4 align="center">Statistik Keterlambatan Kelulusan</h4>
            <canvas id="lateGraduateChart"></canvas>
        </div>
    </div>
    <hr>
    <div class="row mt-5">
        <div class="col-sm-6">
            <h4 align="center">Statistik Keaktifan Mahasiswa</h4>
            <canvas id="activeChart"></canvas>
        </div>
        <div class="col-sm-6">
            <h4 align="center">Data Tunggakan Mahasiswa</h4>
            <table class="table table-sm">
                <thead>
                <tr>
                    <td>No</td>
                    <td>Alasan Tunggakan</td>
                    <td>Jumlah Mahasiswa</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($regProblemData as $data) { ?>
                    <tr>
                        <td><?php echo $data['no'] ?></td>
                        <td><?php echo $data['alasan'] ?></td>
                        <td><?php echo $data['jumlah'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

<script>
  let healthData = JSON.parse('<?php echo $healthData ?>')
  let activeData = JSON.parse('<?php echo $activeData ?>')
  let lateGraduateData = JSON.parse('<?php echo $lateGraduateData ?>')

  $(function () {
    getHealthData()
    getLateGraduateData()
    getActiveData()
  });

  function getHealthData() {
    let labels = []
    let sick = []
    let healthy = []
    let healthyColor = []
    let sickColor = []
    for (let i = 0; i < healthData.length; i++) {
      if (labels.indexOf(healthData[i].zona_tinggal) < 0) {
        labels.push(healthData[i].zona_tinggal)
      }

      healthy.push(healthData[i].sehat)
      healthyColor.push('rgba(72, 201, 176)')
      sick.push(healthData[i].sakit)
      sickColor.push('rgba(236, 112, 99)')
    }

    let ctx = $('#healthChart');
    let data = {
      labels: labels,
      datasets: [
        {
          label: "Sehat",
          backgroundColor: healthyColor,
          borderColor: healthyColor,
          borderWidth: 2,
          data: healthy,
        },
        {
          label: "Sakit",
          backgroundColor: sickColor,
          borderColor: sickColor,
          borderWidth: 2,
          data: sick,
        }
      ]
    };

    new Chart(ctx, {
      type: 'bar',
      data: data,
    });
  }

  function getLateGraduateData() {
    let labels = []
    let dataCount = []
    for (let i = 0; i < lateGraduateData.length; i++) {
      if (labels.indexOf(lateGraduateData[i].semester) < 0) {
        labels.push('Semester ' + lateGraduateData[i].semester)
      }

      dataCount.push(lateGraduateData[i].jumlah)
    }

    let ctx = $('#lateGraduateChart');
    let data = {
      labels: labels,
      datasets: [{
        data: dataCount,
        backgroundColor: [
          'rgba(72, 201, 176)',
          'rgba(93, 173, 226)',
          'rgba(165, 105, 189)',
          'rgba(235, 152, 78)',
          'rgba(236, 112, 99)'
        ],
      }]
    };

    new Chart(ctx, {
      type: 'pie',
      data: data,
    });
  }

  function getActiveData() {
    let ctx = $('#activeChart');
    let data = {
      labels: [
        'TAK Tidak Memenuhi Standar',
        'TAK Memenuhi Standar',
        'TAK Tidak Memenuhi Standar & Ikut Lomba',
        'TAK Tidak Memenuhi Standar & Tidak Ikut Lomba',
        'TAK Memenuhi Standar & Ikut Lomba',
        'TAK Memenuhi Standar & Tidak Ikut Lomba'
      ],
      datasets:
        [{
          data: [activeData.tak_lebih, activeData.tak_kurang, '', '', '', ''],
          backgroundColor: [
            'rgba(72, 201, 176)',
            'rgba(236, 112, 99)',
            'rgba(235, 152, 78)',
            'rgba(123, 36, 28)',
            'rgba(39, 174, 96)',
            'rgba(93, 173, 226)'
          ],
        }, {
          data: ['', '', activeData.tak_kurang_sudah_lomba, activeData.tak_kurang_tidak_lomba, activeData.tak_lebih_sudah_lomba, activeData.tak_lebih_tidak_lomba],
          backgroundColor: [
            'rgba(72, 201, 176)',
            'rgba(236, 112, 99)',
            'rgba(235, 152, 78)',
            'rgba(123, 36, 28)',
            'rgba(39, 174, 96)',
            'rgba(93, 173, 226)'
          ],
        }]
    };

    new Chart(ctx, {
      type: 'doughnut',
      data: data,
    });
  }
</script>
</html>
