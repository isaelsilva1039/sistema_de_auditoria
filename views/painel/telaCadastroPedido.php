<div class="main-content">
        <div class="form-group">
        <div class="section__content section__content--p30 ">
    <div class="table-responsive table-responsive-data2 font">
        <table class="table table-data2 font ">
            <thead class="font">
                <tr>
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>Pedido</th>
                    <th>Codigo Do auditor</th>
                    <th>Objeto</th>
                    <th>Cod Operador</th>
                    <th>Tipo</th>
                    <th>Data auditoria</th>
                    <th>Valor Desconto</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($arrayCon = $exibirRelatorio->pegarPedido($pedido) as $key):
?>
                    <tr class="tr-shadow">
                        <th></th>
                        <td class="font"><?php echo $id = $key['PEDIDO'] ?></td>
                        <td class=""><?php echo $key['CODIGO_AUDITOR'] ?></td>
                        <td class=" font"><?php echo $key['OBJETO'] ?></td>
                        <td class=" font"><?php echo $key['CODIGO_OPERADOR'] ?></td>
                        <td class=" font"><?php echo $key['TIPO_MOVIMENTO'] ?></td>
                        <td class=" font"><?php echo $key['data'] ?></td>
                        <td class=" font"><?php echo $key['VALOR_DESCONTO'] ?></td>
                        <form method="GET" action="../../model/routeDeleteObjeto.php">
                            <input name="id" type="text" hidden value="<?php echo $key['id'] ?>"></input>
                            <td class="item" data-toggle="tooltip" data-placement="top" title="Delete">

                                <button type="submit"><i class="zmdi zmdi-delete"></i></button>
                            </td>
                        </form>
                    <?php endforeach?>
                    <hr>
                    <div class="table-data-feature">
                    </div>
                    </td>
                    </tr>
            </tbody>
        </table>
    </div>
    <br>
</div>
<div>
</div>
        </div>
        <div class="container-fluid  fixede">
            <div class="row ">
                <div class="col-lg-6 aumento">
                    <div class="card aumento">
                        <div class="card-header">Erros do Aereo</div>
                        <div class="card-body">
                            <form action="../../model/routePedidoAuditotiaErroObjeto.php" method="post" novalidate="novalidate">
                                <input id="pedido" name="pedido" hidden type="text" placeholder="" value="<?php echo $pedido ?>" class="form-control" required>
                                <div class="form-group">
                                    <label for="usuario_logado" hidden class="control-label mb-1">usuario</label>
                                    <input id="usuario_logado" hidden disabled name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>
                                    <input id="usuario_logado" hidden name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>

                                </div>
                                <div class="form-group has-success">
                                    <div class="form-group" hidden>
                                        <label for="i0_filial" class="control-label mb-1">Filial</label>
                                        <input id="i0_filial" disabled name="i0_filial" type="text" placeholder="" value="<?php echo $filial ?>" class="form-control" required>
                                        <input id="i0_filial" hidden name="i0_filial" type="text" placeholder="" value="<?php echo $filial ?>" class="form-control" required>
                                        <div class="col-6">
                                            <label for="validade_errada" hidden class="control-label mb-1">validade errada</label>
                                            <div class="input-group">
                                                <input id="" name="validade_errada" hidden required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" required autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6" hidden>
                                            <label for="validade_coreta" hidden class="control-label mb-1">validade correta</label>
                                            <div class="input-group">
                                                <input id="validade_coreta" hidden name="validade_coreta" required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group">
                                                <label for="codigo_auditor" class="control-label mb-1">Codigo Auditor</label>
                                                <input id="data" name="codigo_auditor" type="numbler" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="" autocomplete="cc-exp" required>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label for="objeto" class="control-label mb-1">Objeto</label>
                                            <div class="input-group">
                                                <input name="objeto" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off" required>
                                            </div>
                                        </div>

                                        <!-- <div class="col-6" hidden>
                                            <label for="qtd_pedida" class="control-label mb-1">Qtd pedida</label>
                                            <div class="input-group">
                                                <input id="qtd_pedida" name="qtd_pedida" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6" hidden>
                                            <label for="qtd_encontrada" class="control-label mb-1">Qtd Encontrada</label>
                                            <div class="input-group">
                                                <input id="qtd_encontrada" name="qtd_encontrada" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div> -->

                                        <div class="col-2">
                                            <label for="codigo_operador" class="control-label mb-1">Codigo Operador</label>
                                            <div class="input-group">
                                                <input id="codigo_operador" name="codigo_operador" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" required onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label for="tipo_movimento" class="control-label mb-1">Tipo Movimento</label>
                                            <div class="input-group">
                                                <select class="form-control" name="tipo_movimento" aria-label="Default select example">
                                                    <option selected disabled>Selecione
                                                    </option>
                                                    <option>Validade</option>
                                                    <option>Quantidade</option>
                                                    <option>Objeto Trocado </option>
                                                    <option>Internado Errado</option>
                                                    <option>Produto não consta no Objeto</option>
                                                    <option>Produto não tem no objeto</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label for="data" class="control-label mb-1">Data Auditoria</label>
                                            <div class="input-group">
                                                <input id="" name="data" required placeholder="" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <label for="valor_desconto" class="control-label mb-1">Valor Desconto</label>
                                            <div class="input-group">
                                                <input id="valor_desconto" name="valor_desconto" required placeholder="" type="numbler" required class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <br><br><br>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" name="salva" value="salva" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Inserir</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                        <div class="">
                        <form method="POST" action="../../model/routeBotaoFinalizar.php">
                             <input id="valor_desconto" hidden name="pedido" required placeholder="" type="numbler" required class="form-control cc-cvc" value="<?php echo $pedido ?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                <?php if (!isset($id)) {?>
                                   <button type="submit" hidden value="Finalizar" class="btn btn-danger botao">
                                     <i class=""> Finalizar</i>
                              </button>
                        <?php }?>
                <?php if (isset($id)) {?>
                        <button type="submit" value="Finalizar" class="btn btn-danger botao">
                            <i class=""> Finalizar</i>
                        </button>
                    <?php }?>
                </a>
            </form>

            <form method="POST" action="../../model/routeDelete.php">
                <input id="cancelar" hidden name="pedido" required placeholder="" type="numbler" required class="form-control cc-cvc" value="<?php echo $pedido ?>" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                    <button type="submit" value="Cancelar" class="btn btn-danger botaoCancela">
                        <i class=""> Cancelar</i>
                </button></a>
            </form><br><br>
    </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>

