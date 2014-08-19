<?php
    if (!isset($pessoais))
    {
        ?>
        <div class="alert alert-block alert-warning">
            <h4 class="alert-heading">
                :(
            </h4>
            <p>
                Não foi possível resgatar os dados do associado
            </p>
        </div>
        <?php
    }
    else
    {
        foreach ($pessoais as $row)
        {
            ?>
            <form id="dados_usuario" class="smart-form" novalidate="novalidate">
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Nome</label>
                            <div>
                            	<input type="text" class="form-control" name="nome_associado" id="nome_associado" placeholder="Nome do associado" value="<?php echo $row->nome_associado?>" disabled="disabled">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">CPF</label>
                            <div>
                                <input type="text" class="form-control" name="cpf_associado" id="cpf_associado" placeholder="CPF" data-mask="999.999.999-99" data-mask-placeholder="*" value="<?php echo $row->cpf_associado?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Categoria da cota</label>
                            <div>
                                <select class="form-control" name="tipo_cota" id="tipo_cota" disabled="disabled"></select> <i></i>
                                <input type="hidden" id="tipoCota_cadastrada" value="<?php echo $row->tipo_cota?>">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Numero da Identidade</label>
                            <div>
                                <input type="text" class="form-control" name="numero_identidade" id="numero_identidade" placeholder="Numero da identidade" value="<?php echo $row->numero_identidade?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Data de expedição</label>
                            <div>
                                <input type="text" class="form-control" name="data_expedicao" id="data_expedicao" placeholder="Data de expedição" data-mask="99/99/9999" data-mask-placeholder="*" value="<?php echo date('d/m/Y', strtotime($row->data_expedicao))?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Órgão Emissor</label>
                            <div>
                                <input type="text" class="form-control" name="orgao_emissor" id="orgao_emissor"  placeholder="Órgão emissor" data-mask="aaa-aa" data-mask-placeholder="*" value="<?php echo $row->orgao_emissor?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Data de nascimento</label>
                            <div>
                                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento"  placeholder="Data de nascimento" data-mask="99/99/9999" data-mask-placeholder="*" value="<?php echo date('d/m/Y', strtotime($row->data_nascimento))?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Naturalidade</label>
                            <div>
                                <input type="text" class="form-control" name="naturalidade" id="naturalidade" placeholder="Naturalidade" value="<?php echo $row->naturalidade?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Estado</label>
                            <div>
                                <select class="form-control" name="estado" id="estado" disabled="disabled"></select> <i></i>
                                <input type="hidden" id="estado_cadastrado" value="<?php echo $row->estado?>">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Nacionalidade</label>
                            <div>
                                <select class="form-control" name="nacionalidade" id="nacionalidade" disabled="disabled"></select> <i></i>
                                <input type="hidden" id="nacionalidade_cadastrada" value="<?php echo $row->nacionalidade?>">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Nome do Pai</label>
                            <div>
                                <input type="text" class="form-control" name="nome_pai" id="nome_pai" placeholder="Nome do pai" value="<?php echo $row->nome_pai?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Nome da Mãe</label>
                            <div>
                                <input type="text" class="form-control" name="nome_mae" id="nome_mae" placeholder="Nome da mãe" value="<?php echo $row->nome_mae?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Sexo</label>
                            <div>
                                <select class="form-control" name="sexo" id="sexo" disabled="disabled">
                                    <option value="0" selected="selected" disabled="disabled">Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select> <i></i>
                                <input type="hidden" id="sexo_cadastrado" value="<?php echo $row->sexo?>">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Escolaridade</label>
                            <div>
                                <select class="form-control" name="escolaridade" id="escolaridade" disabled=""></select> <i></i>
                                <input type="hidden" id="escolaridade_cadastrada" value="<?php echo $row->escolaridade?>">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Estado Civil</label>
                            <div>
                                <select class="form-control" name="estado_civil" id="estado_civil" disabled=""></select> <i></i>
                                <input type="hidden" id="estadoCivil_cadastrado" value="<?php echo $row->estado_civil?>">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Endereço residencial</label>
                            <div>
                                <input type="text" class="form-control" name="endereco_residencial" id="endereco_residencial" placeholder="Endereço residencial" value="<?php echo $row->endereco_residencial;?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Número</label>
                            <div>
                                <input class="form-control" type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $row->numero;?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Complemento</label>
                            <div>
                                <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento" value="<?php echo $row->complemento?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Bairro</label>
                            <div>
                                <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" value="<?php echo $row->bairro?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Cidade</label>
                            <div>
                                <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $row->cidade?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">CEP</label>
                            <div>
                                <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP" data-mask="99999-999" data-mask-placeholder="*" value="<?php echo $row->cep?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Tipo de residência</label>
                            <div>
                                <select class="form-control" name="tipo_residencia" id="tipo_residencia" disabled="disabled"></select> <i></i>
                                <input type="hidden" id="tipoResidencia_cadastrada" value="<?php echo $row->tipo_residencia?>">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-4">
                            <label class="control-label">Tempo na residência</label>
                            <div>
                                <input type="text" class="form-control" name="anos_residencia" id="anos_residencia" placeholder="Tempo na residência" value="<?php echo $row->anos_residencia?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-4">
                            <label class="control-label">Telefone Fixo</label>
                            <div>
                                <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone fixo" data-mask="(99)9999-9999" data-mask-placeholder='*' value="<?php echo $row->telefone?>" disabled="">
                            </div>
                        </section>
                        <section class="col col-4">
                            <label class="control-label">Celular</label>
                            <div>
                                <input class="form-control" type="text" name="celular" id="celular" placeholder="Telefone Celular" data-mask="(99)9999-9999" data-mask-placeholder='*' value="<?php echo $row->celular?>" disabled="">
                            </div>
                        </section>
                    </div>

                    <div class="row">
                        <div class="col col-6">
                            <label class="control-label">E-mail</label>
                            <div>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Endereço de E-mail" value="<?php echo $row->email?>" disabled="">
                            </div>
                        </div>
                    </div>

                </fieldset>
                <?php
                    if($_SESSION['usuario']['grupo'] == 'admin')
                    {
                        ?>
                        <footer>
                            <button type="submit" class="btn btn-primary" disabled="">
                                Salvar associado
                            </button>
                            <a id="trigger_alterar" class="btn btn-default" data-action="editar">
                                Alterar
                            </a>
                        </footer>
                        <?php
                    }
                ?>
            </form>
            <?php
        }
    }
?>
<script type="text/javascript">
    /** Chama as funções básicas para formulário **/
    runAllForms();
    
    /** Chama a função que busca as combobox cadastradas **/    
    buscar_combo();
    
    /** Variável que vai receber um valor caso o campo **/
    var modificado = '';
    
    /** Função desenvolvida para habilitar os campos para edição dos dados do usuário **/
    $('#trigger_alterar').click(function(e){
        e.preventDefault();
        
        if($(this).data('action') == 'editar')
        {
            $(this).html('Cancelar edição').data('action', 'cancelar');
            $('#dados_usuario').find('input, select').prop('disabled', false);
        }
        else
        {
            $(this).html('Alterar').data('action', 'editar');
            
            if(modificado > 1)
            {
                $.SmartMessageBox({
                    title: 'Atenção',
                    content: 'Você realizou mudanças no cadastro. Deseja salvar?',
                    buttons: '[Não][Sim]'
                }, function(e){
                    if(e == 'Não')
                    {
                        buscar_dadosPessoais();
                        buscar_combo();
                        modificado = 0;
                        return false;
                    }
                    else
                    {
                        alert('Os dados serão salvos');
                    }
                });
            }
            
            $('#dados_usuario').find('input, select, button').prop('disabled', true);
        }
    });
    //**************************************************************************
    
    /** Função que verifica se algum select foi modificado pelo evento change**/
    $(document).on('change', 'select', function(){
        modificado = modificado + 1;
        
        $('#dados_usuario').find('button').prop('disabled', false);
    });
    //**************************************************************************
    
    /** Função que verifica se algum input foi modificado pelo evento change ou keyup **/
    $(document).on('change, keyup', 'input', function(){
        modificado = modificado + 1;
        
        $('#dados_usuario').find('button').prop('disabled', false);
    });
    //**************************************************************************
    
    /**
     * buscar_combo()
     * 
     * função desenvolvida para buscar as opções que irão popular as combobox
     * 
     * @author  :       Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     */
    function buscar_combo()
    {
        $.get('<?php echo app_baseurl().'admin/associados/novo/preenchimento_combo'?>', function(e){
            $('#tipo_cota').html(e.tipo_cota);
            $('#estado').html(e.estados);
            $('#nacionalidade').html(e.nacionalidade);
            $('#escolaridade').html(e.escolaridades);
            $('#estado_civil').html(e.estado_civil);
            $('#tipo_residencia').html(e.residencia);
        }, "json").done(function(){
            verifica_checkbox($('#tipo_cota'), $('#tipoCota_cadastrada'));
            verifica_checkbox($('#estado'), $('#estado_cadastrado'));
            verifica_checkbox($('#nacionalidade'), $('#nacionalidade_cadastrada'));
            verifica_checkbox($('#sexo'), $('#sexo_cadastrado'));
            verifica_checkbox($('#escolaridade'), $('#escolaridade_cadastrada'));
            verifica_checkbox($('#estado_civil'), $('#estadoCivil_cadastrado'));
            verifica_checkbox($('#tipo_residencia'), $('#tipoResidencia_cadastrada'));
        });
        
    }
    //**************************************************************************
    
    /**
     * verifica_checkbox()
     * 
     * Função desenvolvida para marcar o checkbox que foi selecionado pelo usuário
     * 
     * @author  :   Matheus Lopes Santos <fale_com_lopez@hotmail.com>
     * @param   :   {string} elemento   Contém o DOM da checkbox
     * @param   :   {string} comparador Contém o DOM do elemento que erá verificado
     */
    function verifica_checkbox(elemento, comparador)
    {
        elemento.find('option').each(function(){
            if($(this).text() == comparador.val())
            {
                $(this).prop('selected', true);
            }
        });
    }
    //**************************************************************************
</script>