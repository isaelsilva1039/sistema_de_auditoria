<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="form-group">
                
            <?php if($cadastro->ValidadePedidoEmdigitaCaoUsuarioLogado($_SESSION['usuario']) == 1){?>

                <label for="tipo_auditoria" class="control-label mb-1">Voce tem pedidos em Digitação</label>
                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"><a href="cadastros.php?pedidoDeAuditoriaEmAndamento">Click aqui</a></span>
                <?php }  ?>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="card aumento">
                        <div class="card-header">Cadastra Resumo De Auditoria</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Lançar Reusmo da Auditoria
                                </h3>
                            </div>
                            <hr>
                            <form action="../../model/routePedidoAuditoriaResumo.php" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label for="nome" class="control-label mb-1">usuario</label>
                                    <input id="nome" disabled name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>
                                    <input id="nome" hidden name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>
                                </div>
                                <div class="form-group has-success">
                                    <label for="i0_filial" class="control-label mb-1">Filial</label>
                                    <select class="form-control" name="i0_filial" aria-label="Default select example">
                                        <option selected disabled>Selecione
                                        </option>
                                        <option>Armazem mateus S.A CD-87</option>
                                        <option>Armazem mateus S.A CD-81</option>
                                        <option>Armazem mateus S.A CD-116</option>
                                        <option>Armazem mateus S.A CD-331</option>
                                        <option>Armazem mateus S.A CD-101</option>
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label for="d0_bloco" class="control-label mb-1">Bloco</label>
                                    <select class="form-control" name="d0_bloco" aria-label="Default select example">
                                        <option selected disabled>Selecione
                                        </option>
                                        <option value="Secos">Secos</option>
                                        <option value="Frios">Frios</option>
                                        <option value="">Hortifruti</option>
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label for="tipo_auditoria" class="control-label mb-1">Tipo Inventario</label>
                                    <select class="form-control" name="tipo_auditoria" aria-label="Default select example">
                                        <option selected disabled>Selecione a Filial
                                        </option>
                                        <option value="Inventario geral">Inventario geral</option>
                                        <option value="Auditoria de posição">Auditoria de posição</option>
                                        <option value="Limpeza do aereo">Limpeza do aereo</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="tipo_auditoria" class="control-label mb-1">Data</label>
                                            <input id="data" name="data" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="cid" class="control-label mb-1">Cidade</label>
                                        <div class="input-group">
                                            <input name="cid" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="rua" class="control-label mb-1">Rua</label>
                                        <div class="input-group">
                                            <input id="" name="rua" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="rua" class="control-label mb-1">Total De Objetos</label>
                                        <div class="input-group">
                                            <input id="total_objetos" name="total_objetos" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="objetos_nao_conforme" class="control-label mb-1">Objetos Não Encontrado</label>
                                        <div class="input-group">
                                            <input id="objetos_nao_conforme" name="objetos_nao_conforme" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                        </div>
                                        <!-- <input id="status" name="status" required placeholder="" type="status" class="form-control cc-cvc" value="digitado" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off"> -->
                                    </div><br><br><br>
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