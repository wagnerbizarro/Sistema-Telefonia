<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Incidentes</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script type="text/javascript" src="../assets/js/script.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="data:../assets/icons/favicon.ico">
  <link rel="icon" type="image/x-icon" href="../assets/icons/favicon.ico">

</head>
<?php include ("incidentes.php") ?>

<body style="background: #B96060;">
  <div id="Head"><a href="../Home/index.php"><img src="assets/img/home.png"
        style="margin-left: 10px;"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center" id="img">
    <a href="../Home/index.php"><img src="assets/img/LogoAdylnet.png"></a>
  </div>

  <div class="d-flex justify-content-center align-items-center text-white" id="Title">
    <p style="font-family: Roboto;font-weight: bold;font-size: 20px;">Incidentes</p>
  </div>

  <div class="container-fluid" id="Main" 
  style="background: var(--bs-body-bg);display: block;position: relative;width:
  60%;margin-top: 2%;margin-left: 20%;border: 1px solid var(--bs-emphasis-color) ;">

    <div class="d-block center-block" id="Secondary"
    style="background: #D9A7A7;padding-left: 2px;padding-right: 1px;
    margin-right: -12px;padding-top: 10px;margin-left: -12px;padding-bottom: 6px;">

      <form action="" method="POST" class="mx-auto">

        <select id="contrato" name="contrato" class="form-select mx-auto" 
        style="width: 50%; margin-bottom: 2px;">
          <option selected>Contrato</option>
          <option value="fone">Adyl Fone (CPF)</option>
          <option value="ddr">Ady DDR (CNPJ)</option>
          <option value="uniq">Adyl UNIQ (PABX)</option>
        </select>

        <select id="problema" name="problema" class="form-select mx-auto" 
        style="width: 50%; margin-bottom: 2px;">
          <option selected>Problema</option>
          <option value="naofaz">Não Faz</option>
          <option value="naorecebe">Não Recebe</option>
          <option value="outro">Outro</option>
        </select>

        <!--PABX!-->
        <div id="pbx" class="d-block center-block mx-auto" 
        style="width: 50%; margin-top: 5px; margin-bottom: 5px;">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="EntreRamais:OK" name="ramais" id="ramais">
            <label class="form-check-label" for="ramais">
              LIGAÇÂO ENTRE RAMAIS OK
            </label>
          </div>
        </div>

        <!--Geral!-->
        <div id="geral" class="d-block center-block mx-auto" 
        style="width: 50%; margin-top: 5px; margin-bottom: 5px;">

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="PON:OK" name="pon" id="pon">
            <label class="form-check-label" for="pon">
              ONU COM LINK(PON)
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="ATIVO:OK" name="ativo" id="name">
            <label class="form-check-label" for="ativo">
              CLIENTE ATIVO(SEM BLOQUEIOS)
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="TOM:OK" name="tom" id="tom">
            <label class="form-check-label" for="tom">
              TELEFONE COM TOM DE LINHA
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Equip.Reiniciados:OK" name="equipamentos"
              id="equipamentos">
            <label class="form-check-label" for="equipamentos">
              EQUIPAMENTOS REINICIADOS
            </label>
          </div>

        </div><!--Geral-->

        <!--Completamento !-->
        <div id="completamento" class="d-block center-block mx-auto" style="width: 50%;">

          <div class="input-group mb-1">
            <span id="span-data" style="font-weight: bold;">Data&nbsp;</span>
            <input class="text-center" id="data" type="date" name="data"
              style="border-radius: 10px;border: 1px none var(--bs-emphasis-color); margin-bottom: 3px;margin-right: 2px;">
          </div>

          <div class="input-group mb-1">
            <span id="span-data" style="font-weight: bold;">Hora&nbsp;</span>
            <input class="text-center" id="hora" type="time" name="hora"
              style="border-radius: 10px;border: 1px none var(--bs-emphasis-color); margin-bottom: 3px;">
          </div>

          <div class="input-group mb-1">
            <span class="input-group-text">Contato Cliente</span>
            <input type="text" class="form-control" name="contato" placeholder="54999887766">
          </div>

          <div class="input-group mb-1">
            <span class="input-group-text">Origem</span>
            <input type="text" class="form-control" name="origem" placeholder="5421218900">
          </div>

          <div class="input-group mb-1">
            <span class="input-group-text">Destino</span>
            <input type="text" class="form-control" name="destino" placeholder="54999887766, 5132110101">
          </div>

        </div><!--Completamento-->

        <!--Completamento Nao Faz !-->
        <div id="completamento-nao-faz" class="d-block center-block mx-auto" style="width: 50%;">
          <div class="input-group mb-1">
            <span class="input-group-text">Como o cliente discou</span>
            <input type="text" class="form-control" name="formato" placeholder="999887766">
          </div>

          <div class="input-group mb-1">
            <select name="retorno" class="form-select">
              <option selected>Retorno da Chamada</option>
              <option value="Ocupado">Tom de Ocupado</option>
              <option value="Numero nao existe">Número nao existe</option>
              <option value="Chamada nao permitida">Chamada nao permitida nesta area</option>
              <option value="Nenhum">Nenhum</option>
            </select>
          </div>

        </div><!--Nao faz-->

        <!--Outro!-->
        <div id="outro" class="d-block center-block mx-auto" style="width: 50%;">

          <div class="input-group  mx-auto">
            <span class="input-group-text">Descreva</span>
            <textarea class="form-control" name="descricao" id="descricao" wrap="hard"></textarea>
          </div>
        </div>

        <button id="salvar" class="btn btn-light d-block center-block mx-auto" type="submit"
          style="font-family: Roboto;font-size: 20px;font-weight: bold; margin-top: 3px;">Salvar</button>

        <button id="reiniciar" class="btn btn-light d-block center-block mx-auto" onClick="window.location.reload();"
          style="font-family: Roboto;font-size: 20px;font-weight: bold; margin-top: 3px;">Reiniciar</button>

      </form>

    </div><!--Secondary-->

    <div class="d-grid justify-content-center" id="Primary" style="background: var(--bs-body-bg);margin-top: 5px;">
      <!-- The button used to copy the text -->
      <!--<button onclick="copy()">Copy text</button>-->
      <span
        style="font-weight: bold;font-family: Roboto;font-size: 20px;margin-top: 1px;margin-right: 3px;margin-bottom: 10px;">
        Copiar-Colar MK:</span>
      <span id="result">
        <?php echo "$texto"; ?>
      </span>
    </div>
  </div><!--Main-->

  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
