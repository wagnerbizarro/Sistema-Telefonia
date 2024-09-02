<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Notas</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include("notas.php"); ?>

<body style="background: #B96060;">
  <div id="Head"><a href="../Home/index.php"><img src="assets/img/home.png"
        style="margin-left: 10px;"></a></div>
  <div class="d-flex justify-content-center align-items-center" id="img"><a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a></div>
  <div class="d-flex justify-content-center align-items-center" id="Title">
    <p class="text-white" style="font-family: Roboto;font-weight: bold;font-size: 20px;">Notas(7979)</p>
  </div>

  <div class="container-fluid" id="Main" style="background: var(--bs-body-bg);display: block;position: relative;
    width: 60%;margin-left: 20%;padding-bottom: 14px;margin-bottom: -4px;
    border: 1px solid var(--bs-emphasis-color);">

    <div id="Primary" style="background: var(--bs-body-bg);">
      <div class="table-responsive-lg border-2 border-dark">

        <div id="Button" style="margin-top: 5px;margin-bottom: 5px;">
          <button class="btn btn-light d-flex m-auto" type="reset" 
          style="font-weight: bold;font-family: Roboto;color: var(--bs-btn-disabled-color);
          border: 1px solid var(--bs-btn-disabled-color);margin-top: 5px;margin-bottom: 5px;" 
          onClick="window.location.reload();">Atualizar</button>

        </div>
        <table class="table">
          <thead class="table-dark bg-danger border-1">
            <tr>
              <th style="font-family: Roboto;">Cliente</th>
              <th style="font-family: Roboto;">Data/Hora</th>
              <th style="font-family: Roboto;">Nota</th>
            </tr>
          </thead>
          <tbody class="border-1 border-dark">

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[1]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[1]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[1]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[2]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[2]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[2]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[3]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[3]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[3]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[4]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[4]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[4]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[5]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[5]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[5]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[6]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[6]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[6]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[7]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[7]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[7]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[8]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[8]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[8]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[9]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[9]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[9]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[10]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[10]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[10]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[11]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[11]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[11]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[12]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[12]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[12]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[13]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[13]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[13]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[14]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[14]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[14]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[15]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[15]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[15]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[16]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[16]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[16]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[17]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[17]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[17]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[18]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[18]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[18]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[19]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[19]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[19]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[20]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[20]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[20]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[21]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[21]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[21]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[22]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[22]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[22]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[23]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[23]; ?></td>
              <td name="nota" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[23]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[24]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[24]; ?></td>
              <td name="nota24" class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[24]; ?></td>
            </tr>

            <tr>
              <td style="font-family: Roboto;"><?php echo $cliente[25]; ?></td>
              <td style="font-family: Roboto;"><?php echo $data[25]; ?></td>
              <td class="fw-bold Nota" style="font-family: Roboto;"><?php echo $valor[25]; ?></td>
            </tr>

          </tbody>
        </table>
      </div>
    </div><!--Primary-->

  </div><!--Main-->

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
