<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>EnvioSMS</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">
</head>

<body style="background: #B96060;">
  <div id="Head">
    <a href="../Home/index.php">
      <img src="assets/img/home.png" style="margin-left: 10px;"></a>

    <a href="../SMS/index.php">
      <img src="assets/img/volte.png" style="margin-left: 10px;"></a>

  </div>

  <div class="d-flex justify-content-center align-items-center" id="img">
    <a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center text-white" id="Title">
    <p style="font-family: Roboto;font-weight: bold;font-size: 20px;">Enviar SMS</p>
  </div>
  
  <div class="container-fluid" id="Main"
    style="background: var(--bs-body-bg);display: block;
    position: relative;width: 60%;margin-top: 2%;margin-left: 20%;border: 1px solid var(--bs-emphasis-color);">

    <div class="d-grid justify-content-center align-items-center" id="Primary"
      style="background: var(--bs-body-bg);margin-bottom: 1px;">

      <form action="sendsms.php" method="GET" class="d-grid">

        <span class="text-center" style="font-family: Roboto;font-size: 20px;font-weight: bold;">User&nbsp;</span>
        <input class="d-flex m-auto text-center" type="text" id="user" name="user"
          style="border-radius: 10px;border-style: solid;">

        <span class="text-center" style="font-family: Roboto;font-size: 20px;font-weight: bold;">Senha</span>
        <input class="d-flex m-auto text-center" type="password" id="token" name="token"
          style="border-radius: 10px;border-style: solid;">

        <span class="text-center" style="font-size: 20px;font-family: Roboto;font-weight: bold;">Número</span>
        <input class="d-flex m-auto text-center" type="text" id="numero" name="numero"
          style="border-radius: 10px;border-style: solid;">

        <span style="width: 30%;font-size: 20px;font-family: Roboto;font-weight: bold;">Mensagem</span>
        <textarea id="msg" name="msg" style="border-radius: 10px;border-style: solid;"></textarea>

        </br>
        <img class="d-flex m-auto text-center" style="visibility: hidden;" 
        src="../assets/img/loading.gif" id="loading" height="20" width="20" />
    </div><!--Primary-->

    <div class="d-flex justify-content-center align-items-center align-content-center" 
    id="Secondary" style="background: #D9A7A7;padding-left: 2px;padding-right: 1px;
    margin-right: -12px; margin-left: -12px;margin-top: 91px;">

      <button class="btn btn-light" id="Enviar" type="submit" onclick="pesquisar()"
        style="margin-top: 10px;margin-bottom: 10px;border: 1px solid var(--bs-emphasis-color);
        font-family: Roboto;font-weight: bold;">Enviar</button>
    </div><!--Secondary-->
    </form>
  </div><!--Main-->

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
