<!--<link rel="stylesheet" href="../Css/home.css">
<link rel="stylesheet" href="Css/topo.css">-->
<script type="text/javascript" src="JS/scrollReveal.js"></script>
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Banner 1 -->
    <div class="carousel-inner" role="listbox">
        <div id="banner1" class="item active">
            <div class="row-fluid">
                <div id="bandaLarga" class="animated fadeInDownBig txtBanner">
                    <img src="Images/banner/bandaLarga.jpg">
                </div>
            </div>
            <div class="row-fluid">
                <div id="oferta" class="animated fadeInLeftBig txtBanner margemTop">
                    <img src="Images/banner/oferta.png">
                </div>
                <div id="mega25" class="animated fadeInUpBig txtBanner margemTop">
                    <img src="Images/banner/mega.png">
                </div>
            </div>
            <img id="imgBanner1" src="Images/banner1.jpg" alt="Chania" width="100%">
        </div>

        <!-- Banner 2 -->
        <div id="banner1" class="item">
            <div class="row-fluid">
                <div id="rede" class="animated fadeInDownBig txtBanner">
                    <img src="Images/banner/rede.png">
                </div>
            </div>
            <div class="row-fluid">
                <div id="fibra" class="animated fadeInLeftBig txtBanner margemTop">
                    <img src="Images/banner/fibra.png">
                </div>
            </div>
            <div class="row-fluid">
                <div id="confira" class="animated fadeInUpBig txtBanner margemTop">
                    <img src="Images/banner/confira.png">
                </div>
            </div>
            <div class="btnBanner animated fadeIn">
                <a href="planos"><button class="">Assine Já</button></a>
            </div>
            <img id="imgBanner1" src="Images/banner2.jpg" alt="Chania" width="100%">

        </div>

        <!-- Banner 3 -->
        <div id="banner1" class="item">
            <div class="row-fluid">
                <div id="rede" class="animated fadeInLeftBig txtBanner">
                    <img src="Images/banner/planos.jpg">
                </div>
            </div>
            <div class="row-fluid">
                <div id="fibra" class="animated fadeInRightBig txtBanner margemTop">
                    <img src="Images/banner/65preco.png">
                </div>
            </div>
            <div id="btnBanner3" class="btnBanner animated fadeIn">
                <a href="planos"><button class="">Assine Já</button></a>
            </div>
                <img id="imgBanner1" src="Images/banner3.jpg" alt="Chania" width="100%">
            </div>
        </div>
        <div class="triangle-down"></div>
</div>

<!-- Por que ser nosso cliente -->

<div id="nossoCliente" class="container">
    <div id="txtNossoCliente">
        <h1>POR QUE SER NOSSO CLIENTE?</h1>

        <p>Com a tecnologia de fibra óptica, oferecemos serviços de qualidade com agilidade e baixo custo.</p>
        <p>Oferecemos a empresas de pequeno, médio e grande porte, soluções de TI com atendimento especializado e dedicado.</p>
        <p>Trabalhamos para manter sempre um serviço estável e contíno com 100% de conexão em up-time, o que garante mais estabilidade e velocidade ao nosso serviço de banda.</p>
    </div>
    <div id="imgNossoCliente">
        <img src="Images/nossoCliente.png" style="width: 100%;">
    </div>
    <div id="setaNossoCliente" class="triangle-down"></div>

</div>


<!-- Planos de Banda Larga -->

<div id="planosHome" class="container">
    <div id="txtPlanosHome" class="col-lg-12">
        <h2>Planos de Banda Larga em destaque</h2>
        <p>Selecionamos nossos planos mais assinados, assim você <br>pode fazer parte da LinkCE.</p>
    </div>
    <div id="planosDestaque" class="">
        <div id="" class="col-lg-4 col-md-4">
            <div class="quadroPlano quadroG">
                <div class="verde quadroG">
                    <h2>15 Mega</h2>
                    <p>Residencial</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 75,90</h3>
                <hr>
                <h3>Consulte Instalação</h3>
                <a class="assinatura" tipoPlano="residencial" plano="15" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>

        <div id="" class="col-lg-4 col-md-4">
            <div class="quadroPlano quadroG">
                <div class="verde quadroG">
                    <h2>35 Mega</h2>
                    <p>Residencial</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 99,90</h3>
                <hr>
                <h3>Consulte Instalação</h3>
                <a class="assinatura" tipoPlano="residencial" plano="35" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
            </div>
        </div>

        <div id="" class="col-lg-4 col-md-4">
            <div class="quadroPlano quadroG">
                <div class="verde quadroG">
                    <h2>50 Mega</h2>
                    <p>Residencial</p>
                </div>
                <h3>Ilimitada</h3>
                <hr>
                <h3>R$ 139,90</h3>
                <hr>
                <h3>Consulte Instalação</h3>
                <a class="assinatura" tipoPlano="residencial" plano="50" data-toggle="modal" data-target="#contrato" href=""><button class="btnPlanos">Assine Já</button></a>
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
                                <option cidade="nenhuma" value="">Selecione um bairro *</option>
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




