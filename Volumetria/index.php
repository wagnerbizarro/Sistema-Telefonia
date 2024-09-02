<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Volumetria</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include("volumetria.php"); ?>

<body style="background: #B96060;">
  <div id="Head"><a href="../Home/index.php"><img src="assets/img/home.png"
        style="margin-left: 10px;"></a></div>

  <div class="d-flex justify-content-center align-items-center" id="img">
    <a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a></div>

  <div class="d-flex justify-content-center align-items-center" id="Title">
    <p class="text-white" style="font-family: Roboto;font-weight: bold;font-size: 20px;">Volumetria</p>
  </div>

  <div class="container-fluid" id="Main"
    style="background: var(--bs-body-bg);display: block;position: relative;width: 60%;
    margin-top: 2%;margin-left: 20%;border: 1px solid var(--bs-emphasis-color) ;">

    <form action="" method="POST">

      <div class="d-grid" id="Secondary"
        style="background: #D9A7A7;padding-left: 2px;padding-right: 1px;
        margin-right: -12px; padding-top: 10px;margin-left: -12px;padding-bottom: 6px;">

        <div>
          <span
            style="font-family: Roboto;font-size: 20px;margin-top: 1px;margin-right: 3px;margin-bottom: 10px;">De:&nbsp;</span>
          <input id="Data_Inicio" type="date" name="dataini" style="border-radius: 10px;border: 1px none var(--bs-emphasis-color);font-family: Roboto;
            font-size: 20px;margin-top: 1px;margin-right: 10px;margin-bottom: 10px;" required>

          <span style="font-family: Roboto;font-size: 20px;;margin-top: 1px;margin-right: 3px;">Ate:&nbsp;</span>
          <input id="Data_Fim" type="date" name="datafim" style="border-radius: 10px;border: 1px none var(--bs-emphasis-color);font-family: Roboto;
            font-size: 20px;margin-top: 1px;margin-right: 50px;margin-bottom: 10px;" required>

          <button class="btn btn-light d-grid float-end" type="submit" onclick="pesquisar()"
            style="font-family: Roboto;font-size: 20px;font-weight: bold; margin: 2px;">Buscar</button>

        </div>
      </div><!--Secondary-->

      <div class="d-grid justify-content-center" id="Primary"
        style="background: var(--bs-body-bg);;margin-bottom: 1px;;margin-top: 5px;">

        <div class="form-check"><input type="radio" name="did" id="10355" value="5421218901" checked="checked"><label
            for="10355" style="font-family: Roboto; margin-left: 5px;">10355</label>
        </div>

        <div class="form-check"><input type="radio" name="did" id="0800" value="08006458900"><label for="0800"
            style="font-family: Roboto; margin-left: 5px;">08006458900</label>
        </div>

        <div class="form-check"><input type="radio" name="did" id="2121" value="5421218900"><label for="2121"
            style="font-family: Roboto; margin-left: 5px;">5421218900</label>
        </div>

        <div class="form-check"><input type="radio" name="did" id="3242" value="5432428900"><label for="3242"
            style="font-family: Roboto; margin-left: 5px;">5432428900</label>
        </div>

        <div class="form-check"><input type="radio" name="did" id="belluno" value="444444"><label for="belluno"
            style="font-family: Roboto; margin-left: 5px;">Belluno</label>
        </div>

        <div class="form-check"><input type="radio" name="did" id="teif" value="333333"><label for="teif"
            style="font-family: Roboto; margin-left: 5px;">TEIF</label>
        </div>
      </div><!--Primary-->
    </form>

    <div class="m-auto text-center">
      <span class="rounded bg-dark text-white text-center" id="Retorno"
        style="padding: 2px;font-family: Roboto;font-weight: bold;font-size:20px;">
        <?php echo $count;?>
      </span>
    </div>

  </div><!--Main-->
  <img class="d-flex m-auto text-center" style="visibility: hidden;" src="../assets/img/loading.gif" id="loading"
    height="20" width="20" />

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
