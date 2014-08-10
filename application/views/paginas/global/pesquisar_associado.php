<!-- row -->
<div class="row">
    <div class="col-sm-12">

        <ul id="myTab1" class="nav nav-tabs bordered">
            <li class="active">
                <a>Busca por associados</a>
            </li>
        </ul>

        <div id="myTabContent1" class="tab-content bg-color-white padding-10">
            <div class="tab-pane fade in active" id="s1">
                <br>
                <form id="busca_associado">
                    <div class="input-group input-group-sm">
                        <input class="form-control input-lg" type="text" placeholder="Digite o nome do associado..." id="search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-fw fa-search fa-lg"></i>
                                &nbsp;&nbsp;&nbsp;
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Div que receberá os dados da busca via ajax -->
                <div class="search-results clearfix smart-form" id="resultados_busca"></div>
                <!--*********************************************************-->
            </div>
        </div>

    </div>

</div>

<!-- end row -->

<script type="text/javascript">
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    pageSetUp();

    // PAGE RELATED SCRIPTS
    $("#search-project").focus();
    
    /**
     * Função desenvolvida para realizar a busca via ajax
     */
    $('#busca_associado').submit(function(e){
        e.preventDefault();
        
        search = $('#search').val();
        
        $.post('<?php echo app_baseurl().'global/pesquisar/search'?>', {search:search}, function(e){
            $('#resultados_busca').html(e);
        });
    
    });

</script>
