<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br" style="border-style: none;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>SMS</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include("return_sms.php"); ?>

<body style="background: #B96060;">
  <div id="Head"><a href="../Home/index.php"><img src="assets/img/home.png"
        style="margin-left: 10px;"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center" id="img">
    <a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center" id="Title">
    <p class="text-white" style="font-family: Roboto;font-weight: bold;font-size: 20px;">SMS</p>
  </div>

  <div class="container-fluid" id="Main" 
        style="background: var(--bs-body-bg);display: block;position: relative;width: 60%;
        margin-left: 20%;padding-bottom: 18px;border: 1px solid var(--bs-emphasis-color) ;">

    <div class="d-flex justify-content-end align-items-center" id="Secondary"
      style="background: #D9A7A7;margin-left: -12px;margin-right: -12px;
      margin-bottom: 90px;padding-bottom: 40px;height: 75px;">

      <a href="../EnvioSMS/index.php" class="btn btn-light" type="button" 
      style="text-decoration: none;border-radius: 10px;border: 1px solid var(--bs-btn-disabled-color);
            padding-right: 14px;margin-right: 4px;margin-top: 15px;font-family: Roboto;">Enviar</a>
    </div> <!--Secondary-->

    <form action="" method="POST">

      <div class="d-grid" id="Enviados-Periodo" 
      style="background: var(--bs-body-bg);height: 120px;border-width: 1px;border-style: solid;
            margin-top: -1px;">

        <div id="Data" style="border-width: 1px;border-style: none;">
          <span style="font-size: 20px;font-family: Roboto;font-weight: bold;width: 40%;">Enviados no período</span>

          <span style="font-family: Roboto;font-size: 20px;">De:&nbsp;</span>
          <input id="Data_Inicio" type="date" name="dataini" style="margin-right: 15px;font-family: Roboto;" required>

          <span style="font-family: Roboto;font-size: 20px;">Até:&nbsp;</span>
          <input id="Data_Fim" type="date" name="datafim" style="margin-right: 15px;font-family: Roboto;" required>

          <button class="btn btn-light d-grid float-end" type="submit" 
          style="border: 1px solid var(--bs-btn-disabled-color);border-radius: 10px;
                padding-right: 7px;font-family: Roboto;margin: 2px;">Buscar</button>

          <span id="Status" class="rounded bg-dark text-white" 
          style="padding: 2px;font-family: Roboto;font-weight: bold;font-size:20px;"><?php echo $count; ?></span>
        </div>

    </form>

  </div> <!--Main-->

  <div class="d-flex justify-content-center align-items-center" id="Ultimos-Enviados" 
    style="background: var(--bs-body-bg);margin-top: 49px;
    border: 1px solid var(--bs-emphasis-color);margin-bottom: -4px;padding-bottom: 8px;">

    <div class="d-grid justify-content-center align-items-center">
      
    <span style="font-size: 20px;font-family: Roboto;font-weight: bold;">Ultimos enviados</span>

      <div>
        <span
          style="margin-right: 5px;font-family: Roboto;font-size: 20px;font-weight: bold;font-style: italic;">Numero:</span>
        <span id="numero" style="font-family: Roboto;font-size: 20px;"><?php echo $number; ?></span>
      </div>

      <div>
        <span
          style="margin-right: 5px;font-family: Roboto;font-size: 20px;font-weight: bold;font-style: italic;">Data:</span>
        <span id="Data" style="font-size: 20px;font-family: Roboto;"><?php echo $dt; ?></span>
      </div>

      <div>
        <span
          style="margin-right: 5px;font-size: 20px;font-family: Roboto;font-weight: bold;font-style: italic;">Mensagem:</span>
        <span id="Mensagem" style="font-family: Roboto;font-size: 20px;"><?php echo $msg; ?></span>
      </div>

      <button class="btn btn-light" type="reset"
        style="border: 1px solid var(--bs-btn-disabled-color);
                border-radius: 10px;padding-right: 7px;font-family: Roboto;margin-top: 10px;width: 50%;" 
                onClick="window.location.reload();">Atualizar</button>
    </div>
  </div>

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
