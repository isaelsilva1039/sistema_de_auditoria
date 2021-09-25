<?php
session_start();
require_once '../../autoload.php';
@$usuario = $_SESSION['usuario'];
$login = new Login();
$pagarultimoRegisto = new PegaUltimoRegisto;
$exibirRelatorio = new ExibirPedido();
$cadastro = new Cadastro();
$login->validaUsuarioLOgado($usuario);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Dashboard</title>
    <?php
require 'head_css.html';
?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="cadastros.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>

                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../CoolAdmin-master/images/icon/logo-mini.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">

                            </ul>
                        </li>
                        <li>
                            <a href="cadastros.php?cadastro_filial">
                                <i class="fas fa-chart-bar"></i>Cadastrar Filial</a>
                        </li>
                        <li>
                            <a href="cadastros.php?cadastro_erros_aereo">
                                <i class="fas fa-chart-bar"></i>Cadastrar Erros Aereo</a>
                        </li>

                        <!--
                     <li>
                         <a href="cadastros.php?cadastro_patrimonio">
                             <i class="fas fa-desktop"> </i>Cadastrar Patrimonio</a>
                     </li>

                     <li>
                         <a href="cadastros.php?cadastro_receita_ofertas">
                             <i class="far fa-money-bill-alt"> </i>Dizimos e Ofertas</a>
                     </li>

                      <li>
                         <a href="table.html">
                             <i class="fas fa-table"></i>Tables</a>
                     </li>
                     <li>
                         <a href="form.html">
                             <i class="far fa-check-square"></i>Forms</a>
                     </li>
                     <li>
                         <a href="calendar.html">
                             <i class="fas fa-calendar-alt"></i>Calendar</a>
                     </li>
                     <li>
                         <a href="map.html">
                             <i class="fas fa-map-marker-alt"></i>Maps</a>
                     </li>
                     <li class="has-sub">
                         <a class="js-arrow" href="#">
                             <i class="fas fa-copy"></i>Pages</a>
                         <ul class="list-unstyled navbar__sub-list js-sub-list">
                             <li>
                                 <a href="login.html">Login</a>
                             </li>
                             <li>
                                 <a href="register.html">Register</a>
                             </li>
                             <li>
                                 <a href="forget-pass.html">Forget Password</a>
                             </li>
                         </ul>
                     </li>
                     <li class="has-sub">
                         <a class="js-arrow" href="#">
                             <i class="fas fa-desktop"></i>UI Elements</a>
                         <ul class="list-unstyled navbar__sub-list js-sub-list">
                             <li>
                                 <a href="button.html">Button</a>
                             </li>
                             <li>
                                 <a href="badge.html">Badges</a>
                             </li>
                             <li>
                                 <a href="tab.html">Tabs</a>
                             </li>
                             <li>
                                 <a href="card.html">Cards</a>
                             </li>
                             <li>
                                 <a href="alert.html">Alerts</a>
                             </li>
                             <li>
                                 <a href="progress-bar.html">Progress Bars</a>
                             </li>
                             <li>
                                 <a href="modal.html">Modals</a>
                             </li>
                             <li>
                                 <a href="switch.html">Switchs</a>
                             </li>
                             <li>
                                 <a href="grid.html">Grids</a>
                             </li>
                             <li>
                                 <a href="fontawesome.html">Fontawesome Icon</a>
                             </li>
                             <li>
                                 <a href="typo.html">Typography</a>
                             </li>
                         </ul>
                     </li> -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'header.php';?>
            <!-- HEADER DESKTOP-->
            <!-- caso tenha um pedido em digitação, redireciona pra tela que tem o pedido em digitação -->
            <?php

//caso o cadastro de filial estiver ok
if (isset($_GET['ok'])) {
    echo '<!DOCTYPE html>';
    echo '<html xmlns="http://www.w3.org/1999/xhtml">';
    echo '<head>';
    echo '   <meta http-equiv="refresh" content="2; url=http:cadastros.php?cadastro_filial">';
    echo '</head>';
    echo '<body class="msg" onload="alert("Cadastrado com sucesso");">';
    echo '<a href="http:../views/painel/cadastros.php?cadastro_filial" ></a>';
    echo '<button id="payment-button" type="submit"';
    echo 'class="btn btn-lg btn-info btn-block">';
    echo '<i class="fa fa-check-circle fa-lg"></i>';
    echo '<span id="payment-button-amount">Filial Cadastrada</span>';
    echo '<span id="payment-button-sending"';
    echo 'style="display:none;">Sending…</span>';
    echo '</button>';
    echo '</body>';
    echo '</html>';
}

