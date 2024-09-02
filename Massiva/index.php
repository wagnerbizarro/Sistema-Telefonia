<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Massiva</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include("massiva.php"); ?>

<body style="background: #B96060;">
  <div id="Head">
    <a href="../Home/index.php">
      <img src="assets/img/home.png" 
      style="margin-left: 10px;"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center" id="img"><a href="../Home/index.php"><img
        src="assets/img/LogoAdylnet.png"></a></div>

  <div class="d-flex justify-content-center align-items-center text-white" id="Title">
    <p style="font-family: Roboto;font-weight: bold;font-size: 20px;">Massiva</p>
  </div>

  <div class="container-fluid" id="Main" style="background: var(--bs-body-bg);
    display: block;position: relative;
    width: 60%;margin-left: 20%;border: 1px solid var(--bs-emphasis-color);">

    <form action="" method="POST">

      <div class="d-grid justify-content-center align-items-center" id="Primary"
        style="background: var(--bs-body-bg);margin-bottom: 1px;">

        <div class="form-check"><input type="radio" name="status" id="ativar" value="1">
          <label for="ativar" style="font-family: Roboto;font-size: 20px;">Ativar</label>
        </div>

        <div class="form-check"><input type="radio" name="status" id="desativar" value="0" checked="checked">
          <label for="desativar" style="font-family: Roboto;font-size: 20px;">Desativar</label>

        </div>

        <span style="font-weight: bold;font-family: Roboto;font-size: 20px;
          padding-bottom: 1px;margin-top: 20px;">Tipo:</span>

        <div class="form-check"><input type="radio" name="tipo" id="cidade" value="1">
          <label for="cidade" style="font-family: Roboto;font-size: 20px;">Cidade</label>
        </div>

        <textarea rows="3" id="cidade" name="cidade" style="border-style: solid;"Placeholder="Nova Prata e Veranópolis e Caxias do Sul e Porto Alegre"></textarea>

        <div class="form-check"><input type="radio" name="tipo" id="geral" value="0" checked="checked">
          <label for="geral" style="font-family: Roboto;font-size: 20px;">Geral</label>

        </div>
        <img class="d-flex m-auto text-center" style="visibility: hidden;" src="../assets/img/loading.gif" id="loading"
          height="20" width="20" />
        <button class="btn btn-light" type="submit" onclick="pesquisar()" 
        style="border: 1px solid var(--bs-btn-disabled-color);font-family: Roboto;font-size: 20px;
        font-weight: bold;margin-top: 21px;padding-bottom: 1px;margin-bottom: -97px;">Aplicar</button>

      </div><!--Primary-->
    </form>

    <div class="d-flex justify-content-center align-items-center align-content-center" id="Secondary" 
     style="background: #D9A7A7;padding-left: 2px;padding-right: 1px;
     margin-top: 88px;margin-right: -12px;margin-left: -12px;padding-bottom: 1px;">

      <span id="Status" class="rounded bg-dark text-white"
        style="padding: 2px; font-family: Roboto;font-size: 20px; margin: 2px;">
        <?php echo $status." ".$tipo." ".$cidade;?>
      </span>
    </div><!--Secondary-->
  </div><!--Main-->

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
