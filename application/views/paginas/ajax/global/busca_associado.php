<?php
    if(!$associados)
    {
        ?>
        <div class="alert alert-block alert-warning col col-lg-12 col-sm-12">
            <h4 class="alert-heading">
                :(
            </h4>
            <p>
                Nenhum resultado para <strong><em><?php echo $search?></em></strong>
            </p>
        </div>
        <?php
    }
    else
    {
        ?>
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
                <?php
                    foreach($associados as $row)
                    {
                        ?>
                        <tr class="click" data-id="<?php echo $row->id?>">
                            <td>
                                <?php echo $row->nome_associado?>
                            </td>
                            <td>
                                <?php echo $row->tipo_cota?>
                            </td>
                            <td>
                                <?php echo date('d/m/Y', strtotime($row->data_adesao))?>
                            </td>
                            <td>
                                Jan/ 2014
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
    }
?>
<script type="text/javascript">
    $('tr.click').click(function(){
        
        url = '<?php echo app_baseurl().'global/perfil_associado/index/'?>'+ $(this).data('id');
        
        loadAjax(url);
    });
</script>