if (isset($_GET['cadastro_filial'])) {
    ?>
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card aumento">
                                        <div class="card-header">Cadastrar Filial</div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Dados Filial</h3>
                                            </div>
                                            <hr>
                                            <form action="../../model/routerCadastroFilial.php" method="post" novalidate="novalidate">

                                                <div class="form-group">
                                                    <label for="I0_FILIAL" class="control-label mb-1">ID FILIAL</label>
                                                    <input id="D0_FILIAL" name="I0_FILIAL" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>

                                                <div class="form-group has-success">
                                                    <label for="D0_FILIAL" class="control-label mb-1">DESCRIÇÃO</label>
                                                    <input id="D0_FILIAL" name="D0_FILIAL" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="quantidade" class="control-label mb-1">DESCRISCRÇAO</label>
                                                    <input id="D0_CESCRCAO" name="D0_CESCRCAO" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="D0_SIGLA" class="control-label mb-1">SIGLA</label>
                                                            <input id="D0_SIGLA" name="D0_SIGLA" type="text" class="form-control cc-exp" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year">
                                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                        </div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                    <div class="col-6">
                                                        <label for="valor" class="control-label mb-1">NUMERO CLIENTE</label>
                                                        <div class="input-group">
                                                            <input id="D0_CLIENTE" id="D0_CLIENTE" name="D0_CLIENTE" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor1()" autocomplete="off">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="D0_FORNERCEDOR" class="control-label mb-1">NUMERO FORNECEDOR</label>
                                                        <div class="input-group">
                                                            <input id="D0_FORNERCEDOR" id="D0_FORNERCEDOR" name="D0_FORNERCEDOR" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor1()" autocomplete="off">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="D0_REGIONAL" class="control-label mb-1">REGIONAL</label>
                                                        <div class="input-group">
                                                            <input id="D0_REGIONAL" id="D0_REGIONAL" name="D0_REGIONAL" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor1()" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Salvar</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        <?php }?>
                        <!-- MAIN CONTENT-->
                        <?php
if (isset($_GET['erro'])) {
    include 'erro.php';
}
if (isset($_GET['voceTemUmpedidoEmAndamento'])) {
    include 'msg_tela.php';
}

if (isset($_GET['preenchaTodosOsCampos'])) {
    include 'msg_tela_campos_vazio.php';
}

// chamar tela de resumo de erro pra cadastra uma nova auditoria
if (isset($_GET['cadastro_erros_aereo'])) {
    include 'cadastraResumoAuditoria.php';
}?>
                        <!-- pedido de auditoria chmart tela de cadasteo de erro por objeto -->
                        <?php
if (isset($_GET['pedidoDeAuditoriaEmAndamento'])) {
    $pedido = $pagarultimoRegisto->pegarUltimoIdPorUsuarioLogado($_SESSION['usuario'])[0];
    $filial = $pagarultimoRegisto->pegarUltimoIdPorUsuarioLogado($_SESSION['usuario'])[4]; // esse numero e fererente a posição da filial na tabela
    include 'telaCadastroPedido.php';
}?>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php require 'footJavascrip.html';?>

</body>
<script>
    function valor() {
        cifra = "R$ "
        if (document.getElementById('mascara').value.length == "0") {
            document.getElementById('mascara').value = cifra
        }
        if (document.getElementById('mascara').value.length == "4") {
            document.getElementById('mascara').value += "."
        }
        if (document.getElementById('mascara').value.length == "8") {
            document.getElementById('mascara').value += ","
        }
        if (document.getElementById('mascara').value.length == "12") {
            document.getElementById('mascara').value += ","
        }
    }

    function valor1() {
        cifra = "R$ "
        if (document.getElementById('valorpatrimonio').value.length == "0") {
            document.getElementById('valorpatrimonio').value = cifra
        }
        if (document.getElementById('valorpatrimonio').value.length == "4") {
            document.getElementById('valorpatrimonio').value += "."
        }
        if (document.getElementById('valorpatrimonio').value.length == "8") {
            document.getElementById('valorpatrimonio').value += ","
        }
        if (document.getElementById('valorpatrimonio').value.length == "12") {
            document.getElementById('valorpatrimonio').value += ","
        }
    }
</script>

</html>
<!-- end document-->