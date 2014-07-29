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
                <div class="input-group input-group-lg hidden-mobile">
                    <input class="form-control input-lg" type="text" placeholder="Digite o nome do associado..." id="search-project">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-fw fa-search fa-lg"></i>
                            &nbsp;&nbsp;&nbsp;
                        </button>
                    </div>
                </div>

                <div class="search-results clearfix smart-form">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Tipo da Cota</th>
                                <th>Data de adesão</th>
                                <th>Último mês pago</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>José Fernandes da Fonseca Neto</td>
                                <td>Cota - Sócio Proprietário</td>
                                <td>27/07/2014 13:30</td>
                                <td>Jan/ 2014</td>
                            </tr>
                            <tr>
                                <td>Altamiro Ferreia da Silva</td>
                                <td>Cota - Sócio Proprietário</td>
                                <td>27/07/2014 13:30</td>
                                <td>Jul/ 2014</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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

</script>
