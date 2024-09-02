<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>CSP55</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include("csp55.php"); ?>

<body style="background: #B96060;">
  <div id="Head"><a href="../Home/index.php"><img src="assets/img/home.png"
        style="margin-left: 10px;"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center" id="img">
    <a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a>
  </div>

  <div class="d-grid justify-content-center align-items-center text-white" id="Title">
<button onclick="sobre()" style="width: 30%;margin-left: 30%;" type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="Clique e saiba mais">
  Sobre !
</button>    
<p style="font-family: Roboto;font-weight: bold;font-size: 20px;">Código de Seleção de Prestadora (55)</p>
  </div>

  <div class="container-fluid" id="Main"
  style="background: var(--bs-body-bg);display: block;position: relative;width:
  60%;margin-top: 2%;margin-left: 20%;border: 1px solid var(--bs-emphasis-color) ;">

    <div class="d-flex justify-content-center align-items-center align-content-center" id="Secondary"
    style="background: #D9A7A7;padding-left: 2px;padding-right: 1px;margin-right: -12px;
    padding-top: 10px;margin-left: -12px;padding-bottom: 6px;">

      <form action="" method="POST">

        <span style="margin-left: 10px;margin-top: 10px;font-family: Roboto;font-size: 20px;margin-bottom: 5px;">Assinante Adyl:&nbsp;</span>

        <input class="text-center" type="text" name="assinante" placeholder="5421218900"
          style="margin-right: 59px;margin-top: 10px;width: 15%;border-radius: 10px;
          border: 1px solid var(--bs-emphasis-color);margin-bottom: 5px;"required>

        <span style="margin-top: 10px;font-family: Roboto;font-size: 20px;
         margin-bottom: 5px;">Destino:&nbsp;</span>
        <input class="text-center" type="text" name="destino" placeholder="54999887766"
          style="margin-right: 59px;margin-top: 10px;width: 15%;border-radius: 10px;
          border: 1px solid var(--bs-emphasis-color);margin-bottom: 5px;"required>

        <button class="btn btn-light" type="submit" onclick="pesquisar()"
        style="border: 1px solid var(--bs-btn-disabled-color);font-family: Roboto;
        font-size: 20px;font-weight: bold;margin-right: 2px">Consultar</button>

        <img class="d-flex m-auto text-center" style="margin-right: 2px;visibility: hidden;"
          src="../assets/img/loading.gif" id="loading" height="20" width="20" />

      </form>


    </div> <!--Secondary-->

    <div class="d-grid justify-content-center" id="Primary"
      style="background: var(--bs-body-bg);
      margin-bottom: 1px;margin-top: 5px;">

      <span class="text-center rounded bg-dark text-white" id="Status"
        style="padding: 2px; font-family: Roboto;font-size: 20px;">
        <?php echo $csp;?>
      </span>

    </div><!--Primary-->
  </div><!--Main-->

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

