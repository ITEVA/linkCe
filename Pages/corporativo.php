<h2>Planos Corporativo</h2>
<div id="planosCorporativos" style="text-align: center;">
    <div class="row">
        <div class="col6">
            <div class="quadroPlano bgGray quadroG">
                <div class="verde quadroG">
                    <h2>5 Mega</h2>
                    <p>Corporativo</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 250,00</h3>
                <hr>
                <h3>Consulte Instalação</h3>

                <a data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>
        <div class="col6">
            <div class="quadroPlano bgGray quadroG">
                <div class="verde quadroG">
                    <h2>10 Mega</h2>
                    <p>Corporativo</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 400,00</h3>
                <hr>
                <h3>Consulte Instalação</h3>

                <a data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>
        <div class="col6">
            <div class="quadroPlano bgGray quadroG">
                <div class="verde quadroG">
                    <h2>20 Mega</h2>
                    <p>Corporativo</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 600,00</h3>
                <hr>
                <h3>Consulte Instalação</h3>

                <a data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>
        <div class="col6">
            <div class="quadroPlano bgGray quadroG">
                <div class="verde quadroG">
                    <h2>30 Mega</h2>
                    <p>Corporativo</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 750,00</h3>
                <hr>
                <h3>Consulte Instalação</h3>

                <a data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>
    </div>
</div>

<!----------------------------- INICIO MODAL ------------------------------>

<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Forneça seus dados para receber um orçamento</h4>
            </div>
            <form id="formContrato" method="post">
                <div class="modal-body">
                    <ul class="row">
                        <li class="col-xs-6">
                            <input class="form-control" id="nome" onkeypress="return letras()" type="text"
                                   placeholder="Nome Completo" name="nome" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="email" type="email" placeholder="E-mail" name="email"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="celular" type="tel" placeholder="Celular" name="celular"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="telefone" type="tel" placeholder="Telefone"
                                   name="telefone"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="rua" type="text" onkeypress="return letras()"
                                   placeholder="Rua" name="rua" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel1" class="form-control" name="bairro">
                                <option value="">Selecione um local</option>
                                <option id="lc" value="Maracanaú">Maracanaú</option>
                                <option value="Maranguape">Maranguape</option>
                                <option value="Pacatuba">Pacatuba</option>
                                <option value="Fortaleza">Fortaleza</option>
                            </select>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control numero" onkeypress="return numeros()" id="numero" type="text"
                                   placeholder="Número" name="numero" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control complemento" type="text" placeholder="Bairro"
                                   id="complemento" name="complemento"/>
                        </li>

                    </ul>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="botao" id="enviar" value="Enviar" name="enviar"/>
                    <input type="reset" class="botao" id="limpar" value="Limpar"/>
                </div>
            </form>
        </div>
    </div>
</div>

<!----------------------------- FIM MODAL ------------------------------>




