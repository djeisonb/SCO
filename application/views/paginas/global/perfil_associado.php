<section id="widget-grid" class="">
    <div class="row">
        <article class="col-sm-12">
            <div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">

                <!-- Header do widget e links para as tabs -->
                <header>
                    <span class="widget-icon">
                        <i class="glyphicon glyphicon-user txt-color-darken"></i>
                    </span>
                    <ul class="nav nav-tabs pull-right in" id="dados_associado">
                        <li class="active">
                            <a data-toggle="tab" href="#dados_pessoais">
                                <i class="fa fa-tags"></i> 
                                <span class="hidden-mobile hidden-tablet">Dados Pessoais</span>
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#mensalidades">
                                <i class="fa fa-money"></i> <span class="hidden-mobile hidden-tablet">Mensalidades</span>
                            </a>
                        </li>
                    </ul>
                </header>
                <!--*********************************************************-->
                
                <!-- Corpo do widget -->
                <div>
                    <div class="widget-body no-padding">
                        <div id="abasConteudo" class="tab-content">
                            <!-- Div que exibirá os dados pessoais do associado selecionado. -->
                            <div class="tab-pane fade active in" id="dados_pessoais"></div>
                            <!--*********************************************-->
                            
                            <!-- Div que exibirá as mensalidades do associado -->
                            <div class="tab-pane fade" id="mensalidades">
                                <table id="inbox-table" class="table table-condensed table-hover table-responsive">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Descrição</th>
                                            <th>Referência</th>
                                            <th>Vencimento</th>
                                            <th>Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td  class="">
                                                <div align="center">
                                                    <input type="checkbox">
                                                </div>
                                            </td>
                                            <td>
                                                Taxa de condomínio
                                            </td>
                                            <td>
                                                Ago/ 2014
                                            </td>
                                            <td>
                                                28/08/2014
                                            </td>
                                            <td>
                                                R$ 115,00
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--*********************************************-->
                        </div>
                    </div>
                </div>
                <!--*********************************************************-->

            </div>
        </article>
    </div>
</section>
<script type="text/javascript">
    /** Chamada da função que busca os dados pessoais **/
    buscar_dadosPessoais();
    
    /** Script para mudar a cor da linha selecionada com o checkbox **/
    $("#inbox-table input[type='checkbox']").change(function() {
        $(this).closest('tr').toggleClass("highlight", this.checked);
    });
    //**************************************************************************
    
    /** Chamada que irá buscar os dados pessoais do usuário **/
    function buscar_dadosPessoais()
    {
        var urlDadosPessoais = '<?php echo app_baseurl().'global/perfil_associado/buscar_dadosPessoais/'.$id?>';
        loadAjax(urlDadosPessoais, $('#dados_pessoais'));
    }
    //**************************************************************************
</script>