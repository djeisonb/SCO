<!-- widget grid -->
<section id="widget-grid" class="">


    <!-- START ROW -->

    <div class="row">

        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-3" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Formulário de Registro</h2>				

                </header>

                <!-- widget div-->
                <div>
                    <!-- widget content -->
                    <div class="widget-body no-padding">

                        <form action="" id="cadastro_usuario" class="smart-form" novalidate="novalidate">
                            <fieldset>
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-font"></i>
                                            <input type="text" name="nome_associado" id="nome_associado" placeholder="Nome do associado">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-tag"></i>
                                            <input type="text" name="cpf_associado" id="cpf_associado" placeholder="CPF" data-mask="999.999.999-99" data-mask-placeholder="*">
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="tipo_cota" id="tipo_cota">
                                                <option value="0" selected="" disabled="">Tipo de Cota</option>
                                                <option value="1">Proprietário</option>
                                                <option value="2">Benemérito</option>
                                                <option value="3">Contribuinte</option>
                                                <option value="4">Temporário</option>
                                            </select> <i></i>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input"> <i class="icon-append fa fa-tags"></i>
                                            <input type="text" name="numero_identidade" id="numero_identidade" placeholder="Numero da identidade">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="data_expedicao" id="data_expedicao" placeholder="Data de expedição" data-mask="99/99/9999" data-mask-placeholder="*">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-bank"></i>
                                            <input type="text" name="orgao_emissor" id="orgao_emissor"  placeholder="Órgão emissor" data-mask="aaa-aa" data-mask-placeholder="*">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="data_nascimento" id="data_nascimento"  placeholder="Data de nascimento" data-mask="99/99/9999" data-mask-placeholder="*">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            <input type="text" name="estado" id="estado" placeholder="Estado">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-font"></i>
                                            <input type="text" name="nome_pai" id="nome_pai" placeholder="Nome do pai">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-font"></i>
                                            <input type="text" name="nome_mae" id="nome_mae" placeholder="Nome da mãe">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="sexo" id="sexo">
                                                <option value="0" selected="" disabled="">Sexo</option>
                                                <option value="1">Masculino</option>
                                                <option value="2">Feminino</option>
                                            </select> <i></i>
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="escolaridade" id="escolaridade">
                                                <option value="0" selected="" disabled="">Escolaridade</option>
                                                <option value="1">Adicionar opções</option>
                                            </select> <i></i>
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="estado_civil" id="estado_civil">
                                                <option value="0" selected="" disabled="">Estado Civil</option>
                                                <option value="1">Adicionar opções</option>
                                            </select> <i></i>
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-home"></i>
                                            <input type="text" name="endereco_residencial" id="endereco_residencial" placeholder="Endereço residencial">
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-sort-numeric-asc"></i>
                                            <input type="text" name="numero" id="numero" placeholder="Número">
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-font"></i>
                                            <input type="text" name="complemento" id="complemento" placeholder="Complemento">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-map-marker"></i>
                                            <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-6">
                                        <label class="input">
                                            <i class="icon-append fa fa-truck"></i>
                                            <input type="text" name="cep" id="cep" placeholder="CEP" data-mask="99999-999" data-mask-placeholder="*">
                                        </label>
                                    </section>
                                    <section class="col col-6">
                                        <label class="select">
                                            <select name="residencia" id="residencia">
                                                <option value="0" selected="" disabled="">Tipo de residência</option>
                                                <option value="1">Adicionar opções</option>
                                            </select> <i></i>
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-calendar"></i>
                                            <input type="text" name="anos_residencia" id="anos_residencia" placeholder="Tempo na residência">
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            <input type="text" name="telefone" name="telefone" placeholder="Telefone fixo" data-mask="(99)9999-9999" data-mask-placeholder='*'>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="input">
                                            <i class="icon-append fa fa-phone"></i>
                                            <input type="text" name="celular" id="celular" placeholder="Telefone Celular" data-mask="(99)9999-9999" data-mask-placeholder='*'>
                                        </label>
                                    </section>
                                </div>
                                
                                <div class="row">
                                    <div class="col col-6">
                                        <label class="input">
                                            <i class="icon-append">@</i>
                                            <input type="text" name="email" id="email" placeholder="Endereço de E-mail">
                                        </label>
                                    </div>
                                </div>
                                
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">
                                    Salvar associado
                                </button>
                            </footer>
                        </form>

                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->				


        </article>
        <!-- END COL -->

    </div>

    <!-- END ROW -->

</section>
<!-- end widget grid -->


<!-- SCRIPTS ON PAGE EVENT -->
<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    pageSetUp();


    // PAGE RELATED SCRIPTS

    // Load form valisation dependency 
    loadScript("./js/plugin/jquery-validate/jquery.validate.min.js", runFormValidation);


    // Registration validation script
    function runFormValidation() {

        var cadastro = $('#cadastro_usuario').validate({
            rules: {
                nome_associado: {
                    required: true
                },
                cpf_associado: {
                    required: true
                },
                tipo_cota: {
                    required: true
                },
                data_expedicao: {
                    required: true
                },
                orgao_emissor: {
                    required: true
                },
                data_nascimento: {
                    required: true
                },
                naturalidade: {
                    required: true
                },
                estado: {
                    required: true
                },
                nome_pai: {
                    required: true
                },
                nome_mae: {
                    required: true
                },
                sexo: {
                    required: true
                },
                escolaridade: {
                    required: true
                },
                estado_civil: {
                    required: true
                },
                endereco_residencial: {
                    required: true
                },
                numero: {
                    digits: true
                },
                bairro: {
                    required: true
                },
                cidade: {
                    required: true
                },
                cep: {
                    required: true
                },
                residencia: {
                    required: true
                },
                anos_residencia: {
                    required: true
                },
                telefone: {
                    required: true
                },
                email: {
                    required: true
                }
            },
            messages: {
                nome_associado: {
                    required: 'Informe o nome do associado'
                },
                cpf_associado: {
                    required: 'Informe um CPF válido'
                },
                tipo_cota: {
                    required: 'Informe o tipo da cota'
                },
                data_expedicao: {
                    required: 'Informe a data de expedição do RG'
                },
                orgao_emissor: {
                    required: 'Informe o órgão emissor do RG'
                },
                data_nascimento: {
                    required: 'Informa a data de nascimento'
                },
                naturalidade: {
                    required: 'Informe a naturalidade'
                },
                estado: {
                    required: 'Informe o estado de nascimento'
                },
                nome_pai: {
                    required: 'Informe o nome do pai'
                },
                nome_mae: {
                    required: 'Informe o nome da mãe'
                },
                sexo: {
                    required: 'Informe o sexo'
                },
                escolaridade: {
                    required: 'Informe a escolaridade'
                },
                estado_civil: {
                    required: 'Informe o estado civil'
                },
                endereco_residencial: {
                    required: 'Informe o endereço'
                },
                numero: {
                    digits: 'Favor informar somente números'
                },
                bairro: {
                    required: 'Informe o bairro'
                },
                cidade: {
                    required: 'Informe a cidade'
                },
                cep: {
                    required: 'Informe o CEP'
                },
                residencia: {
                    required: 'Informe o tipo de residência'
                },
                anos_residencia: {
                    required: 'Informe o tempo na residência'
                },
                telefone: {
                    required: 'Informe um telefone de contato'
                },
                email: {
                    required: 'Informe um endereço de e-mail'
                }
            },
            // Do not change code below
            errorPlacement: function(error, element) {
                error.insertAfter(element.parent());
            }
        });
    };
</script>
