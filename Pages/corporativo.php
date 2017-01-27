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

                <a class="assinatura" tipoPlano="corporativo" plano="5" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
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

                <a class="assinatura" tipoPlano="corporativo" plano="10" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
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

                <a class="assinatura" tipoPlano="corporativo" plano="20" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
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

                <a class="assinatura" tipoPlano="corporativo" plano="30" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
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
                <input id="plano" type="hidden" value="">
                <input id="tipoPlano" type="hidden" value="">
                <div class="modal-body">
                    <ul class="row">
                        <li class="col-xs-6">
                            <input class="form-control" id="nome" onkeypress="return letras()" type="text"
                                   placeholder="Nome Completo *" name="nome" required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="email" type="email" placeholder="E-mail *" name="email"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="celular" type="tel" placeholder="Celular *" name="celular"
                                   required="required"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="telefone" type="tel" placeholder="Telefone"
                                   name="telefone"/>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control" id="rua" type="text"
                                   placeholder="Rua" name="rua" />
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel1" class="form-control" name="cidade">
                                <option cidade="nenhuma" value="">Selecione uma cidade *</option>
                                <option cidade="maracanau" id="lc" value="Maracanaú">Maracanaú</option>
                                <option cidade="maranguape" value="Maranguape">Maranguape</option>
                                <option cidade="pacatuba" value="Pacatuba">Pacatuba</option>
                                <option cidade="fortaleza" value="Fortaleza">Fortaleza</option>
                            </select>
                        </li>

                        <li class="col-xs-6">
                            <input class="form-control numero" onkeypress="return numeros()" id="numero" type="text"
                                   placeholder="Número" name="numero" />
                        </li>

                        <li class="col-xs-6">
                            <select required id="sel2" class="form-control" name="bairro">
                                <option value="">Selecione um bairro *</option>
                                <option cidade="maracanau" id="lc" value="Alto Alegre I">Alto Alegre I (Corporativo)</option>
                                <option cidade="maracanau" value="Alto Alegre II">Alto Alegre II</option>
                                <option cidade="maracanau" value="Alto da Mangueira">Alto da Mangueira</option>
                                <option cidade="maracanau" value="Antônio Justa">Antônio Justa</option>
                                <option cidade="maracanau" value="Boa Vista">Boa Vista</option>
                                <option cidade="maracanau" value="Cágado">Cágado</option>
                                <option cidade="maracanau" value="Coqueiral">Coqueiral</option>
                                <option cidade="maracanau" value="Centro">Centro</option>
                                <option cidade="maracanau" value="Cidade Nova">Cidade Nova</option>
                                <option cidade="maracanau" value="Furna da Onça(Parcial)">Furna da Onça(Parcial)</option>
                                <option cidade="maracanau" value="Jaçanaú (Parcial)">Jaçanaú (Parcial)</option>
                                <option cidade="maracanau" value="Jardim Bandeirantes">Jardim Bandeirantes</option>
                                <option cidade="maracanau" value="Jenipapeiro">Jenipapeiro</option>
                                <option cidade="maracanau" value="Jereissati">Jereissati</option>
                                <option cidade="maracanau" value="Luzardo Viana">Luzardo Viana</option>
                                <option cidade="maracanau" value="Mucunã">Mucunã</option>
                                <option cidade="maracanau" value="Novo Maracanaú">Novo Maracanaú</option>
                                <option cidade="maracanau" value="Novo Oriente (Parcial)">Novo Oriente (Parcial)</option>
                                <option cidade="maracanau" value="Pajuçara">Pajuçara</option>
                                <option cidade="maracanau" value="Pau-Serrado">Pau-Serrado</option>
                                <option cidade="maracanau" value="Piratininga">Piratininga</option>
                                <option cidade="maracanau" value="Santo Sátiro">Santo Sátiro</option>
                                <option cidade="maracanau" value="Siqueira">Siqueira</option>
                                <option cidade="maracanau" value="Timbó">Timbó</option>
                                <option cidade="maranguape" value="Aldeoma">Aldeoma</option>
                                <option cidade="maranguape" value="Centro (Parcial)">Centro (Parcial)</option>
                                <option cidade="maranguape" value="Cônego Raimundo Pinto">Cônego Raimundo Pinto</option>
                                <option cidade="maranguape" value="Novo Maranguape ">Novo Maranguape I</option>
                                <option cidade="maranguape" value="Novo Maranguape II">Novo Maranguape II</option>
                                <option cidade="maranguape" value="Outra Banda">Outra Banda</option>
                                <option cidade="maranguape" value="Parque Santa Fé (Parcial)">Parque Santa Fé (Parcial)</option>
                                <option cidade="maranguape" value="Parque São João">Parque São João</option>
                                <option cidade="maranguape" value="Tangueira (Parcial)">Tangueira (Parcial)</option>
                                <option cidade="pacatuba" value="Pavuna">Pavuna</option>
                                <option cidade="pacatuba" value="Pacatuba Sede">Pacatuba Sede</option>
                                <option cidade="pacatuba" value="Monguba">Monguba</option>
                                <option cidade="pacatuba" value="Senador Carlos Jereissati">Senador Carlos Jereissati</option>
                                <option cidade="pacatuba" value="Jereissati III">Jereissati III</option>
                                <option cidade="pacatuba" value="Vila das Flores">Vila das Flores</option>
                                <option cidade="pacatuba" value="Alto São João">Alto São João</option>
                                <option cidade="fortaleza" value="Planalto Cidade Nova">Planalto Cidade Nova</option>
                                <option cidade="fortaleza" value="Planalto Ayrton Senna<">Planalto Ayrton Senna</option>
                                <option cidade="fortaleza" value="Mondubim">Mondubim</option>
                                <option cidade="fortaleza" value="Parque Santa Rosa">Parque Santa Rosa</option>
                                <option cidade="fortaleza" value="Parque Presidente Vargas">Parque Presidente Vargas</option>
                                <option cidade="fortaleza" value="Conjunto Esperança">Conjunto Esperança</option>
                            </select>
                        </li>

                        <!--<li class="col-xs-6">
                            <input class="form-control complemento" type="text" placeholder="Bairro *"
                                   id="complemento" name="complemento" required="required"/>
                        </li>-->

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




