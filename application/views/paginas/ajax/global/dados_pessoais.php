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
            <form id="cadastro_usuario" class="smart-form" novalidate="novalidate">
                <fieldset>
                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Nome</label>
                            <label class="input">
                                <i class="icon-append fa fa-font"></i>
                                <input type="text" name="nome_associado" id="nome_associado" placeholder="Nome do associado" value="<?php echo $row->nome_associado?>" disabled>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">CPF</label>
                            <label class="input">
                                <i class="icon-append fa fa-tag"></i>
                                <input type="text" name="cpf_associado" id="cpf_associado" placeholder="CPF" data-mask="999.999.999-99" data-mask-placeholder="*" value="<?php echo $row->cpf_associado?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Categoria da cota</label>
                            <label class="select" disabled="">
                                <select name="tipo_cota" id="tipo_cota">
                                    <option value="" selected=""><?php echo $row->tipo_cota?></option>
                                </select> <i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Numero da Identidade</label>
                            <label class="input"> <i class="icon-append fa fa-tags"></i>
                                <input type="text" name="numero_identidade" id="numero_identidade" placeholder="Numero da identidade" value="<?php echo $row->numero_identidade?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Data de expedição</label>
                            <label class="input">
                                <i class="icon-append fa fa-calendar"></i>
                                <input type="text" name="data_expedicao" id="data_expedicao" placeholder="Data de expedição" data-mask="99/99/9999" data-mask-placeholder="*" value="<?php echo date('d/m/Y', strtotime($row->data_expedicao))?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Órgão Emissor</label>
                            <label class="input">    
                                <i class="icon-append fa fa-bank"></i>
                                <input type="text" name="orgao_emissor" id="orgao_emissor"  placeholder="Órgão emissor" data-mask="aaa-aa" data-mask-placeholder="*" value="<?php echo $row->orgao_emissor?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Data de nascimento</label>
                            <label class="input">
                                <i class="icon-append fa fa-calendar"></i>
                                <input type="text" name="data_nascimento" id="data_nascimento"  placeholder="Data de nascimento" data-mask="99/99/9999" data-mask-placeholder="*" value="<?php echo date('d/m/Y', strtotime($row->data_nascimento))?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Naturalidade</label>
                            <label class="input">
                                <i class="icon-append fa fa-map-marker"></i>
                                <input type="text" name="naturalidade" id="naturalidade" placeholder="Naturalidade" value="<?php echo $row->naturalidade?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Estado</label>
                            <label class="select">
                                <select name="estado" id="estado">
                                    <option value="" selected=""><?php echo $row->estado?></option>
                                </select> <i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">nacionalidade</label>
                            <label class="select">
                                <select name="nacionalidade" id="nacionalidade">
                                    <option value="" selected=""><?php echo $row->nacionalidade?></option>
                                </select> <i></i>
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Nome do Pai</label>
                            <label class="input">
                                <i class="icon-append fa fa-font"></i>
                                <input type="text" name="nome_pai" id="nome_pai" placeholder="Nome do pai" value="<?php echo $row->nome_pai?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Nome da Mãe</label>
                            <label class="input">
                                <i class="icon-append fa fa-font"></i>
                                <input type="text" name="nome_mae" id="nome_mae" placeholder="Nome da mãe" value="<?php echo $row->nome_mae?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Sexo</label>
                            <label class="select">
                                <select name="sexo" id="sexo" disabled="">
                                    <option value="0" selected="" disabled="">Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select> <i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Escolaridade</label>
                            <label class="select">
                                <select name="escolaridade" id="escolaridade" disabled="">
                                    <option value="" selected=""><?php echo $row->escolaridade?></option>
                                </select> <i></i>
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Estado Civil</label>
                            <label class="select">
                                <select name="estado_civil" id="estado_civil" disabled="">
                                    <option value="" selected=""><?php echo $row->estado_civil?></option>
                                </select> <i></i>
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Endereço residencial</label>
                            <label class="input">
                                <i class="icon-append fa fa-home"></i>
                                <input type="text" name="endereco_residencial" id="endereco_residencial" placeholder="Endereço residencial" value="<?php echo $row->endereco_residencial;?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Número</label>
                            <label class="input">
                                <i class="icon-append fa fa-sort-numeric-asc"></i>
                                <input type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $row->numero;?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Complemento</label>
                            <label class="input">
                                <i class="icon-append fa fa-font"></i>
                                <input type="text" name="complemento" id="complemento" placeholder="Complemento" value="<?php echo $row->complemento?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">Bairro</label>
                            <label class="input">
                                <i class="icon-append fa fa-map-marker"></i>
                                <input type="text" name="bairro" id="bairro" placeholder="Bairro" value="<?php echo $row->bairro?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Cidade</label>
                            <label class="input">
                                <i class="icon-append fa fa-map-marker"></i>
                                <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $row->cidade?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-6">
                            <label class="control-label">CEP</label>
                            <label class="input">
                                <i class="icon-append fa fa-truck"></i>
                                <input type="text" name="cep" id="cep" placeholder="CEP" data-mask="99999-999" data-mask-placeholder="*" value="<?php echo $row->cep?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-6">
                            <label class="control-label">Tipo de residência</label>
                            <label class="select">
                                <select name="tipo_residencia" id="tipo_residencia" disabled="">
                                    <option value="" selected=""><?php echo $row->tipo_residencia?></option>
                                </select> <i></i>
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <section class="col col-4">
                            <label class="control-label">Tempo na residência</label>
                            <label class="input">
                                <i class="icon-append fa fa-calendar"></i>
                                <input type="text" name="anos_residencia" id="anos_residencia" placeholder="Tempo na residência" value="<?php echo $row->anos_residencia?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-4">
                            <label class="control-label">Telefone Fixo</label>
                            <label class="input">
                                <i class="icon-append fa fa-phone"></i>
                                <input type="text" name="telefone" id="telefone" placeholder="Telefone fixo" data-mask="(99)9999-9999" data-mask-placeholder='*' value="<?php echo $row->telefone?>" disabled="">
                            </label>
                        </section>
                        <section class="col col-4">
                            <label class="control-label">Celular</label>
                            <label class="input">
                                <i class="icon-append fa fa-phone"></i>
                                <input type="text" name="celular" id="celular" placeholder="Telefone Celular" data-mask="(99)9999-9999" data-mask-placeholder='*' value="<?php echo $row->celular?>" disabled="">
                            </label>
                        </section>
                    </div>

                    <div class="row">
                        <div class="col col-6">
                            <label class="control-label">E-mail</label>
                            <label class="input">
                                <i class="icon-append">@</i>
                                <input type="text" name="email" id="email" placeholder="Endereço de E-mail" value="<?php echo $row->email?>" disabled="">
                            </label>
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
                            <a class="btn btn-default">Alterar</a>
                        </footer>
                        <?php
                    }
                ?>
            </form>
            <?php
        }
    }