<div id="bgContatos">
<div id="containerContato">
    <h2>Contatos</h2>

    <form id="formContato" method="post">
        <div class="container-fluid">

            <!--<div class="alert alert-success alert-dismissible" id="emailSucesso" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Email enviado com sucesso!</strong>
            </div>-->
            <!--<div id="divEmailSucesso" class="container-fluid col-lg-12 form-group"><label id="lbEmailSucesso" class="control-label"></label></div>-->
            <div class="form-group">
                <label class="control-label">*Nome</label>
                <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required="required"/>
            </div>

            <div class="form-group">
                <label class="control-label">*E-mail</label>
                <input class="form-control" type="email" placeholder="example@email.com" id="email" name="email" required="required"/>
            </div>

            <div class="form-group">
                <label class="control-label">*Mensagem</label>
                <textarea class="form-control" rows="7" type="text" placeholder="Mensagem" id="mensagem" name="mensagem" required></textarea>
            </div>

            <div id="envio" class="form-group">
                <input class="btn btn-default" type="submit" text="Enviar" name="enviar" value="Enviar"/>
            </div>

        </div>

    </form>

    <!--<div class="col-lg-12 divMaior">
        <form id="formContato2">

            <div class="alert alert-success alert-dismissible" id="emailSucesso2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <strong>E-mail enviado com sucesso!</strong>
            </div>

            <div class="alert alert-info alert-dismissible" id="aguarde2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <strong>Aguarde...</strong>
            </div>

            <div class="alert alert-danger alert-dismissible" id="erro2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <strong>Erro ao enviar email. Tente novamente!</strong>
            </div>

            <label>*Nome</label>
            <input type="text" required class="form-control" id="nomeContato" name="nomeContato" placeholder="">

            <label>*Email</label>
            <input type="email" required class="form-control" id="emailContato" name="emailContato" placeholder="">

            <label>Endereço</label>
            <input type="text" class="form-control" id="enderecoContato" name="enderecoContato" placeholder="">

            <label>Telefone</label>
            <input type="tel" class="form-control" id="telefoneContato" name="telefoneContato" placeholder="">

            <label>*Mensagem</label>
            <textarea type="text" required class="form-control" id="mensagemContato" name="mensagemContato" placeholder=""></textarea>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <input type="reset" class="btn btn-primary" id="limpar" value="Limpar"/>
        </form>
        <label>
            * Campos de preenchimento obrigatório.
        </label>
    </div>
</div>-->
</div>
</div>