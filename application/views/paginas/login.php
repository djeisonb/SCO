<div class="row">
    <!-- Div utilizada para alinhar o formulário de login -->
    <div class="col-md-4 col-lg-4"></div>
    <!--*********************************************************************-->
    
    <!-- Div que contém o formulário de Login -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        Tem que fazer o rediceionamento em caso de login positivo
        <div class="well no-padding">
            <form id="login-form" class="smart-form client-form">
                <header>
                    Fazer Login
                </header>
                
                <fieldset>
                    <section>
                        <label class="label">Usuário</label>
                        <label class="input">
                            <i class="icon-append fa fa-user"></i>
                            <input type="text" id="usuario" required="" autofocus>
                            <b class="tooltip tooltip-top-right">
                                <i class="fa fa-user txt-color-teal"></i> 
                                Digite o seu usuário
                            </b>
                        </label>
                    </section>

                    <section>
                        <label class="label">Senha</label>
                        <label class="input">
                            <i class="icon-append fa fa-lock"></i>
                            <input type="password" id="senha" required="">
                            <b class="tooltip tooltip-top-right">
                                <i class="fa fa-lock txt-color-teal"></i> 
                                Digite a sua senha
                            </b>
                        </label>
                    </section>

                    <section>
                        <label class="checkbox">
                            <input type="checkbox" name="remember" checked="">
                            <i></i>Mantenha-me conectado</label>
                    </section>
                </fieldset>
                <footer>
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                </footer>
            </form>
        </div>
    </div>
    <!--*********************************************************************-->
    
    <!-- Div utilizada para alinhar o formulário de login -->
    <div class="col-md-4 col-lg-4"></div>
    <!--*********************************************************************-->
</div>
<script type="text/javascript">
    $(function(){
        /** Função desenvolvida para fazer o login via ajax **/
        $('#login-form').submit(function(e){
            e.preventDefault();
            
            usuario = $('#usuario').val();
            senha   = $('#senha').val();
            
            $.ajax({
                url: '<?php echo app_baseurl().'login/fazer_login'?>',
                type: 'POST',
                data: {usuario: usuario, senha: senha},
                dataType: 'json',
                success: function(sucesso)
                {
                    if(sucesso.erro)
                    {
                        msg_erro(sucesso.erro);
                    }
                    if(sucesso.grupo)
                    {
                        msg_sucesso(sucesso.grupo);
                    }
                },
                error: function()
                {
                    msg_erro('Ocorreu um erro. Tente mais tarde');
                }
            });
        });
    });
</script>